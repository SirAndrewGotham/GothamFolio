<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Category;
use App\Models\Language;
use App\Models\Post;
use App\Models\Project;
use App\Models\ProjectType;
use App\Services\PortfolioImageService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Services\LanguageService;

class ProjectController extends Controller
{
    protected $imageService;
    protected $languageService;

    public function __construct(PortfolioImageService $imageService, LanguageService $languageService)
    {
        $this->imageService = $imageService;
        $this->languageService = $languageService;
    }

    public function index()
    {
        $projects = Project::with(['projectType', 'categories'])
            ->latest()
            ->paginate(20);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $projectTypes = ProjectType::all();
        $categories = Category::where('is_active', true)->get();
        $languages = $this->languageService->getAvailableLanguages();

        return view('admin.projects.create', compact('projectTypes', 'categories', 'languages'));
    }

    public function show(Project $project)
    {
        // Load relationships you want to display
        $project->load([
            'projectType',
            'categories',
            'images',
            'translations' // If you want to see all translations
        ]);

        // Get available languages for translation status
        $activeLanguages = \App\Models\Language::active()->ordered()->get();

        // Get existing translations to show which ones are available
        $existingTranslations = $project->translations()
            ->select('locale')
            ->distinct()
            ->pluck('locale');

        return view('admin.projects.show', compact('project', 'activeLanguages', 'existingTranslations'));
    }

    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        // Generate UUID before creating project
        $data['uuid'] = \Illuminate\Support\Str::uuid()->toString();

        // Provide default values for required fields
        $data['duration'] = $data['duration'] ?? 'Not specified';

        // Generate unique slug manually
        $englishName = $data['name']['en'] ?? 'project';
        $data['slug'] = $this->generateUniqueSlugManually($englishName);

        // Handle project image upload
        if ($request->hasFile('image')) {
            // Create the project first to get the ID
            $project = Project::create($data);

            // Now process the image using the project ID
            $processedImages = $this->imageService->processProjectImage(
                $request->file('image'),
                $project->id, // Use project ID instead of slug
                'card',
                null,  // custom folder (use default)
                'images/projects' // base folder
            );

            // Update the project with the image path
            $project->update(['image' => $processedImages['xl']['webp'] ?? null]);
        } else {
            // Create project without image processing
            $project = Project::create($data);
        }

        // Handle project gallery images upload
        if ($request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $galleryImage) {
                $processedImages = $this->imageService->processProjectImage(
                    $galleryImage,
                    $project->id,
                    'lightbox', // Use lightbox sizes for gallery images
                    'images'    // Store in portfolio/{id}/images/ folder
                );

                // Create ProjectImage record
                \App\Models\ProjectImage::create([
                    'project_id' => $project->id,
                    'image_path' => $processedImages['original']['webp'] ?? null,
                    'alt_text' => '', // You might want to generate alt text
                    'order' => 0,     // You might want to set proper order
                    'is_active' => true
                ]);
            }
        }

        // Save translations for each language
        if ($request->has('name') || $request->has('description')) {
            $translations = $request->only(['name', 'description']);

            foreach ($translations as $key => $values) {
                foreach ($values as $locale => $value) {
                    if (!empty($value)) {
                        $project->setTranslation($key, $value, $locale);
                    }
                }
            }
        }

        // Sync categories
        if ($request->has('categories')) {
            $project->syncCategories($request->categories);
        }

        return redirect()->route('admin.projects.index')
            ->with('success', __('admin.portfolio.projects.success_create'));
    }

    public function edit(Project $project)
    {
        $projectTypes = ProjectType::all();
        $categories = Category::where('is_active', true)->get();

        // Get active languages for multilingual form - ADD THIS LINE
        $activeLanguages = \App\Models\Language::active()->ordered()->get();

        // Eager load translations for the project
        $project->load('translations');

        // Eager load project images
        $project->load('images');

        // Make sure to include activeLanguages in the compact() function
        return view('admin.projects.edit', compact('project', 'projectTypes', 'categories', 'activeLanguages'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        \Log::info('UPDATE METHOD - START', [
            'project_id' => $project->id,
            'project_slug' => $project->slug,
            'request_data' => $request->all()
        ]);

        $data = $request->validated();

        // Handle project image update
        if ($request->hasFile('image')) {
            // Delete old images if they exist
            $this->deleteProjectImages($project->id);

            $processedImages = $this->imageService->processProjectImage(
                $request->file('image'),
                $project->id,
                'card',
                null,
                'images/projects'
            );
            $data['image'] = $processedImages['xl']['webp'] ?? null;
        }

        $project->update($data);

        // Save translations for each language - THIS WAS MISSING!
        if ($request->has('name') || $request->has('description')) {
            $translations = $request->only(['name', 'description']);

            foreach ($translations as $key => $values) {
                foreach ($values as $locale => $value) {
                    if (!empty($value)) {
                        $project->setTranslation($key, $value, $locale);
                    }
                }
            }
        }

        // Handle project gallery images upload in edit mode
        if ($request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $galleryImage) {
                $processedImages = $this->imageService->processProjectImage(
                    $galleryImage,
                    $project->id,
                    'lightbox',
                    'images'
                );

                \App\Models\ProjectImage::create([
                    'project_id' => $project->id,
                    'image_path' => $processedImages['original']['webp'] ?? null,
                    'alt_text' => '',
                    'order' => 0,
                    'is_active' => true
                ]);
            }
        }

        // Sync categories
        if ($request->has('categories')) {
            $project->syncCategories($request->categories);
        }

        \Log::info('UPDATE METHOD - COMPLETED', [
            'project_id' => $project->id,
            'updated_data' => $project->getChanges()
        ]);

        return redirect()->route('admin.projects.index')
            ->with('success', __('admin.portfolio.projects.success_update'));
    }

    public function destroy(Project $project)
    {
        // Delete project images
        $this->deleteProjectImages($project->slug);

        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', __('admin.portfolio.projects.success_delete'));
    }

    public function destroyImage($id)
    {
        $projectImage = \App\Models\ProjectImage::findOrFail($id);

        // Delete the image file from storage
        if ($projectImage->image_path) {
            Storage::disk('public')->delete($projectImage->image_path);
        }

        $projectImage->delete();

        return redirect()->back()
            ->with('success', __('admin.portfolio.projects.success_delete_image'));
    }

    protected function deleteProjectImages($projectId)
    {
        $pattern = "portfolio/{$projectId}/*"; // Changed to use project ID
        $directories = Storage::disk('public')->directories("portfolio/{$projectId}"); // Changed to use project ID

        foreach ($directories as $directory) {
            Storage::disk('public')->deleteDirectory($directory);
        }
    }

    /**
     * Generate a unique slug manually (to avoid HasSlug trait issues)
     */
    protected function generateUniqueSlugManually(string $name): string
    {
        $slug = \Illuminate\Support\Str::slug($name);
        $originalSlug = $slug;
        $suffix = 1;

        // Check if slug already exists (don't exclude any ID for new creations)
        while (Project::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $suffix++;
        }

        return $slug;
    }
}

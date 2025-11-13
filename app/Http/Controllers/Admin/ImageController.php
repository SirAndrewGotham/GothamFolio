<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Models\Image;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(Gallery $gallery)
    {
        $images = $gallery->images()->ordered()->paginate(20);
        return view('admin.galleries.images.index', compact('gallery', 'images'));
    }

    public function create(Gallery $gallery)
    {
        $activeLanguages = Language::active()->ordered()->get();
        return view('admin.galleries.images.create', compact('gallery', 'activeLanguages'));
    }

    public function store(StoreImageRequest $request, Gallery $gallery)
    {
        $validated = $request->validated();

        // Handle file upload
        $width = null;
        $height = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');

            // Get image dimensions
            try {
                $imageInfo = getimagesize($file->getPathname());
                if ($imageInfo) {
                    $width = $imageInfo[0];
                    $height = $imageInfo[1];
                }
            } catch (\Exception $e) {
                // Log error but continue without dimensions
                \Log::error('Failed to get image dimensions: ' . $e->getMessage());
            }

            $validated['file_path'] = $path;
            $validated['file_name'] = $file->getClientOriginalName();
            $validated['file_size'] = $file->getSize();
            $validated['mime_type'] = $file->getMimeType();
        }

        // Use the prepared main_title and main_description fields
        $imageData = [
            'title' => $validated['main_title'],
            'description' => $validated['main_description'] ?? null,
            'file_path' => $validated['file_path'] ?? null,
            'file_name' => $validated['file_name'] ?? null,
            'file_size' => $validated['file_size'] ?? null,
            'mime_type' => $validated['mime_type'] ?? null,
            'width' => $width,
            'height' => $height,
            'year' => $validated['year'] ?? null,
            'camera_model' => $validated['camera_model'] ?? null,
            'camera_settings' => $validated['camera_settings'] ?? null,
            'location' => $validated['location'] ?? null,
            'is_published' => $validated['is_published'] ?? false,
            'order' => $validated['order'] ?? 0,
            'gallery_id' => $gallery->id,
        ];

        $image = Image::create($imageData);

        // Save translations for all active languages
        $activeLanguages = \App\Models\Language::active()->pluck('code');

        foreach ($activeLanguages as $languageCode) {
            if ($request->has("title.{$languageCode}") || $request->has("description.{$languageCode}")) {
                $translations = [];

                if ($request->has("title.{$languageCode}")) {
                    $translations['title'] = $request->input("title.{$languageCode}");
                }

                if ($request->has("description.{$languageCode}")) {
                    $descriptionValue = $request->input("description.{$languageCode}");
                    // Only add description if it's not null or empty string
                    if (!empty($descriptionValue)) {
                        $translations['description'] = $descriptionValue;
                    }
                }

                if (!empty($translations)) {
                    $image->setTranslations($translations, $languageCode);
                }
            }
        }

        return redirect()->route('admin.galleries.images.index', $gallery)
            ->with('success', __('admin.gallery.image_uploaded'));
    }

    public function edit(Gallery $gallery, Image $image)
    {
        $activeLanguages = Language::active()->ordered()->get();
        return view('admin.galleries.images.edit', compact('gallery', 'image', 'activeLanguages'));
    }

    /**
     * Display the specified image.
     */
    public function show(Gallery $gallery, Image $image)
    {
        $image->load('translations');
        // The show view will handle language filtering internally
        return view('admin.galleries.images.show', compact('gallery', 'image'));
    }

    public function update(UpdateImageRequest $request, Gallery $gallery, Image $image)
    {
        $validated = $request->validated();

        // Handle file upload if a new image is provided
        $width = null;
        $height = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');

            // Get image dimensions
            try {
                $imageInfo = getimagesize($file->getPathname());
                if ($imageInfo) {
                    $width = $imageInfo[0];
                    $height = $imageInfo[1];
                }
            } catch (\Exception $e) {
                // Log error but continue without dimensions
                \Log::error('Failed to get image dimensions: ' . $e->getMessage());
            }

            // Delete the old image file if it exists
            if ($image->file_path) {
                Storage::disk('public')->delete($image->file_path);
            }

            // Add new file data to update
            $validated['file_path'] = $path;
            $validated['file_name'] = $file->getClientOriginalName();
            $validated['file_size'] = $file->getSize();
            $validated['mime_type'] = $file->getMimeType();
            $validated['width'] = $width;
            $validated['height'] = $height;
        }

        // Prepare the update data using the prepared main_title and main_description
        $updateData = [
            'title' => $validated['main_title'],
            'description' => $validated['main_description'] ?? null,
            'year' => $validated['year'] ?? null,
            'camera_model' => $validated['camera_model'] ?? null,
            'camera_settings' => $validated['camera_settings'] ?? null,
            'location' => $validated['location'] ?? null,
            'is_published' => $validated['is_published'] ?? false,
            'order' => $validated['order'] ?? 0,
        ];

        // Add file data to update if a new image was uploaded
        if ($request->hasFile('image')) {
            $updateData['file_path'] = $validated['file_path'];
            $updateData['file_name'] = $validated['file_name'];
            $updateData['file_size'] = $validated['file_size'];
            $updateData['mime_type'] = $validated['mime_type'];
            $updateData['width'] = $validated['width'];
            $updateData['height'] = $validated['height'];
        }

        $image->update($updateData);

        // Save translations for all active languages
        $activeLanguages = Language::active()->pluck('code');

        foreach ($activeLanguages as $languageCode) {
            if ($request->has("title.{$languageCode}") || $request->has("description.{$languageCode}")) {
                $translations = [];

                if ($request->has("title.{$languageCode}")) {
                    $translations['title'] = $request->input("title.{$languageCode}");
                }

                if ($request->has("description.{$languageCode}")) {
                    $descriptionValue = $request->input("description.{$languageCode}");
                    // Only add description if it's not null or empty string
                    if (!empty($descriptionValue)) {
                        $translations['description'] = $descriptionValue;
                    }
                }

                if (!empty($translations)) {
                    $image->setTranslations($translations, $languageCode);
                }
            }
        }

        return redirect()->route('admin.galleries.images.index', $gallery)
            ->with('success', __('admin.gallery.image_updated'));
    }

    public function destroy(Gallery $gallery, Image $image)
    {
        // Delete the file from storage
        if ($image->file_path) {
            Storage::disk('public')->delete($image->file_path);
        }

        $image->delete();

        return redirect()->route('admin.galleries.images.index', $gallery)
            ->with('success', __('admin.gallery.images_uploaded'));
    }

    public function allImages()
    {
        $images = Image::with('gallery')
            ->ordered()
            ->paginate(30);

        return view('admin.images.index', compact('images'));
    }

    public function createMultiple(Gallery $gallery)
    {
        return view('admin.galleries.images.create-multiple', compact('gallery'));
    }

    public function storeMultiple(Request $request, Gallery $gallery)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'image|max:10240',
            'is_published' => 'boolean',
            'title_prefix' => 'nullable|array',
            'title_prefix.*' => 'nullable|string|max:50',
        ]);

        $isPublished = $request->has('is_published');
        $activeLanguages = \App\Models\Language::active()->pluck('code');
        $titlePrefixes = $request->input('title_prefix', []);
        $usedSlugs = []; // Track used slugs to avoid duplicates

        foreach ($request->file('images') as $file) {
            $path = $file->store('images/galleries', 'public');
            $baseTitle = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

            // Get image dimensions
            $width = null;
            $height = null;
            try {
                $imageInfo = getimagesize($file->getPathname());
                if ($imageInfo) {
                    $width = $imageInfo[0];
                    $height = $imageInfo[1];
                }
            } catch (\Exception $e) {
                \Log::error('Failed to get image dimensions: ' . $e->getMessage());
            }

            // Generate unique slug - ensure it's unique across both database and current batch
            $baseSlug = \Illuminate\Support\Str::slug($baseTitle);
            $slug = $baseSlug;
            $suffix = 1;

            // Check if slug exists in database OR in current batch
            while (\App\Models\Image::where('slug', $slug)->exists() || in_array($slug, $usedSlugs)) {
                $slug = $baseSlug . '-' . $suffix++;
            }
            $usedSlugs[] = $slug; // Add to used slugs for this batch

            $image = $gallery->images()->create([
                'title' => $baseTitle,
                'file_path' => $path,
                'file_name' => $file->getClientOriginalName(),
                'file_size' => $file->getSize(),
                'mime_type' => $file->getMimeType(),
                'width' => $width,
                'height' => $height,
                'is_published' => $isPublished,
                'slug' => $slug, // Manually set the unique slug
            ]);

            // Save translations for all active languages
            foreach ($activeLanguages as $languageCode) {
                $prefix = $titlePrefixes[$languageCode] ?? '';
                $translatedTitle = $prefix . $baseTitle;

                // Only set translation if title is not empty
                if (!empty($translatedTitle)) {
                    $image->setTranslation('title', $translatedTitle, $languageCode);
                }
            }
        }

        return redirect()->route('admin.galleries.images.index', $gallery)
            ->with('success', __('admin.gallery.images_uploaded'));
    }
}

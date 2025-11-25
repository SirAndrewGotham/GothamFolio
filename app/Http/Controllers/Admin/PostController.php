<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Language;
use App\Models\Post;
use App\Services\PortfolioImageService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    protected $imageService;

    public function __construct(PortfolioImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index(Request $request)
    {
        $filter = $request->get('filter');

        $posts = Post::query()
            ->with('language') // Add this to eager load the language relationship
            ->when($filter === 'published', fn($q) => $q->where('is_published', true))
            ->when($filter === 'draft', fn($q) => $q->where('is_published', false))
            ->latest()
            ->get()
            ->groupBy('post_id');

        // Add active languages for the translation display
        $activeLanguages = \App\Models\Language::active()->ordered()->get();

        return view('admin.blog.index', compact('posts', 'filter', 'activeLanguages'));
    }

    public function create()
    {
        $languages = Language::active()->ordered()->get();

        return view('admin.blog.create', compact('languages'));
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        // Handle published_at logic
        if (empty($data['published_at'])) {
            // If no publish date is set, use current time
            $data['published_at'] = now();
        }

        // Handle excerpt generation from content if excerpt is empty
        $this->generateExcerpt($data);

        // Ensure post_id is null for new posts (not translations)
        $data['post_id'] = null;

        // Create post first to get ID
        $post = Post::create($data);

        // After post creation/update, sync categories
        if ($request->has('categories')) {
            $post->categories()->sync($request->categories);
        }

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $processedImages = $this->imageService->processProjectImage(
                $request->file('featured_image'),
                $post->id,
                'card',
                null,  // custom folder (use default)
                'images/blogs' // base folder
            );
            $post->update(['featured_image' => $processedImages['xl']['webp'] ?? null]);
        }

        return redirect()->route('admin.blog.index')
            ->with('success', 'Post created successfully');
    }

    public function show(Post $post)
    {
        $post->load(['language', 'author', 'categories', 'tags']);
        $translations = Post::where('post_id', $post->post_id)
            ->with('language')
            ->get();

        // Get missing languages for translation button
        $activeLanguages = Language::active()->ordered()->get();
        $missingLanguages = $activeLanguages->whereNotIn('id', $translations->pluck('language_id'));

        return view('admin.blog.show', compact('post', 'translations', 'missingLanguages'));
    }

    public function translate(Post $post)
    {
        $activeLanguages = Language::active()->ordered()->get();
        $existingTranslations = Post::where('post_id', $post->post_id)->pluck('language_id');
        $availableLanguages = $activeLanguages->whereNotIn('id', $existingTranslations);

        return view('admin.blog.translate', compact('post', 'availableLanguages'));
    }

    public function storeTranslation(StorePostRequest $request, Post $post)
    {
        $translationData = $request->validated();

        // Handle excerpt generation from content if excerpt is empty
        $this->generateExcerpt($translationData);

        // Create new translation using the source post's post_id
        $translationData['post_id'] = $post->post_id;

        $translation = Post::create($translationData);

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $processedImages = $this->imageService->processProjectImage(
                $request->file('featured_image'),
                $translation->id,
                'card',
                null,  // custom folder (use default)
                'images/blogs' // base folder
            );
            $translation->update(['featured_image' => $processedImages['xl']['webp'] ?? null]);
        }

        return redirect()->route('admin.posts.show', $post) // Fix route name
        ->with('success', 'Translation created successfully');
    }

    public function edit(Post $post)
    {
        $languages = Language::active()->ordered()->get();
        $post->load(['categories', 'tags']);

        return view('admin.blog.edit', compact('post', 'languages'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();

        // Handle featured image update
        if ($request->hasFile('featured_image')) {
            // Delete old images if they exist
            $this->deletePostImages($post->id, 'blog');

            $processedImages = $this->imageService->processProjectImage(
                $request->file('featured_image'),
                $post->id,
                'card',
                null,  // custom folder (use default)
                'images/blogs' // base folder
            );
            $data['featured_image'] = $processedImages['xl']['webp'] ?? null;
        }

        $post->update($data);

        // After post creation/update, sync categories
        if ($request->has('categories')) {
            $post->categories()->sync($request->categories);
        }

        return redirect()->route('admin.blog.index')
            ->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        // Delete post images
        $this->deletePostImages($post->id, 'images/blogs');

        $post->delete();

        return redirect()->route('admin.blog.index')
            ->with('success', 'Post deleted successfully');
    }

    protected function deletePostImages($itemId, $folder = 'images/blogs')
    {
        $pattern = "{$folder}/{$itemId}/*";
        $directories = Storage::disk('public')->directories("{$folder}/{$itemId}");

        foreach ($directories as $directory) {
            Storage::disk('public')->deleteDirectory($directory);
        }
    }

    /**
     * Generate excerpt from content if not provided.
     */
    private function generateExcerpt(array &$data): void
    {
        if (empty($data['excerpt']) && !empty($data['content'])) {
            $cleanContent = strip_tags($data['content']);
            $cleanContent = preg_replace('/\s+/', ' ', $cleanContent);
            $cleanContent = trim($cleanContent);
            $data['excerpt'] = Str::limit($cleanContent, 200);
        }
    }
}

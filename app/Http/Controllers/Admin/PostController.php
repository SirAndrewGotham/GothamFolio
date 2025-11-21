<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Language;
use App\Models\Post;
use App\Services\PortfolioImageService;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    protected $imageService;

    public function __construct(PortfolioImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        // Get posts grouped by post_id with their translations
        $posts = Post::with(['language', 'author'])
            ->orderBy('post_id', 'desc')
            ->orderBy('language_id')
            ->get()
            ->groupBy('post_id');

        // Get all active languages to show which translations are missing
        $activeLanguages = Language::active()->ordered()->get();

        return view('admin.blog.index', compact('posts', 'activeLanguages'));
    }

    public function create()
    {
        $languages = Language::active()->ordered()->get();

        return view('admin.blog.create', compact('languages'));
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        // Ensure post_id is null for new posts (not translations)
        $data['post_id'] = null;

        // Create post first to get ID
        $post = Post::create($data);

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
        // Create new translation using the source post's post_id
        $translationData = $request->validated();
        $translationData['post_id'] = $post->post_id;

        $translation = Post::create($translationData);

        return redirect()->route('admin.blog.show', $post)
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

        return redirect()->route('admin.blog.index')
            ->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        // Delete post images
        $this->deletePostImages($post->id, 'blog');

        $post->update($data);

        // Debug: check what's being updated
        \Log::info('Post updated', ['post_id' => $post->id, 'data' => $data]);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Post updated successfully');
    }

    protected function deletePostImages($itemId, $folder = 'images/blogs')
    {
        $pattern = "{$folder}/{$itemId}/*";
        $directories = Storage::disk('public')->directories("{$folder}/{$itemId}");

        foreach ($directories as $directory) {
            Storage::disk('public')->deleteDirectory($directory);
        }
    }
}

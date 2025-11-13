<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of blog posts
     */
    public function index(Request $request)
    {
        $currentLocale = app()->getLocale();
        $language = Language::where('code', $currentLocale)->firstOr(function () {
            return Language::where('code', 'en')->first();
        });

        $query = Post::with(['author', 'categories', 'tags'])
            ->where('language_id', $language->id)
            ->published()
            ->latest('published_at');

        // Get featured posts (is_featured = true)
        $featuredPosts = Post::with(['author', 'categories', 'tags'])
            ->where('language_id', $language->id)
            ->where('is_featured', true)
            ->published()
            ->latest('published_at')
            ->take(2)
            ->get();

        // Filter by category if requested
        if ($request->has('category') && $request->category !== 'all') {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $posts = $query->paginate(12);

        // Get categories that are actually used by Post models from categorizables table
        $categories = Category::whereIn('id', function ($query) {
            $query->select('category_id')
                ->from('categorizables')
                ->where('categorizable_type', \App\Models\Post::class);
        })
            ->get()
            ->mapWithKeys(fn($category) => [
                $category->slug => $category->getTranslation('name')
            ]);

        return view('frontend.blog.index', compact('posts', 'categories', 'featuredPosts'));
    }

    /**
     * Display a single blog post
     */
    public function show($slug)
    {
        $currentLocale = app()->getLocale();
        $language = Language::where('code', $currentLocale)->firstOr(function () {
            return Language::where('code', 'en')->first();
        });

        $post = Post::where('slug', $slug)
            ->where('language_id', $language->id)
            ->with(['author', 'categories', 'tags'])
            ->published()
            ->firstOrFail();

        // Increment views count
        $post->increment('views_count');

        // Get related posts (same categories, same language)
        $relatedPosts = Post::where('language_id', $language->id)
            ->where('id', '!=', $post->id)
            ->whereHas('categories', function($query) use ($post) {
                $query->whereIn('categories.id', $post->categories->pluck('id'));
            })
            ->with(['author', 'categories'])
            ->published()
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('frontend.blog.show', compact('post', 'relatedPosts'));
    }
}

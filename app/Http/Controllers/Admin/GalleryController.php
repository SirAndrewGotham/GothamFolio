<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::withCount('images')
            ->ordered()
            ->paginate(20);

        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        $activeLanguages = Language::active()->ordered()->get();
        return view('admin.galleries.create', compact('activeLanguages'));
    }

    public function store(StoreGalleryRequest $request)
    {
        $validated = $request->validated();

        // Handle cover image upload using PortfolioImageService
        $coverImagePath = null;
        if ($request->hasFile('cover_image_file')) {
            $portfolioImageService = app(\App\Services\PortfolioImageService::class);

            // For galleries, we'll use a simpler approach - just store the original image
            $file = $request->file('cover_image_file');
            $filename = 'gallery-cover-' . Str::random(8) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('gallery-covers', $filename, 'public');

            $validated['cover_image'] = $path;
        }

        // Use the prepared main_title and main_description fields
        $galleryData = [
            'title' => $validated['main_title'],
            'description' => $validated['main_description'] ?? null,
            'cover_image' => $validated['cover_image'] ?? null,
            'year' => $validated['year'] ?? null,
            'is_featured' => $validated['is_featured'] ?? false,
            'is_published' => $validated['is_published'] ?? true,
            'order' => $validated['order'] ?? 0,
        ];

        $gallery = Gallery::create($galleryData);

        // Save translations for all active languages
        $activeLanguages = Language::active()->pluck('code');

        foreach ($activeLanguages as $languageCode) {
            if ($request->has("title.{$languageCode}") || $request->has("description.{$languageCode}")) {
                $translations = [];

                if ($request->has("title.{$languageCode}")) {
                    $translations['title'] = $request->input("title.{$languageCode}");
                }

                if ($request->has("description.{$languageCode}")) {
                    $translations['description'] = $request->input("description.{$languageCode}");
                }

                if (!empty($translations)) {
                    $gallery->setTranslations($translations, $languageCode);
                }
            }
        }

        return redirect()->route('admin.galleries.index')
            ->with('success', __('admin.gallery.gallery_created'));
    }

    public function show(Gallery $gallery)
    {
        $gallery->load('images');

        return view('admin.galleries.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $validated = $request->validated();

        // Handle cover image upload
        if ($request->hasFile('cover_image_file')) {
            $file = $request->file('cover_image_file');
            $filename = 'gallery-cover-' . Str::random(8) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('gallery-covers', $filename, 'public');

            $validated['cover_image'] = $path;
        }

        // Prepare the update data using the prepared main_title and main_description
        $updateData = [
            'title' => $validated['main_title'],
            'description' => $validated['main_description'] ?? null,
            'cover_image' => $validated['cover_image'] ?? $gallery->cover_image,
            'year' => $validated['year'] ?? null,
            'is_featured' => $validated['is_featured'] ?? false,
            'is_published' => $validated['is_published'] ?? true,
            'order' => $validated['order'] ?? 0,
        ];

        $gallery->update($updateData);

        // Save translations for all active languages
        $activeLanguages = Language::active()->pluck('code');

        foreach ($activeLanguages as $languageCode) {
            if ($request->has("title.{$languageCode}") || $request->has("description.{$languageCode}")) {
                $translations = [];

                if ($request->has("title.{$languageCode}")) {
                    $translations['title'] = $request->input("title.{$languageCode}");
                }

                if ($request->has("description.{$languageCode}")) {
                    $translations['description'] = $request->input("description.{$languageCode}");
                }

                if (!empty($translations)) {
                    $gallery->setTranslations($translations, $languageCode);
                }
            }
        }

        return redirect()->route('admin.galleries.index')
            ->with('success', __('admin.gallery.gallery_updated'));
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('admin.galleries.index')
            ->with('success', __('admin.gallery.gallery_deleted'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Models\Image;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
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
        return view('admin.galleries.images.create', compact('gallery'));
    }

    public function store(StoreImageRequest $request, Gallery $gallery)
    {
        $imageData = $request->validated();

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $imageData['file_path'] = $path;
            $imageData['file_name'] = $file->getClientOriginalName();
            $imageData['file_size'] = $file->getSize();
            $imageData['mime_type'] = $file->getMimeType();
        }

        $image = $gallery->images()->create($imageData);

        // Save translations
        $image->setTranslations([
            'title' => $request->input('title:en'),
            'description' => $request->input('description:en'),
        ], 'en');

        $image->setTranslations([
            'title' => $request->input('title:eo'),
            'description' => $request->input('description:eo'),
        ], 'eo');

        $image->setTranslations([
            'title' => $request->input('title:ru'),
            'description' => $request->input('description:ru'),
        ], 'ru');

        return redirect()->route('admin.galleries.images.index', $gallery)
            ->with('success', 'Image uploaded successfully');
    }

    public function edit(Gallery $gallery, Image $image)
    {
        return view('admin.galleries.images.edit', compact('gallery', 'image'));
    }

    /**
     * Display the specified image.
     */
    public function show(Gallery $gallery, Image $image)
    {
        $image->load('translations');
        return view('admin.galleries.images.show', compact('gallery', 'image'));
    }

    public function update(UpdateImageRequest $request, Gallery $gallery, Image $image)
    {
        $image->update($request->validated());

        // Update translations
        $image->setTranslations([
            'title' => $request->input('title:en'),
            'description' => $request->input('description:en'),
        ], 'en');

        $image->setTranslations([
            'title' => $request->input('title:eo'),
            'description' => $request->input('description:eo'),
        ], 'eo');

        $image->setTranslations([
            'title' => $request->input('title:ru'),
            'description' => $request->input('description:ru'),
        ], 'ru');

        return redirect()->route('admin.galleries.images.index', $gallery)
            ->with('success', 'Image updated successfully');
    }

    public function destroy(Gallery $gallery, Image $image)
    {
        // Delete the file from storage
        if ($image->file_path) {
            Storage::disk('public')->delete($image->file_path);
        }

        $image->delete();

        return redirect()->route('admin.galleries.images.index', $gallery)
            ->with('success', 'Image deleted successfully');
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
        ]);

        $isPublished = $request->has('is_published');

        foreach ($request->file('images') as $file) {
            $path = $file->store('images/galleries', 'public');
            $title = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

            $image = $gallery->images()->create([
                'title' => $title,
                'file_path' => $path,
                'file_name' => $file->getClientOriginalName(),
                'file_size' => $file->getSize(),
                'mime_type' => $file->getMimeType(),
                'is_published' => $isPublished,
            ]);

            // Save translations for all languages using the filename as base
            $image->setTranslations([
                'title' => $title,
                'description' => null,
            ], 'en');

            $image->setTranslations([
                'title' => $title,
                'description' => null,
            ], 'eo');

            $image->setTranslations([
                'title' => $title,
                'description' => null,
            ], 'ru');
        }

        return redirect()->route('admin.galleries.images.index', $gallery)
            ->with('success', 'Images uploaded successfully');
    }
}

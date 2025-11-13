<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;

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
        return view('admin.galleries.create');
    }

    public function store(StoreGalleryRequest $request)
    {
        $gallery = Gallery::create($request->validated());

        // Save translations
        $gallery->setTranslations([
            'title' => $request->input('title:en'),
            'description' => $request->input('description:en'),
        ], 'en');

        $gallery->setTranslations([
            'title' => $request->input('title:eo'),
            'description' => $request->input('description:eo'),
        ], 'eo');

        $gallery->setTranslations([
            'title' => $request->input('title:ru'),
            'description' => $request->input('description:ru'),
        ], 'ru');

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery created successfully');
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
        $gallery->update($request->validated());

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery updated successfully');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery deleted successfully');
    }
}

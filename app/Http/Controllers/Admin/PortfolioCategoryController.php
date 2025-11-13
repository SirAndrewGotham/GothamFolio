<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolioCategoryRequest;
use App\Http\Requests\UpdatePortfolioCategoryRequest;
use App\Models\Category;
use App\Services\PortfolioImageService;
use Illuminate\Support\Facades\Storage;

class PortfolioCategoryController extends Controller
{
    protected $imageService;

    public function __construct(PortfolioImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $categories = Category::whereHas('projects')->latest()->paginate(20);

        return view('admin.portfolio.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.portfolio.categories.create');
    }

    public function store(StorePortfolioCategoryRequest $request)
    {
        $data = $request->validated();
        
        // Handle cover image upload
        if ($request->hasFile('cover')) {
            $coverPath = $this->processCategoryCover($request->file('cover'));
            $data['cover'] = $coverPath;
        }

        $category = Category::create($data);

        return redirect()->route('admin.portfolio.categories.index')
            ->with('success', 'Portfolio category created successfully');
    }

    public function edit(Category $category)
    {
        return view('admin.portfolio.categories.edit', compact('category'));
    }

    public function update(UpdatePortfolioCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        
        // Handle cover image update
        if ($request->hasFile('cover')) {
            // Delete old cover if exists
            if ($category->cover) {
                Storage::disk('public')->delete($category->cover);
            }
            
            $coverPath = $this->processCategoryCover($request->file('cover'));
            $data['cover'] = $coverPath;
        }

        $category->update($data);

        return redirect()->route('admin.portfolio.categories.index')
            ->with('success', 'Portfolio category updated successfully');
    }

    public function destroy(Category $category)
    {
        // Delete cover image if exists
        if ($category->cover) {
            Storage::disk('public')->delete($category->cover);
        }

        $category->delete();

        return redirect()->route('admin.portfolio.categories.index')
            ->with('success', 'Portfolio category deleted successfully');
    }

    protected function processCategoryCover($image)
    {
        $filename = 'category-' . uniqid() . '.webp';
        $path = 'portfolio/categories/covers/' . $filename;

        $img = \Intervention\Image\Facades\Image::make($image);
        
        // Resize and optimize for category covers
        $img->fit(800, 600)->encode('webp', 85);
        
        Storage::disk('public')->put($path, $img->stream());

        return $path;
    }
}

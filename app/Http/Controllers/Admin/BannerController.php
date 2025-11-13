<?php

namespace App\Http\Controllers\Admin;

use App\Actions\HandleModelTranslations;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBannerRequest;
use App\Http\Requests\Admin\UpdateBannerRequest;
use App\Models\Banner;
use App\Models\Language;

class BannerController extends Controller
{
    protected array $translatableAttributes = ['title', 'description', 'button_text'];

    public function index()
    {
        $banners = Banner::withCurrentTranslations()->ordered()->get();

        return view('admin.homepage.banner.index', compact('banners'));
    }

    public function create()
    {
        $languages = Language::active()->ordered()->get();

        return view('admin.homepage.banner.create', compact('languages'));
    }

    public function store(StoreBannerRequest $request, HandleModelTranslations $handleTranslations)
    {
        $validated = $request->validated();

        $banner = new Banner;
        $handleTranslations($banner, $validated, $this->translatableAttributes);

        return redirect()->route('admin.banner.index')->with('success', 'Banner created successfully.');
    }

    public function edit(Banner $banner)
    {
        $banner->load('translations');

        return view('admin.homepage.banner.edit', compact('banner'));
    }

    public function update(UpdateBannerRequest $request, Banner $banner, HandleModelTranslations $handleTranslations)
    {
        $validated = $request->validated();

        $handleTranslations($banner, $validated, $this->translatableAttributes);

        return redirect()->route('admin.banner.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();

        return redirect()->route('admin.banner.index')->with('success', 'Banner deleted successfully.');
    }
}

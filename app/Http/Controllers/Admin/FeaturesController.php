<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFeatureRequest;
use App\Http\Requests\Admin\UpdateFeatureRequest;
use App\Models\Feature;
use App\Actions\HandleModelTranslations;

class FeaturesController extends Controller
{
    public function index()
    {
        $features = Feature::withCurrentTranslations()->ordered()->get();
        return view('admin.homepage.features.index', compact('features'));
    }

    public function create()
    {
        return view('admin.homepage.features.create');
    }

    public function store(StoreFeatureRequest $request, HandleModelTranslations $handleTranslations)
    {
        $validated = $request->validated();

        $feature = new Feature();
        $handleTranslations($feature, $validated, $this->translatableAttributes);

        return redirect()->route('admin.features.index')->with('success', 'Feature created successfully.');
    }

    public function edit(Feature $feature)
    {
        $feature->load('translations');
        return view('admin.homepage.features.edit', compact('feature'));
    }

    public function update(UpdateFeatureRequest $request, Feature $feature, HandleModelTranslations $handleTranslations)
    {
        $validated = $request->validated();

        $handleTranslations($feature, $validated, $this->translatableAttributes);

        return redirect()->route('admin.features.index')->with('success', 'Feature updated successfully.');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.features.index')->with('success', 'Feature deleted successfully.');
    }
}

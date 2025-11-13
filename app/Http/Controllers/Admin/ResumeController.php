<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreResumeRequest;
use App\Http\Requests\Admin\UpdateResumeRequest;
use App\Models\ResumeSummary;
use App\Actions\HandleModelTranslations;

class ResumeController extends Controller
{
    public function index()
    {
        $resumeItems = ResumeSummary::withCurrentTranslations()->ordered()->get();
        return view('admin.homepage.resume.index', compact('resumeItems'));
    }

    public function create()
    {
        return view('admin.homepage.resume.create');
    }

    public function store(StoreResumeRequest $request, HandleModelTranslations $handleTranslations)
    {
        $validated = $request->validated();

        $resumeItem = new ResumeSummary();
        $handleTranslations($resumeItem, $validated, $this->translatableAttributes);

        return redirect()->route('admin.resume.index')->with('success', 'Resume item created successfully.');
    }

    public function edit(ResumeSummary $resume)
    {
        $resume->load('translations');
        return view('admin.homepage.resume.edit', compact('resume'));
    }

    public function update(UpdateResumeRequest $request, ResumeSummary $resume, HandleModelTranslations $handleTranslations)
    {
        $validated = $request->validated();

        $handleTranslations($resume, $validated, $this->translatableAttributes);

        return redirect()->route('admin.resume.index')->with('success', 'Resume item updated successfully.');
    }

    public function destroy(ResumeSummary $resume)
    {
        $resume->delete();
        return redirect()->route('admin.resume.index')->with('success', 'Resume item deleted successfully.');
    }
}

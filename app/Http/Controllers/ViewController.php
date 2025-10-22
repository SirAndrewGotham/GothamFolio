<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreViewRequest;
use App\Http\Requests\UpdateViewRequest;
use App\Models\View;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display a form for creating a new View resource.
     */
    public function create()
    {
        //
    }

    /**
         * Create and persist a new View resource using the request's validated data.
         *
         * @param StoreViewRequest $request The request containing validated input for the new View.
         */
    public function store(StoreViewRequest $request)
    {
        //
    }

    /**
         * Display the specified View resource.
         *
         * @param \App\Models\View $view The View model instance resolved via route-model binding.
         */
    public function show(View $view)
    {
        //
    }

    /**
     * Show the form for editing the specified view resource.
     *
     * @param \App\Models\View $view The View model instance to edit.
     */
    public function edit(View $view)
    {
        //
    }

    /**
     * Update the specified View resource with validated data from the request.
     *
     * @param \App\Http\Requests\UpdateViewRequest $request The validated data for the update.
     * @param \App\Models\View $view The View model instance to be updated.
     */
    public function update(UpdateViewRequest $request, View $view)
    {
        //
    }

    /**
     * Remove the given View resource from storage.
     *
     * @param \App\Models\View $view The View model instance to delete.
     */
    public function destroy(View $view)
    {
        //
    }
}
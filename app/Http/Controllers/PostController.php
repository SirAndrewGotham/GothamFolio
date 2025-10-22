<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new Post resource.
     */
    public function create()
    {
        //
    }

    /**
     * Persist a new Post resource using data validated by the request.
     *
     * @param \App\Http\Requests\StorePostRequest $request The validated request containing attributes for the new Post.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified Post resource.
     *
     * @param \App\Models\Post $post The Post instance resolved by route-model binding.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Display a form for editing the specified Post.
     *
     * @param \App\Models\Post $post The Post instance to edit (route-model bound).
     * @return \Illuminate\Http\Response|\Illuminate\View\View Response containing the edit form.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified Post with validated data and persist the changes.
     *
     * @param UpdatePostRequest $request The validated request data for the update.
     * @param Post $post The Post model instance to be updated (route-model binding).
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified Post resource from storage.
     *
     * @param Post $post The Post instance to be removed (route-model bound).
     */
    public function destroy(Post $post)
    {
        //
    }
}
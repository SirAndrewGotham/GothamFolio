<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new comment.
     *
     * Display a view containing the form used to create a new Comment resource.
     */
    public function create()
    {
        //
    }

    /**
     * Persist a new Comment using validated data from the request.
     *
     * @param StoreCommentRequest $request Validated input for creating a Comment.
     */
    public function store(StoreCommentRequest $request)
    {
        //
    }

    /**
     * Display the specified Comment.
     *
     * @param \App\Models\Comment $comment The Comment model instance to display.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified comment.
     *
     * @param Comment $comment The comment instance to be edited.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the given Comment with validated data from the request.
     *
     * @param UpdateCommentRequest $request Validated input for updating the comment.
     * @param Comment $comment The Comment model instance to update.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Delete the specified comment resource.
     *
     * @param \App\Models\Comment $comment The Comment model instance to delete.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
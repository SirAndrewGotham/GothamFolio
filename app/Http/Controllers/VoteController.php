<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVoteRequest;
use App\Http\Requests\UpdateVoteRequest;
use App\Models\Vote;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display a form for creating a new Vote resource.
     */
    public function create()
    {
        //
    }

    /**
         * Create and persist a new Vote using validated input from the request.
         *
         * @param \App\Http\Requests\StoreVoteRequest $request Validated data for creating a Vote.
         */
    public function store(StoreVoteRequest $request)
    {
        //
    }

    /**
     * Display the specified Vote resource.
     *
     * @param \App\Models\Vote $vote The route-model-bound Vote instance to display.
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Display the form to edit the specified Vote.
     *
     * @param \App\Models\Vote $vote The Vote instance to edit.
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
         * Update the given Vote using validated data from the request.
         *
         * @param \App\Http\Requests\UpdateVoteRequest $request Validated input for updating the vote.
         * @param \App\Models\Vote $vote The vote instance to update.
         */
    public function update(UpdateVoteRequest $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified Vote resource from storage.
     *
     * @param \App\Models\Vote $vote The Vote instance to remove.
     */
    public function destroy(Vote $vote)
    {
        //
    }
}
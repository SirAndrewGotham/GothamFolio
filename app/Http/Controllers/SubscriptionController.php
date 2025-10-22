<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriptionRequest;
use App\Http\Requests\UpdateSubscriptionRequest;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Create a new Subscription from validated request data and persist it to storage.
     *
     * @param StoreSubscriptionRequest $request Validated request containing the subscription attributes.
     */
    public function store(StoreSubscriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified Subscription resource.
     *
     * @param \App\Models\Subscription $subscription The subscription instance to display.
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified subscription.
     *
     * @param \App\Models\Subscription $subscription The subscription to edit.
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
         * Update the given Subscription with validated request data.
         *
         * @param UpdateSubscriptionRequest $request Validated input for updating the subscription.
         * @param Subscription $subscription The subscription instance to update.
         */
    public function update(UpdateSubscriptionRequest $request, Subscription $subscription)
    {
        //
    }

    /**
     * Delete the specified subscription.
     *
     * @param \App\Models\Subscription $subscription The subscription instance to delete.
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
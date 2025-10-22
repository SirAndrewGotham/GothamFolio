<?php

namespace App\Services;

use App\Models\Subscription;
use App\Models\Post;
use App\Mail\NewPostNotification;
use Illuminate\Support\Facades\Mail;

class SubscriptionService
{
    /**
     * Notify subscriptions relevant to the given post and mark them as notified.
     *
     * Selects subscriptions that should be notified which are either global (no categories)
     * or that list any of the post's category IDs, sends a notification for each subscription,
     * and then marks each subscription as notified.
     *
     * @param Post $post The post that triggered notifications.
     */
    public function notifySubscribers(Post $post): void
    {
        $subscriptions = Subscription::shouldBeNotified()
            ->where(function($query) use ($post) {
                // Global subscriptions or subscriptions that include post's categories
                $query->whereNull('categories')
                    ->orWhereJsonContains('categories', $post->categories->pluck('id')->toArray());
            })
            ->get();

        foreach ($subscriptions as $subscription) {
            $this->sendNotification($subscription, $post);
            $subscription->markAsNotified();
        }
    }

    /**
     * Send a new-post email to the subscription's email address and log any failure.
     *
     * @param Subscription $subscription The subscription that should receive the notification.
     * @param Post $post The post used to populate the notification content.
     */
    protected function sendNotification(Subscription $subscription, Post $post): void
    {
        try {
            Mail::to($subscription->email)
                ->send(new NewPostNotification($post, $subscription));
        } catch (\Exception $e) {
            \Log::error('Failed to send notification to: ' . $subscription->email, [
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Return a snapshot of subscriber counts across several categories.
     *
     * Provides totals grouped by overall count, active/verified status, scope (global vs. category-specific),
     * and origin (registered users vs. guests).
     *
     * @return array<string,int> Associative array with keys:
     *  - 'total' => total number of subscriptions.
     *  - 'active' => number of subscriptions matching the `active` scope.
     *  - 'verified' => number of subscriptions matching the `verified` scope.
     *  - 'global' => number of global subscriptions (no category restrictions).
     *  - 'category_specific' => number of subscriptions tied to one or more categories.
     *  - 'from_users' => number of subscriptions associated with a user (user_id not null).
     *  - 'from_guests' => number of subscriptions from guests (user_id is null).
     */
    public function getSubscriberStats(): array
    {
        return [
            'total' => Subscription::count(),
            'active' => Subscription::active()->count(),
            'verified' => Subscription::verified()->count(),
            'global' => Subscription::global()->count(),
            'category_specific' => Subscription::withCategories()->count(),
            'from_users' => Subscription::whereNotNull('user_id')->count(),
            'from_guests' => Subscription::whereNull('user_id')->count(),
        ];
    }
}
<?php

namespace App\Services;

use App\Models\Subscription;
use App\Models\Post;
use App\Mail\NewPostNotification;
use Illuminate\Support\Facades\Mail;

class SubscriptionService
{
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

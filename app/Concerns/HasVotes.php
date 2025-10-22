<?php

namespace App\Concerns;

use App\Models\Vote;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait HasVotes
{
    /**
     * Boot the HasVotes trait for a model.
     */
    protected static function bootHasVotes(): void
    {
        // Add any model event listeners here if needed
    }

    /**
     * Get all the votes for the model.
     */
    public function votes(): MorphMany
    {
        return $this->morphMany(Vote::class, 'votable');
    }

    /**
     * Get upvotes for the model.
     */
    public function upvotes(): MorphMany
    {
        return $this->votes()->where('type', 'upvote');
    }

    /**
     * Get downvotes for the model.
     */
    public function downvotes(): MorphMany
    {
        return $this->votes()->where('type', 'downvote');
    }

    /**
     * Get the upvotes count.
     */
    public function getUpvotesCountAttribute(): int
    {
        return $this->upvotes()->count();
    }

    /**
     * Get the downvotes count.
     */
    public function getDownvotesCountAttribute(): int
    {
        return $this->downvotes()->count();
    }

    /**
     * Get the net votes (upvotes - downvotes).
     */
    public function getNetVotesAttribute(): int
    {
        return $this->upvotes_count - $this->downvotes_count;
    }

    /**
     * Add or update a vote for the model.
     *
     * @param int $userId
     * @param string $type
     * @return \App\Models\Vote
     * @throws \InvalidArgumentException
     */
    public function vote(int $userId, string $type): Vote
    {
        if (!in_array($type, ['upvote', 'downvote'])) {
            throw new \InvalidArgumentException('Vote type must be "upvote" or "downvote"');
        }

        $vote = $this->votes()->where('user_id', $userId)->first();

        if ($vote) {
            $vote->update(['type' => $type]);
        } else {
            $vote = new Vote();
            $vote->votable_type = $this->getMorphClass();
            $vote->votable_id = $this->id;
            $vote->user_id = $userId;
            $vote->type = $type;
            $vote->save();
        }

        return $vote;
    }

    /**
     * Remove a user's vote from the model.
     */
    public function removeVote(int $userId): bool
    {
        return (bool) $this->votes()->where('user_id', $userId)->delete();
    }

    /**
     * Check if a user has voted on the model.
     */
    public function hasVoteFrom(int $userId): bool
    {
        return $this->votes()->where('user_id', $userId)->exists();
    }

    /**
     * Get the user's vote type if they have voted.
     */
    public function getUserVoteType(int $userId): ?string
    {
        return $this->votes()->where('user_id', $userId)->value('type');
    }
}

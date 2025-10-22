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
     * Get the polymorphic one-to-many relation for votes attached to the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany A MorphMany relation for the model's Vote records.
     */
    public function votes(): MorphMany
    {
        return $this->morphMany(Vote::class, 'votable');
    }

    /**
     * Retrieve the model's votes filtered to upvotes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany Morph many relation containing Vote models with type "upvote".
     */
    public function upvotes(): MorphMany
    {
        return $this->votes()->where('type', 'upvote');
    }

    /**
     * Retrieve the relation for this model's votes filtered to downvotes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany MorphMany relation containing votes with type 'downvote'.
     */
    public function downvotes(): MorphMany
    {
        return $this->votes()->where('type', 'downvote');
    }

    /**
     * Number of upvotes associated with the model.
     *
     * @return int The total count of votes with type "upvote" for this model.
     */
    public function getUpvotesCountAttribute(): int
    {
        return $this->upvotes()->count();
    }

    /**
     * Number of downvotes for the model.
     *
     * @return int The count of downvotes.
     */
    public function getDownvotesCountAttribute(): int
    {
        return $this->downvotes()->count();
    }

    /**
     * Net vote total for the model computed as upvotes minus downvotes.
     *
     * @return int The net number of votes (upvotes_count minus downvotes_count).
     */
    public function getNetVotesAttribute(): int
    {
        return $this->upvotes_count - $this->downvotes_count;
    }

    /**
     * Create or update the authenticated user's vote on this model.
     *
     * If the user has an existing vote on the model, its type is updated; otherwise a new Vote is created.
     *
     * @param int $userId The identifier of the user casting the vote.
     * @param string $type The vote type — must be either "upvote" or "downvote".
     * @return \App\Models\Vote The Vote model instance that was created or updated.
     * @throws \InvalidArgumentException If $type is not "upvote" or "downvote".
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
     * Delete the vote belonging to the given user for this model.
     *
     * @param int $userId The ID of the user whose vote should be removed.
     * @return bool `true` if a vote was deleted, `false` otherwise.
     */
    public function removeVote(int $userId): bool
    {
        return (bool) $this->votes()->where('user_id', $userId)->delete();
    }

    /**
         * Determine whether the given user has a vote on this model.
         *
         * @param int $userId The user's ID to check for an existing vote.
         * @return bool `true` if the user has a vote on the model, `false` otherwise.
         */
    public function hasVoteFrom(int $userId): bool
    {
        return $this->votes()->where('user_id', $userId)->exists();
    }

    /**
     * Retrieve the vote type cast by a given user on this model.
     *
     * @param int $userId The ID of the user whose vote to retrieve.
     * @return string|null `'upvote'` or `'downvote'` if the user voted, `null` otherwise.
     */
    public function getUserVoteType(int $userId): ?string
    {
        return $this->votes()->where('user_id', $userId)->value('type');
    }
}
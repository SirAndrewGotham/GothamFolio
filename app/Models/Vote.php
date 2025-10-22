<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'votable_type',
        'votable_id',
        'user_id',
        'type'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Retrieve the parent model targeted by this vote.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo The polymorphic relation to the votable model.
     */
    public function votable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the user that cast the vote.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo The voter user relation.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Add a query constraint to only include votes with type 'upvote'.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The query builder filtered to upvotes.
     */
    public function scopeUpvote($query)
    {
        return $query->where('type', 'upvote');
    }

    /**
     * Scope the query to only votes with type "downvote".
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The query builder filtered to downvotes.
     */
    public function scopeDownvote($query)
    {
        return $query->where('type', 'downvote');
    }
}
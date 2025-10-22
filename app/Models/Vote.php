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
     * Get the parent votable model.
     */
    public function votable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Relationship with the user who voted.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope for upvotes.
     */
    public function scopeUpvote($query)
    {
        return $query->where('type', 'upvote');
    }

    /**
     * Scope for downvotes.
     */
    public function scopeDownvote($query)
    {
        return $query->where('type', 'downvote');
    }
}

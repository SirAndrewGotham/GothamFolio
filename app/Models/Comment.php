<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Concerns\HasVotes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory, SoftDeletes, HasVotes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post_id',
        'parent_id',
        'name',
        'email',
        'content',
        'is_approved',
        'user_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_approved' => 'boolean',
    ];

    /**
     * Get the post that this comment belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo The post relationship.
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Relationship with the parent comment.
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    /**
     * Get the comment's replies.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany Child comments where `parent_id` equals this comment's id.
     */
    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    /**
     * Get the relation linking this comment to its author user, if any.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo The BelongsTo relation for the comment's user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope for approved comments.
     */
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }

    /**
         * Filter the query to comments that are pending approval.
         *
         * @param \Illuminate\Database\Eloquent\Builder $query The Eloquent query builder.
         * @return \Illuminate\Database\Eloquent\Builder The query filtered to comments where `is_approved` is false.
         */
    public function scopePending($query)
    {
        return $query->where('is_approved', false);
    }

    /**
     * Scope for top-level comments (no parent).
     */
    public function scopeTopLevel($query)
    {
        return $query->whereNull('parent_id');
    }

    /**
     * Limit the query to comments that are replies (have a non-null parent_id).
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The query builder filtered to reply comments.
     */
    public function scopeIsReply($query)
    {
        return $query->whereNotNull('parent_id');
    }

    /**
     * Indicates whether the comment is a reply to another comment.
     *
     * @return bool `true` if the comment has a parent comment (is a reply), `false` otherwise.
     */
    public function getIsReplyAttribute(): bool
    {
        return !is_null($this->parent_id);
    }

    /**
     * Determine whether this comment has any replies.
     *
     * @return bool true if the comment has one or more replies, false otherwise.
     */
    public function getHasRepliesAttribute(): bool
    {
        return $this->replies()->count() > 0;
    }

    /**
     * Get the author's display name, preferring the linked user's name when present.
     *
     * @return string The author's display name: the associated user's name if available, otherwise the comment's stored name.
     */
    public function getAuthorNameAttribute(): string
    {
        return $this->user ? $this->user->name : $this->name;
    }

    /**
     * Get the comment author's email, preferring the associated user's email when available.
     *
     * @return string The author's email address; the associated user's email if present, otherwise the comment's email.
     */
    public function getAuthorEmailAttribute(): string
    {
        return $this->user ? $this->user->email : $this->email;
    }

    /**
         * Get the avatar URL for the comment author.
         *
         * @return string The avatar URL: the associated user's avatar if present; otherwise a Gravatar identicon URL derived from the author's email.
         */
    public function getAuthorAvatarAttribute(): string
    {
        if ($this->user && $this->user->avatar) {
            return $this->user->avatar;
        }

        // Generate gravatar or default avatar
        $email = $this->author_email;
        $hash = md5(strtolower(trim($email)));

        return "https://www.gravatar.com/avatar/{$hash}?d=identicon&s=100";
    }

    /**
     * Mark the comment as approved.
     *
     * @return bool `true` if the comment was successfully updated, `false` otherwise.
     */
    public function approve(): bool
    {
        return $this->update(['is_approved' => true]);
    }

    /**
     * Mark the comment as rejected by setting its approval flag to false.
     *
     * @return bool `true` if the model was successfully updated, `false` otherwise.
     */
    public function reject(): bool
    {
        return $this->update(['is_approved' => false]);
    }

    /**
     * Determine whether the comment was created by an authenticated user.
     *
     * @return bool `true` if the comment is associated with a user, `false` otherwise.
     */
    public function getIsFromAuthenticatedUserAttribute(): bool
    {
        return !is_null($this->user_id);
    }

    /**
     * Register model boot callbacks to associate an authenticated user with a new comment.
     *
     * When a comment is being created and the currently authenticated user's email matches
     * the comment's email, sets the comment's `user_id` to the authenticated user's id
     * and updates the comment `name` to the authenticated user's name.
     */
    protected static function booted(): void
    {
        static::creating(function (Comment $comment) {
            if (auth()->check() && auth()->user()->email === $comment->email) {
                $comment->user_id = auth()->id();
                $comment->name = auth()->user()->name;
            }
        });
    }

    /**
     * Filter comments to those that have one or more replies.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The modified query including only comments with replies.
     */
    public function scopeWithReplies($query)
    {
        return $query->has('replies');
    }

    /**
     * Restricts the query to comments that have no replies.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The current query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The query builder filtered to comments without replies.
     */
    public function scopeWithoutReplies($query)
    {
        return $query->doesntHave('replies');
    }

    /**
         * Restrict the query to comments created by authenticated users.
         *
         * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
         * @return \Illuminate\Database\Eloquent\Builder The query builder filtered to records where `user_id` is not null.
         */
    public function scopeFromAuthenticatedUsers($query)
    {
        return $query->whereNotNull('user_id');
    }

    /**
     * Limit the query to comments authored by guest users (no associated user).
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The modified query builder.
     */
    public function scopeFromGuests($query)
    {
        return $query->whereNull('user_id');
    }

    /**
     * Order the query by newest records first.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query The query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder The query ordered by `created_at` descending.
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Order the query results by creation time from oldest to newest.
     *
     * @param \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder $query The query builder instance.
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder The builder ordered by `created_at` ascending.
     */
    public function scopeOldest($query)
    {
        return $query->orderBy('created_at', 'asc');
    }
}
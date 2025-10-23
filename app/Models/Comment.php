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
     * Relationship with the author (user).
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relationship with the post.
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
     * Relationship with replies.
     */
    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    /**
     * Relationship with votes.
     */
    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }

    /**
     * Relationship with the user (if authenticated).
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
     * Scope for pending comments.
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
     * Scope for replies.
     */
    public function scopeIsReply($query)
    {
        return $query->whereNotNull('parent_id');
    }

    /**
     * Check if the comment is a reply.
     */
    public function getIsReplyAttribute(): bool
    {
        return !is_null($this->parent_id);
    }

    /**
     * Check if the comment has replies.
     */
    public function getHasRepliesAttribute(): bool
    {
        return $this->replies()->count() > 0;
    }

    /**
     * Get the author's name with fallback.
     */
    public function getAuthorNameAttribute(): string
    {
        return $this->user ? $this->user->name : $this->name;
    }

    /**
     * Get the author's email with fallback.
     */
    public function getAuthorEmailAttribute(): string
    {
        return $this->user ? $this->user->email : $this->email;
    }

    /**
     * Get the author's avatar URL.
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
     * Approve the comment.
     */
    public function approve(): bool
    {
        return $this->update(['is_approved' => true]);
    }

    /**
     * Reject the comment.
     */
    public function reject(): bool
    {
        return $this->update(['is_approved' => false]);
    }

    /**
     * Check if the comment is from an authenticated user.
     */
    public function getIsFromAuthenticatedUserAttribute(): bool
    {
        return !is_null($this->user_id);
    }

    /**
     * Automatically set user_id if user is authenticated and matches email.
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
     * Scope for comments with replies.
     */
    public function scopeWithReplies($query)
    {
        return $query->has('replies');
    }

    /**
     * Scope for comments without replies.
     */
    public function scopeWithoutReplies($query)
    {
        return $query->doesntHave('replies');
    }

    /**
     * Scope for comments from authenticated users.
     */
    public function scopeFromAuthenticatedUsers($query)
    {
        return $query->whereNotNull('user_id');
    }

    /**
     * Scope for comments from guest users.
     */
    public function scopeFromGuests($query)
    {
        return $query->whereNull('user_id');
    }

    /**
     * Scope ordered by most recent.
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Scope ordered by oldest.
     */
    public function scopeOldest($query)
    {
        return $query->orderBy('created_at', 'asc');
    }
}

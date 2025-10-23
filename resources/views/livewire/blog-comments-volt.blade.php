<?php

use App\Models\Comment;
use App\Models\Post;
use function Livewire\Volt\{state, rules, mount};

state([
    'post' => null,
    'content' => '',
    'parentId' => null,
    'comments' => [],
]);

mount(function (Post $post) {
    $this->post = $post;
    $this->loadComments();
});

rules([
    'content' => 'required|string|max:1000',
]);

$loadComments = function () {
    $this->comments = $this->post->comments()
        ->whereNull('parent_id')
        ->with(['author', 'replies.author', 'votes'])
        ->latest()
        ->get();
};

$store = function () {
    $this->validate();

    Comment::create([
        'content' => $this->content,
        'post_id' => $this->post->id,
        'user_id' => auth()->id(),
        'parent_id' => $this->parentId,
    ]);

    $this->content = '';
    $this->parentId = null;
    $this->loadComments();
};

$destroy = function (Comment $comment) {
    if ($comment->user_id !== auth()->id() && !auth()->user()->isAdmin()) {
        abort(403, 'Unauthorized action.');
    }

    $comment->delete();
    $this->loadComments();
};

$setParent = function ($commentId) {
    $this->parentId = $commentId;
};

$cancelReply = function () {
    $this->parentId = null;
};

?>

<div>
    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-8">
        Comments ({{ $comments->count() }})
    </h2>

    <!-- Comment Form -->
    @auth
        <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 mb-8">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                @if($parentId)
                    Reply to comment
                @else
                    Leave a comment
                @endif
            </h3>
            <form wire:submit="store">
                <input type="hidden" name="post_id" value="{{ $post->id }}">

                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Your comment
                    </label>
                    <textarea
                        wire:model="content"
                        id="content"
                        name="content"
                        rows="4"
                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-900 dark:text-white"
                        placeholder="Share your thoughts..."
                        required
                    ></textarea>
                </div>

                <div class="flex gap-2">
                    <button
                        type="submit"
                        class="px-6 py-2 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-md transition-colors"
                    >
                        Post Comment
                    </button>

                    @if($parentId)
                        <button
                            type="button"
                            wire:click="cancelReply"
                            class="px-6 py-2 bg-gray-300 dark:bg-gray-700 hover:bg-gray-400 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300 font-medium rounded-md transition-colors"
                        >
                            Cancel
                        </button>
                    @endif
                </div>
            </form>
        </div>
    @else
        <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 mb-8 text-center">
            <p class="text-gray-600 dark:text-gray-400 mb-4">
                Please <a href="{{ route('login') }}"
                          class="text-primary-600 hover:text-primary-700 font-medium">login</a>
                to leave a comment.
            </p>
        </div>
    @endauth

    <!-- Comments List -->
    @if($comments->count() > 0)
        <div class="space-y-6">
            @foreach($comments as $comment)
                <div
                    class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                    <!-- Comment Header -->
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex items-center">
                            @if($comment->author)
                                @if($comment->author && $comment->author->profile_photo_path)
                                    <img src="{{ asset($comment->author->profile_photo_path) }}"
                                         alt="{{ $comment->author->name }}"
                                         class="w-10 h-10 rounded-full mr-3">
                                @else
                                    <div
                                        class="w-10 h-10 bg-primary-500 rounded-full flex items-center justify-center text-white font-medium mr-3">
                                        {{ substr($comment->author->name, 0, 1) }}
                                    </div>
                                @endif
                            @endif
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">{{ $comment->author?->name ?? 'Unknown User' }}</h4>
                                <time class="text-sm text-gray-500 dark:text-gray-400">
                                    {{ $comment->created_at->diffForHumans() }}
                                </time>
                            </div>
                        </div>

                        <!-- Vote Buttons -->
                        <div class="flex items-center gap-2">
                            <button class="text-gray-400 hover:text-green-600 transition-colors">
                                <i class="fas fa-arrow-up"></i>
                            </button>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">
                                {{ $comment->votes_count }}
                            </span>
                            <button class="text-gray-400 hover:text-red-600 transition-colors">
                                <i class="fas fa-arrow-down"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Comment Content -->
                    <p class="text-gray-700 dark:text-gray-300 mb-4">
                        {{ $comment->content }}
                    </p>

                    <!-- Comment Actions -->
                    <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400">
                        @auth
                            <button wire:click="setParent({{ $comment->id }})"
                                    class="hover:text-primary-600 transition-colors">
                                <i class="fas fa-reply mr-1"></i> Reply
                            </button>
                        @endauth

                        @if(auth()->id() === $comment->user_id)
                            <button wire:click="destroy({{ $comment->id }})"
                                    class="hover:text-red-600 transition-colors"
                                    onclick="return confirm('Are you sure you want to delete this comment?')">
                                <i class="fas fa-trash mr-1"></i> Delete
                            </button>
                        @endif
                    </div>

                    <!-- Nested Replies -->
                    @if($comment->replies->count() > 0)
                        <div class="mt-4 pl-6 border-l-2 border-gray-200 dark:border-gray-700 space-y-4">
                            @foreach($comment->replies as $reply)
                                <div class="bg-gray-50 dark:bg-gray-900 rounded-lg p-4">
                                    <div class="flex items-start justify-between mb-2">
                                        <div class="flex items-center">
                                            @if($reply->author)
                                                @if($reply->author && $reply->author->profile_photo_path)
                                                    <img src="{{ asset($reply->author->profile_photo_path) }}"
                                                         alt="{{ $reply->author->name }}"
                                                         class="w-8 h-8 rounded-full mr-2">
                                                @else
                                                    <div
                                                        class="w-8 h-8 bg-primary-500 rounded-full flex items-center justify-center text-white text-xs font-medium mr-2">
                                                        {{ substr($reply->author->name, 0, 1) }}
                                                    </div>
                                                @endif
                                            @endif
                                            <div>
                                                <h5 class="text-sm font-semibold text-gray-900 dark:text-white">{{ $reply->author?->name ?? 'Unknown User' }}</h5>
                                                <time class="text-xs text-gray-500 dark:text-gray-400">
                                                    {{ $reply->created_at->diffForHumans() }}
                                                </time>
                                            </div>
                                        </div>

                                        <!-- Reply Vote Buttons -->
                                        <div class="flex items-center gap-1">
                                            <button
                                                class="text-gray-400 hover:text-green-600 text-xs transition-colors">
                                                <i class="fas fa-arrow-up"></i>
                                            </button>
                                            <span class="text-xs font-medium text-gray-700 dark:text-gray-300">
                                                {{ $reply->votes_count }}
                                            </span>
                                            <button class="text-gray-400 hover:text-red-600 text-xs transition-colors">
                                                <i class="fas fa-arrow-down"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <p class="text-sm text-gray-700 dark:text-gray-300">
                                        {{ $reply->content }}
                                    </p>

                                    @if(auth()->id() === $reply->user_id)
                                        <button wire:click="destroy({{ $reply->id }})"
                                                class="text-xs text-red-600 hover:text-red-700 transition-colors mt-2"
                                                onclick="return confirm('Are you sure you want to delete this reply?')">
                                            <i class="fas fa-trash mr-1"></i> Delete
                                        </button>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @else
        <!-- No Comments Message -->
        <div class="text-center py-12 bg-gray-50 dark:bg-gray-800 rounded-xl">
            <div
                class="w-16 h-16 bg-primary-100 dark:bg-primary-900 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-comments text-primary-600 dark:text-primary-400 text-xl"></i>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No comments yet</h3>
            <p class="text-gray-600 dark:text-gray-400">
                Be the first to share your thoughts!
            </p>
        </div>
    @endif
</div>

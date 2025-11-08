<?php

use App\Models\Comment;
use App\Models\Post;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use function Livewire\Volt\{state, rules, mount, computed};

new #[Layout('components.frontend.layouts.app')] class extends Component {
    state([
        'post' => null,
        'content' => '',
        'name' => '',
        'email' => '',
        'parentId' => null,
        'refreshTrigger' => 0,
    ]);

    mount(function (Post $post) {
        $this->post = $post;
    });

    // Use computed property for paginated comments
    $comments = computed(function () {
        return $this->post->comments()
            ->whereNull('parent_id')
            ->approved()
            ->with(['author',
                'replies' => function ($query) {
                    $query->with(['author', 'votes'])
                        ->withCount(['upvotes as upvotes_count', 'downvotes as downvotes_count']);
                },
                'votes'])
            ->withCount(['upvotes as upvotes_count', 'downvotes as downvotes_count'])
            ->latest()
            ->paginate(3);
    });

    $redirectToLogin = function () {
        return redirect()->route('login');
    };

    rules([
        'content' => 'required|string|max:1000',
        'name' => 'required_if:parentId,null|string|max:255|nullable',
        'email' => 'required_if:parentId,null|email|max:255|nullable',
    ]);

    $store = function () {
        $this->validate();

        $commentData = [
            'content' => $this->content,
            'post_id' => $this->post->id,
            'parent_id' => $this->parentId,
        ];

        if (auth()->check()) {
            $commentData['user_id'] = auth()->id();
            $commentData['is_approved'] = true;
        } else {
            $commentData['name'] = $this->name;
            $commentData['email'] = $this->email;
            $commentData['is_approved'] = false;
        }

        $comment = Comment::create($commentData);

        // Reset form fields
        $this->content = '';
        $this->name = '';
        $this->email = '';
        $this->parentId = null;

        // Refresh the computed property
        $this->comments();
    };

    $destroy = function (Comment $comment) {
        if ($comment->user_id !== auth()->id() && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $comment->delete();
        $this->comments();
    };

    $setParent = function ($commentId) {
        $this->parentId = $commentId;
    };

    $cancelReply = function () {
        $this->parentId = null;
    };

    $upvote = function ($commentId) {
        if (!auth()->check()) {
            session()->put('url.intended', url()->current());
            return $this->redirect(route('login'));
        }

        $comment = Comment::findOrFail($commentId);
        $comment->vote(auth()->id(), 'upvote');

        // Increment refresh trigger to force re-render
        $this->refreshTrigger++;

        // Refresh comments
        $this->comments();
    };

    $downvote = function ($commentId) {
        if (!auth()->check()) {
            session()->put('url.intended', url()->current());
            return $this->redirect(route('login'));
        }

        $comment = Comment::findOrFail($commentId);
        $comment->vote(auth()->id(), 'downvote');

        // Increment refresh trigger to force re-render
        $this->refreshTrigger++;

        // Refresh comments
        $this->comments();
    };

    $getUserVoteType = function ($commentId) {
        if (!auth()->check()) {
            return null;
        }

        $comment = Comment::findOrFail($commentId);
        return $comment->getUserVoteType(auth()->id());
    };

}; ?>

<div wire:key="comments-{{ $post->id }}-{{ $refreshTrigger }}-{{ now()->timestamp }}">

    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-8">
        Comments ({{ $this->comments->total() }})
    </h2>

    <!-- Comment Form -->
    @if($post->allow_comments)
        @if(auth()->check() || $post->allow_anonymous_comments)
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 mb-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                    @if($parentId)
                        Reply to comment
                    @else
                        Leave a comment
                    @endif
                </h3>

                @if(!auth()->check() && $post->allow_anonymous_comments)
                    <div class="bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-md p-4 mb-4">
                        <p class="text-yellow-800 dark:text-yellow-200 text-sm">
                            <i class="fas fa-info-circle mr-1"></i>
                            All anonymous comments will be pre-moderated before appearing publicly.
                        </p>
                    </div>
                @endif

                <form wire:submit="store">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">

                    @if(!auth()->check() && $parentId === null)
                        <!-- Anonymous user fields for top-level comments only -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Your Name
                                </label>
                                <input
                                    wire:model="name"
                                    id="name"
                                    name="name"
                                    type="text"
                                    class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-900 dark:text-white"
                                    placeholder="Enter your name"
                                    required
                                >
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Your Email
                                </label>
                                <input
                                    wire:model="email"
                                    id="email"
                                    name="email"
                                    type="email"
                                    class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-900 dark:text-white"
                                    placeholder="Enter your email"
                                    required
                                >
                            </div>
                        </div>
                    @endif

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
                            @if($parentId)
                                Post Reply
                            @else
                                Post Comment
                            @endif
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
        @endif
    @else
        <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 mb-8 text-center">
            <p class="text-gray-600 dark:text-gray-400">
                Comments are disabled for this post.
            </p>
        </div>
    @endif

    <!-- Comments List -->
    @if($this->comments->count() > 0)
        <div class="space-y-6">
            @foreach($this->comments as $comment)
                <div
                    class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                    <!-- Comment Header -->
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex items-center">
                            @if($comment->author)
                                @if($comment->author->profile_photo_path)
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
                            <button wire:click="upvote({{ $comment->id }})"
                                    class="text-gray-400 hover:text-green-600 transition-colors {{ $this->getUserVoteType($comment->id) === 'upvote' ? 'text-green-600' : '' }}">
                                <i class="fas fa-thumbs-up"></i>
                                <span class="text-xs ml-1">{{ $comment->upvotes_count }}</span>
                            </button>
                            <span class="text-sm text-gray-500 dark:text-gray-400">|</span>
                            <button wire:click="downvote({{ $comment->id }})"
                                    class="text-gray-400 hover:text-red-600 transition-colors {{ $this->getUserVoteType($comment->id) === 'downvote' ? 'text-red-600' : '' }}">
                                <i class="fas fa-thumbs-down"></i>
                                <span class="text-xs ml-1">{{ $comment->downvotes_count }}</span>
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
                                            <button wire:click="upvote({{ $reply->id }})"
                                                    class="text-gray-400 hover:text-green-600 text-xs transition-colors {{ $this->getUserVoteType($reply->id) === 'upvote' ? 'text-green-600' : '' }}">
                                                <i class="fas fa-thumbs-up"></i>
                                                <span class="text-[10px] ml-0.5">{{ $reply->upvotes_count }}</span>
                                            </button>
                                            <span class="text-xs text-gray-500 dark:text-gray-400">|</span>
                                            <button wire:click="downvote({{ $reply->id }})"
                                                    class="text-gray-400 hover:text-red-600 text-xs transition-colors {{ $this->getUserVoteType($reply->id) === 'downvote' ? 'text-red-600' : '' }}">
                                                <i class="fas fa-thumbs-down"></i>
                                                <span class="text-[10px] ml-0.5">{{ $reply->downvotes_count }}</span>
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
            <div class="w-16 h-16 bg-primary-100 dark:bg-primary-900 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-comments text-primary-600 dark:text-primary-400 text-xl"></i>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No comments yet</h3>
            <p class="text-gray-600 dark:text-gray-400">
                Be the first to share your thoughts!
            </p>
        </div>
    @endif

    <!-- Pagination -->
    {{ $this->comments->links() }}
</div>

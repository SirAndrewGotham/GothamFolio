<?php

namespace App\View\Components\Backend\Widgets;

use App\Models\Post;
use Illuminate\View\Component;

class BlogStats extends Component
{
    public int $total;
    public int $published;
    public int $draft;
    public ?Post $latest;

    public function __construct()
    {
        $this->total = Post::count();
        $this->published = Post::where('is_published', true)->count();
        $this->draft = Post::where('is_published', false)->count();
        $this->latest = Post::latest()->first(); // Remove the select() clause
    }

    public function render()
    {
        return view('components.backend.widgets.blog-stats');
    }
}

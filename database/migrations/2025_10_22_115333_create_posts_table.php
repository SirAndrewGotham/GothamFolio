<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create the "posts" database table for blog posts, including columns for content, SEO, publication metadata, relationships, and indexes.
     *
     * The table includes: an auto-incrementing primary key; title and unique slug; nullable excerpt, long content, and featured image; nullable published_at timestamp; boolean flags for is_published and is_featured (default false); nullable read_time (minutes) with comment; SEO fields (meta_title, meta_description, meta_keywords); a foreign key user_id constrained to users with cascade on delete; soft deletes; created_at and updated_at timestamps; and indexes on (is_published, published_at), (is_featured, published_at), and slug.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('featured_image')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('is_published')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->integer('read_time')->nullable()->comment('Estimated reading time in minutes');

            // SEO fields
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            // Relationships
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->softDeletes();
            $table->timestamps();

            // Indexes for performance
            $table->index(['is_published', 'published_at']);
            $table->index(['is_featured', 'published_at']);
            $table->index('slug');
        });
    }

    /**
     * Reverse the migration by dropping the `posts` table if it exists.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
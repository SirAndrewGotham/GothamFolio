<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->json('toc')->nullable()->comment('Table of Contents generated from post content');
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('featured_image')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('is_published')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->integer('read_time')->nullable()->comment('Estimated reading time in minutes');
            $table->unsignedInteger('views_count')->default(0)->after('read_time');
            $table->boolean('allow_comments')->default(true);
            $table->boolean('allow_anonymous_comments')->default(true);

            // SEO fields
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            // Relationships
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('post_id')->constrained('posts')->cascadeOnDelete();
            $table->foreignId('language_id')->constrained()->cascadeOnDelete();

            $table->softDeletes();
            $table->timestamps();

            // Indexes for performance
            $table->unique(['post_id', 'language_id']);
            $table->index(['is_published', 'published_at']);
            $table->index(['is_featured', 'published_at']);
            $table->index('slug');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create the `comments` table with its columns, foreign keys, soft deletes, timestamps, and performance indexes.
     *
     * The table includes: `id`, `post_id` (FK to `posts` with cascade on delete), `parent_id` (nullable FK to `comments` with cascade on delete),
     * `name`, `email`, `content`, `is_approved` (boolean, default false), `user_id` (nullable FK to `users` with null on delete),
     * soft delete timestamp, and `created_at`/`updated_at`.
     *
     * Indexes created: composite indexes on (`post_id`, `is_approved`), (`parent_id`, `is_approved`), and (`user_id`, `created_at`).
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->cascadeOnDelete();
            $table->foreignId('parent_id')->nullable()->constrained('comments')->cascadeOnDelete();
            $table->string('name');
            $table->string('email');
            $table->text('content');
            $table->boolean('is_approved')->default(false);
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();

            $table->softDeletes();
            $table->timestamps();

            // Indexes for performance
            $table->index(['post_id', 'is_approved']);
            $table->index(['parent_id', 'is_approved']);
            $table->index(['user_id', 'created_at']);
        });
    }

    /**
     * Drop the `comments` table if it exists.
     *
     * This reverses the migration by removing the `comments` table and its indexes/constraints.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
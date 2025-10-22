<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create the `votes` table for storing user votes on polymorphic votable entities.
     *
     * The table includes an auto-incrementing `id`, polymorphic `votable_type`/`votable_id`
     * pair, `user_id` (foreign key with cascade on delete), `type` enum (`upvote`|`downvote`),
     * and timestamps. A unique composite index on (`votable_type`, `votable_id`, `user_id`)
     * enforces one vote per user per votable item. Additional indexes on
     * (`votable_type`, `votable_id`, `type`) and (`user_id`, `created_at`) optimize common queries.
     */
    public function up(): void
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->morphs('votable'); // post or comment
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->enum('type', ['upvote', 'downvote']);
            $table->timestamps();

            // Ensure a user can only vote once per votable item
            $table->unique(['votable_type', 'votable_id', 'user_id']);

            // Indexes for performance
            $table->index(['votable_type', 'votable_id', 'type']);
            $table->index(['user_id', 'created_at']);
        });
    }

    /**
     * Drops the 'votes' table and its associated indexes and constraints if it exists.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
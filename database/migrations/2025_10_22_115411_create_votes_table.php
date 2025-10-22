<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
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

    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create the subscriptions table used to store subscriber records.
     *
     * The table includes: an auto-incrementing primary key `id`; nullable `user_id` foreign key (null on delete);
     * unique `email`; nullable `categories` JSON (array of category IDs); `is_active` boolean (defaults to true);
     * unique `token` (unsubscribe token); nullable `email_verified_at` and `last_notified_at` timestamps; and
     * automatic `created_at`/`updated_at` timestamps. Indexes are created on (`email`, `is_active`), (`user_id`, `is_active`),
     * and (`is_active`, `last_notified_at`) to optimize common queries.
     */
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('email')->unique();
            $table->json('categories')->nullable()->comment('Array of category IDs to subscribe to');
            $table->boolean('is_active')->default(true);
            $table->string('token')->unique()->comment('Unsubscribe token');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_notified_at')->nullable();

            $table->timestamps();

            // Indexes for performance
            $table->index(['email', 'is_active']);
            $table->index(['user_id', 'is_active']);
            $table->index(['is_active', 'last_notified_at']);
        });
    }

    /**
     * Drops the `subscriptions` table if it exists.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
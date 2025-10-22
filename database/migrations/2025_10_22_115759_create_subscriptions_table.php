<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
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

    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create the `views` table for recording view events on any model.
     *
     * The table includes a primary `id`, polymorphic `viewable_type`/`viewable_id` pair,
     * nullable `locale`, nullable `ip_address`, nullable `user_agent`, a nullable
     * `user_id` foreign key referencing `users` that is set to null on delete, and
     * `created_at`/`updated_at` timestamps. Adds composite indexes on
     * (`viewable_type`, `viewable_id`, `locale`) and (`ip_address`, `viewable_type`, `viewable_id`)
     * to optimize lookup by locale and by IP per viewable item.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('views', function (Blueprint $table) {
            $table->id();
            $table->morphs('viewable'); // post, page, or any other model
            $table->string('locale')->nullable(); // for language-specific tracking
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();

            // Index for performance
            $table->index(['viewable_type', 'viewable_id', 'locale']);
            $table->index(['ip_address', 'viewable_type', 'viewable_id']);
        });
    }

    /**
     * Drop the `views` table if it exists.
     */
    public function down(): void
    {
        Schema::dropIfExists('views');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10)->unique(); // en, ru, eo, af_ZA
            $table->string('name_native'); // English, Русский, Esperanto, Afrikaans (Suid-Afrika)
            $table->string('name_english'); // English, Russian, Esperanto, Afrikaans (South Africa)
            $table->string('regional')->nullable(); // en_US, en_GB, af_ZA, ru_RU
            $table->string('script')->nullable(); // Latin, Cyrl, Arab, etc.
            $table->boolean('is_rtl')->default(false); // false for LTR, true for RTL
            $table->string('emoji')->nullable(); // 🇺🇸, 🇷🇺, etc.
            $table->text('flag_svg')->nullable(); // SVG for languages without emoji flags
            $table->boolean('is_active')->default(true);
            $table->boolean('is_default')->default(false);
            $table->boolean('is_fallback')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();

            $table->index(['is_active', 'sort_order']);
            $table->index(['is_default']);
            $table->index(['is_fallback']);
            $table->unique(['code', 'regional']); // Composite unique key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};

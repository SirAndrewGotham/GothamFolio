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
        Schema::create('resume_summaries', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // experience, education, skill
            $table->string('icon');
            $table->string('duration')->nullable();
            $table->integer('percentage')->nullable(); // for skills
            $table->string('link')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }
};

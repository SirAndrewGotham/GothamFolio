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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('file_path');
            $table->string('file_name');
            $table->integer('file_size');
            $table->string('mime_type');
            $table->integer('width');
            $table->integer('height');
            $table->string('camera_model')->nullable();
            $table->string('camera_settings')->nullable();
            $table->string('location')->nullable();
            $table->integer('year')->nullable();
            $table->boolean('is_published')->default(true);
            $table->integer('order')->default(0);
            $table->foreignId('gallery_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};

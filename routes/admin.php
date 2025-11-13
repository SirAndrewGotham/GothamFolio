<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // Homepage sections management
        Route::resource('banner', \App\Http\Controllers\Admin\BannerController::class);
        Route::resource('features', \App\Http\Controllers\Admin\FeaturesController::class);
        Route::resource('resume', \App\Http\Controllers\Admin\ResumeController::class);


        Route::get('blog', [PostController::class, 'index'])->name('blog.index');
//        Route::resource('blog', PostController::class);

        Route::resource('galleries', GalleryController::class);

        // Category management routes
        Route::resource('categories', CategoryController::class);

        // Post management routes
        Route::resource('posts', PostController::class);
        Route::get('posts/{post}/translate', [PostController::class, 'translate'])->name('posts.translate');
        Route::post('posts/{post}/translate', [PostController::class, 'storeTranslation'])->name('posts.store-translation');

        // Image management routes
        Route::prefix('galleries/{gallery}')->name('galleries.')->group(function () {
            Route::resource('images', ImageController::class)
                ->names([
                    'index' => 'images.index',
                    'create' => 'images.create',
                    'store' => 'images.store',
                    'edit' => 'images.edit',
                    'update' => 'images.update',
                    'destroy' => 'images.destroy',
                    'show' => 'images.show',
                ]);

            // Multi-image upload
            Route::get('images/upload-multiple', [ImageController::class, 'createMultiple'])->name('images.create-multiple');
            Route::post('images/upload-multiple', [ImageController::class, 'storeMultiple'])->name('images.store-multiple');
        });

        // All images across all galleries
        Route::get('images', [ImageController::class, 'allImages'])->name('images.index');

        // Portfolio management routes
        Route::prefix('portfolio')->name('portfolio.')->group(function () {
            Route::resource('categories', \App\Http\Controllers\Admin\PortfolioCategoryController::class)
                ->names([
                    'index' => 'categories.index',
                    'create' => 'categories.create',
                    'store' => 'categories.store',
                    'edit' => 'categories.edit',
                    'update' => 'categories.update',
                    'destroy' => 'categories.destroy',
                    'show' => 'categories.show',
                ]);
        });

        Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class);
        // Project images deletion route
        Route::delete('project-images/{id}', [\App\Http\Controllers\Admin\ProjectController::class, 'destroyImage'])->name('project-images.destroy');
    });

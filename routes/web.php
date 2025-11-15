<?php

use App\Models\Feedback;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

// Serve images from storage - add this before any Folio routes
Route::get('blog/{postId}/card/{size}/{filename}', function ($postId, $size, $filename) {
    $path = "blog/{$postId}/card/{$size}/{$filename}";

    if (Storage::exists($path)) {
        return response()->file(Storage::path($path));
    }

    abort(404);
})->where('filename', '.*');

// Also add a route for the new images/blogs path if you changed it
Route::get('images/blogs/{postId}/card/{size}/{filename}', function ($postId, $size, $filename) {
    $path = "images/blogs/{$postId}/card/{$size}/{$filename}";

    if (Storage::exists($path)) {
        return response()->file(Storage::path($path));
    }

    abort(404);
})->where('filename', '.*');

// Remove or comment out this line since Folio will handle the home page
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get('blog', [\App\Http\Controllers\Frontend\PostController::class, 'index'])->name('blog.index');
// Route::get('blog/{slug}', [\App\Http\Controllers\Frontend\PostController::class, 'show'])->name('blog.show');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

Route::get('/test-logging-db', function () {
    try {
        Log::info('Test Logging: Attempting to write a log entry.');

        // Test database connection by trying to create a dummy record
        $testFeedback = Feedback::create([
            'name' => 'Test Name',
            'email' => 'test@example.com',
            'subject' => 'Test Subject',
            'category' => 'other',
            'message' => 'This is a test message from a temporary route.',
        ]);
        Log::info('Test Logging: Dummy feedback record created with ID: '.$testFeedback->id);

        return 'Test completed. Check logs and database for entries.';
    } catch (Exception $e) {
        Log::error('Test Logging: Error during logging/database test: '.$e->getMessage(), ['exception' => $e]);

        return 'Test failed. Check logs for error details.';
    }
});

require __DIR__.'/auth.php';

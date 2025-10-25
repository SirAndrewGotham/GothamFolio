<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Models\Feedback;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

// Remove or comment out this line since Folio will handle the home page
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// route moved to the folio file-based routing
//Route::get('blog/{post}', [\App\Http\Controllers\Frontend\PostController::class, 'show']);

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
        Log::info('Test Logging: Dummy feedback record created with ID: ' . $testFeedback->id);

        return 'Test completed. Check logs and database for entries.';
    } catch (Exception $e) {
        Log::error('Test Logging: Error during logging/database test: ' . $e->getMessage(), ['exception' => $e]);
        return 'Test failed. Check logs for error details.';
    }
});

require __DIR__.'/auth.php';

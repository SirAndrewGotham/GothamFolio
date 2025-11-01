<?php

use App\Mail\FeedbackReceived;
use Illuminate\Support\Facades\Mail;
use Livewire\Volt\Volt;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Livewire\livewire;

uses(Illuminate\Foundation\Testing\RefreshDatabase::class);

it('feedback form renders successfully', function () {
    Volt::test('feedback-form')
        ->assertStatus(200);
});

it('shows validation errors for required fields', function () {
    $component = livewire('feedback-form')
        ->set('submissionTime', now()->subSeconds(5)->timestamp) // Bypass time-based protection
        ->set('honeypot', ''); // Bypass honeypot

    $component->set('captchaAnswer', $component->get('captchaCorrectAnswer')); // Bypass CAPTCHA

    $component->call('submit')
        ->assertHasErrors(['name', 'email', 'subject', 'category', 'message']);
});

it('shows validation error for invalid email', function () {
    $component = livewire('feedback-form')
        ->set('submissionTime', now()->subSeconds(5)->timestamp) // Bypass time-based protection
        ->set('honeypot', ''); // Bypass honeypot

    $component->set('captchaAnswer', $component->get('captchaCorrectAnswer')); // Bypass CAPTCHA

    $component->set('email', 'invalid-email')
        ->call('submit')
        ->assertHasErrors(['email']);
});

it('shows validation errors for min length', function () {
    $component = livewire('feedback-form')
        ->set('submissionTime', now()->subSeconds(5)->timestamp) // Bypass time-based protection
        ->set('honeypot', ''); // Bypass honeypot

    $component->set('captchaAnswer', $component->get('captchaCorrectAnswer')); // Bypass CAPTCHA

    $component->set('name', 'A')
        ->set('subject', 'Sub')
        ->set('message', 'Msg')
        ->call('submit')
        ->assertHasErrors(['name', 'subject', 'message']);
});

it('successfully submits feedback and stores in database', function () {
    $component = livewire('feedback-form')
        ->set('submissionTime', now()->subSeconds(5)->timestamp) // Bypass time-based protection
        ->set('honeypot', ''); // Bypass honeypot

    $component->set('captchaAnswer', $component->get('captchaCorrectAnswer')); // Bypass CAPTCHA

    $component->set('name', 'John Doe')
        ->set('email', 'john.doe@example.com')
        ->set('subject', 'Test Subject')
        ->set('category', 'question')
        ->set('message', 'This is a test message for feedback.')
        ->call('submit');

    assertDatabaseHas('feedback', [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'subject' => 'Test Subject',
        'category' => 'question',
        'message' => 'This is a test message for feedback.',
    ]);
});

it('sends feedback received email on successful submission', function () {
    Mail::fake();

    // Temporarily set a MAIL_TO_ADDRESS for testing
    config(['mail.to.address' => 'admin@example.com']);

    $component = livewire('feedback-form')
        ->set('submissionTime', now()->subSeconds(5)->timestamp) // Bypass time-based protection
        ->set('honeypot', ''); // Bypass honeypot

    $component->set('captchaAnswer', $component->get('captchaCorrectAnswer')); // Bypass CAPTCHA

    $component->set('name', 'Jane Doe')
        ->set('email', 'jane.doe@example.com')
        ->set('subject', 'Email Test Subject')
        ->set('category', 'other')
        ->set('message', 'This message should trigger an email.')
        ->call('submit');

    Mail::assertSent(FeedbackReceived::class);
});

it('resets form and sets formSubmitted to true on successful submission', function () {
    $component = livewire('feedback-form')
        ->set('submissionTime', now()->subSeconds(5)->timestamp) // Bypass time-based protection
        ->set('honeypot', ''); // Bypass honeypot

    $component->set('captchaAnswer', $component->get('captchaCorrectAnswer')); // Bypass CAPTCHA

    $component->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->set('subject', 'Form Reset Test')
        ->set('category', 'feedback')
        ->set('message', 'This message should reset the form.')
        ->call('submit')
        ->assertSet('name', '')
        ->assertSet('email', '')
        ->assertSet('subject', '')
        ->assertSet('category', '')
        ->assertSet('message', '')
        ->assertSet('formSubmitted', true);
});

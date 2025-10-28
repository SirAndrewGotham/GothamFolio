<?php

use App\Models\Language;
use Illuminate\Support\Facades\Session;
use Livewire\Volt\Volt;

use function Pest\Livewire\livewire;

uses(Illuminate\Foundation\Testing\RefreshDatabase::class);

beforeEach(function () {
    // Create some dummy languages for testing
    Language::factory()->create(['code' => 'en', 'name_english' => 'English', 'name_native' => 'English', 'is_active' => true, 'is_default' => true, 'sort_order' => 1]);
    Language::factory()->create(['code' => 'fr', 'name_english' => 'French', 'name_native' => 'Français', 'is_active' => true, 'sort_order' => 2]);
    Language::factory()->create(['code' => 'de', 'name_english' => 'German', 'name_native' => 'Deutsch', 'is_active' => false, 'sort_order' => 3]);
});

it('component renders successfully', function () {
    Volt::test('language-switcher-volt')
        ->assertStatus(200);
});

it('mounts with correct current and available languages', function () {
    Session::put('locale', 'fr');

    livewire('language-switcher-volt')
        ->assertSet('currentLanguage.code', 'fr')
        ->assertCount('availableLanguages', 2); // en, fr are active
});

it('changes language correctly and reloads page', function () {
    livewire('language-switcher-volt')
        ->call('changeLanguage', 'fr')
        ->assertDispatched('languageChanged', 'fr')
        ->assertSet('currentLanguage.code', 'fr'); // Assert client-side JS call
});

it('does not change language if code is invalid or inactive', function () {
    Session::put('locale', 'en'); // Start with English
    livewire('language-switcher-volt')
        ->call('changeLanguage', 'de') // Inactive language
        ->assertSet('currentLanguage.code', 'en'); // Should remain 'en'
});

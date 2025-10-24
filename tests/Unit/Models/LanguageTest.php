<?php

use App\Models\Language;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('has fillable attributes', function () {
    $language = new Language();
    $fillable = [
        'code',
        'name_native',
        'name_english',
        'regional',
        'script',
        'is_rtl',
        'emoji',
        'flag_svg',
        'is_active',
        'is_default',
        'is_fallback',
        'sort_order',
    ];

    expect($language->getFillable())->toEqual($fillable);
});

it('casts attributes correctly', function () {
    $language = Language::factory()->make([
        'is_rtl' => 1,
        'is_active' => 0,
        'is_default' => 1,
        'is_fallback' => 0,
        'sort_order' => '5',
    ]);

    expect($language->is_rtl)->toBeBool()->toBeTrue();
    expect($language->is_active)->toBeBool()->toBeFalse();
    expect($language->is_default)->toBeBool()->toBeTrue();
    expect($language->is_fallback)->toBeBool()->toBeFalse();
    expect($language->sort_order)->toBeInt()->toBe(5);
});

it('returns correct route key name', function () {
    $language = new Language();
    expect($language->getRouteKeyName())->toBe('code');
});

it('filters active languages using scope', function () {
    Language::factory()->create(['is_active' => true]);
    Language::factory()->create(['is_active' => false]);

    expect(Language::active()->count())->toBe(1);
});

it('orders languages correctly using scope', function () {
    Language::factory()->create(['name_english' => 'Zulu', 'sort_order' => 2]);
    Language::factory()->create(['name_english' => 'Afrikaans', 'sort_order' => 1]);
    Language::factory()->create(['name_english' => 'Xhosa', 'sort_order' => 1]);

    $languages = Language::ordered()->get();

    expect($languages->first()->name_english)->toBe('Afrikaans');
    expect($languages->last()->name_english)->toBe('Zulu');
});

it('filters default language using scope', function () {
    Language::factory()->create(['is_default' => true]);
    Language::factory()->create(['is_default' => false]);

    expect(Language::default()->count())->toBe(1);
});

it('filters fallback language using scope', function () {
    Language::factory()->create(['is_fallback' => true]);
    Language::factory()->create(['is_fallback' => false]);

    expect(Language::fallback()->count())->toBe(1);
});

it('filters rtl languages using scope', function () {
    Language::factory()->create(['is_rtl' => true]);
    Language::factory()->create(['is_rtl' => false]);

    expect(Language::rtl()->count())->toBe(1);
});

it('filters ltr languages using scope', function () {
    Language::factory()->create(['is_rtl' => false]);
    Language::factory()->create(['is_rtl' => true]);

    expect(Language::ltr()->count())->toBe(1);
});

it('returns display flag correctly', function () {
    $languageWithEmoji = Language::factory()->make(['emoji' => '🇿🇦', 'flag_svg' => null]);
    expect($languageWithEmoji->display_flag)->toBe('🇿🇦');

    $languageWithSvg = Language::factory()->make(['emoji' => null, 'flag_svg' => 'za.svg']);
    expect($languageWithSvg->display_flag)->toBe('za.svg');

    $languageWithoutBoth = Language::factory()->make(['emoji' => null, 'flag_svg' => null]);
    expect($languageWithoutBoth->display_flag)->toBeNull();
});

it('returns display name correctly', function () {
    $language = Language::factory()->make([
        'name_native' => 'IsiXhosa',
        'name_english' => 'Xhosa',
    ]);

    expect($language->display_name)->toBe('IsiXhosa (Xhosa)');
});

it('returns full locale correctly', function () {
    $languageWithRegional = Language::factory()->make(['regional' => 'en_US', 'code' => 'en']);
    expect($languageWithRegional->full_locale)->toBe('en');

    $languageWithoutRegional = Language::factory()->make(['regional' => null, 'code' => 'fr']);
    expect($languageWithoutRegional->full_locale)->toBe('fr');
});

it('returns direction correctly', function () {
    $rtlLanguage = Language::factory()->make(['is_rtl' => true]);
    expect($rtlLanguage->direction)->toBe('rtl');

    $ltrLanguage = Language::factory()->make(['is_rtl' => false]);
    expect($ltrLanguage->direction)->toBe('ltr');
});

it('ensures only one language is default', function () {
    Language::factory()->create(['code' => 'en', 'is_default' => true]);
    $newDefault = Language::factory()->create(['code' => 'fr', 'is_default' => true]);

    expect(Language::where('code', 'en')->first()->is_default)->toBeFalse();
    expect(Language::where('code', 'fr')->first()->is_default)->toBeTrue();
});

it('ensures only one language is fallback', function () {
    Language::factory()->create(['code' => 'en', 'is_fallback' => true]);
    $newFallback = Language::factory()->create(['code' => 'fr', 'is_fallback' => true]);

    expect(Language::where('code', 'en')->first()->is_fallback)->toBeFalse();
    expect(Language::where('code', 'fr')->first()->is_fallback)->toBeTrue();
});

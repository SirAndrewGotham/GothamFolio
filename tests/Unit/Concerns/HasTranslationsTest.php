<?php

namespace Tests\Unit\Concerns;

use App\Models\Language;
use Tests\Support\TestModelWithTranslations;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\assertDatabaseHas;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

it('can save and retrieve a Translation model', function () {
    $translation = \App\Models\Translation::create([
        'locale' => 'en',
        'key' => 'test_key',
        'value' => 'Test Value',
        'translatable_id' => 1, // Dummy ID
        'translatable_type' => 'App\\Models\\User', // Dummy type
    ]);

    $retrieved = \App\Models\Translation::find($translation->id);

    expect($retrieved->value)->toBe('Test Value');
});

beforeEach(function () {
    Schema::create('test_model_with_translations', function (Blueprint $table) {
        $table->id();
        $table->json('name'); // Translatable attribute
        $table->timestamps();
    });

    // Note: The 'languages' table and 'translations' table are expected to exist from migrations.
    // Seed some languages (these are cleared by RefreshDatabase, so we re-create them)
    \App\Models\Language::create(['code' => 'en', 'name_english' => 'English', 'name_native' => 'English', 'is_default' => true]);
    \App\Models\Language::create(['code' => 'fr', 'name_english' => 'French', 'name_native' => 'Français']);
});

afterEach(function () {
    Schema::dropIfExists('test_model_with_translations');
});

it('can get and set translations', function () {
    $model = new TestModelWithTranslations(['name' => []]);
    $model->save(); // Save the model first to get an ID
    expect($model->id)->not->toBeNull(); // Ensure the model has an ID
    $model->setTranslation('name', 'My Name', 'en');
    $model->setTranslation('name', 'Mon Nom', 'fr');
    $model->save();

    $retrievedModel = TestModelWithTranslations::find($model->id);
    $retrievedModel->load('translations'); // Eager load translations

    expect($retrievedModel->getTranslation('name', 'en'))->toBe('My Name');
    expect($retrievedModel->getTranslation('name', 'fr'))->toBe('Mon Nom');
});

it('returns current locale translation when accessing attribute directly', function () {
    $model = new TestModelWithTranslations(['name' => []]);
    $model->save();
    $model->setTranslation('name', 'English Name', 'en');
    $model->setTranslation('name', 'Nom Français', 'fr');

    app()->setLocale('fr');
    expect($model->getTranslation('name', 'fr'))->toBe('Nom Français');

    app()->setLocale('en');
    expect($model->getTranslation('name', 'en'))->toBe('English Name');
});

it('can get all translations for an attribute', function () {
    $model = new TestModelWithTranslations(['name' => []]);
    $model->save();
    $model->setTranslation('name', 'English Name', 'en');
    $model->setTranslation('name', 'Nom Français', 'fr');

    $model->load('translations'); // Eager load translations

    $translations = $model->getTranslations('name');

    expect($translations)->toBeArray();
    expect($translations)->toHaveKey('en', 'English Name');
    expect($translations)->toHaveKey('fr', 'Nom Français');
});

it('can fill translatable attributes', function () {
    $model = new TestModelWithTranslations(['name' => []]);
    $model->save();
    $model->fill([
        'name' => [
            'en' => 'Filled English Name',
            'fr' => 'Nom Français Rempli',
        ],
    ]);
    $model->setTranslation('name', 'Filled English Name', 'en');
    $model->setTranslation('name', 'Nom Français Rempli', 'fr');
    $model->save();

    $retrievedModel = TestModelWithTranslations::find($model->id);
    $retrievedModel->load('translations'); // Eager load translations

    expect($retrievedModel->getTranslation('name', 'en'))->toBe('Filled English Name');
    expect($retrievedModel->getTranslation('name', 'fr'))->toBe('Nom Français Rempli');
});

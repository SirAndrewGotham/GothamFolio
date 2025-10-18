<?php

namespace Tests\Unit\Concerns;

use App\Concerns\HasSlug;
use Tests\Support\TestModelWithSlug;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;

beforeEach(function () {
    // Setup a test database table for the dummy model
    Schema::create('test_model_with_slugs', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique()->nullable();
        $table->timestamps();
        $table->softDeletes();
    });
});

// Clean up the table after each test
afterEach(function () {
    Schema::dropIfExists('test_model_with_slugs');
});

it('returns default sluggable field as title', function () {
    $model = new TestModelWithSlug();
    expect($model->getSluggableField())->toBe('title');
});

it('generates slug on creating if empty', function () {
    $model = TestModelWithSlug::create(['title' => 'My Awesome Title']);
    expect($model->slug)->toBe('my-awesome-title');
    assertDatabaseHas('test_model_with_slugs', ['slug' => 'my-awesome-title']);
});

it('does not overwrite slug on creating if provided', function () {
    $model = TestModelWithSlug::create(['title' => 'My Awesome Title', 'slug' => 'custom-slug']);
    expect($model->slug)->toBe('custom-slug');
    assertDatabaseHas('test_model_with_slugs', ['slug' => 'custom-slug']);
});

it('regenerates slug on updating if sluggable field changes', function () {
    $model = TestModelWithSlug::create(['title' => 'Old Title', 'slug' => 'custom-old-slug']);
    expect($model->slug)->toBe('custom-old-slug');

    $model->title = 'New Title';
    $model->save();

    expect($model->slug)->toBe('new-title');
    assertDatabaseHas('test_model_with_slugs', ['slug' => 'new-title']);
    assertDatabaseMissing('test_model_with_slugs', ['slug' => 'custom-old-slug']);
});

it('does not regenerate slug on updating if sluggable field does not change', function () {
    $model = TestModelWithSlug::create(['title' => 'Title', 'slug' => 'title-slug']);
    expect($model->slug)->toBe('title-slug');

    $model->update(['title' => 'Title']); // No actual change

    expect($model->slug)->toBe('title-slug');
});

it('generates unique slug with suffix for duplicates', function () {
    TestModelWithSlug::create(['title' => 'Duplicate Title']);
    $model2 = TestModelWithSlug::create(['title' => 'Duplicate Title']);

    expect($model2->slug)->toBe('duplicate-title-1');

    $model3 = TestModelWithSlug::create(['title' => 'Duplicate Title']);
    expect($model3->slug)->toBe('duplicate-title-2');
});

it('generates unique slug when updating and another model has same slug', function () {
    TestModelWithSlug::create(['title' => 'Existing Title', 'slug' => 'existing-title']);
    $modelToUpdate = TestModelWithSlug::create(['title' => 'Another Title', 'slug' => 'another-title']);

    $modelToUpdate->title = 'Existing Title';
    $modelToUpdate->slug = null; // Clear slug to force regeneration
    $modelToUpdate->save();

    expect($modelToUpdate->slug)->toBe('existing-title-1');
});

it('returns slug as route key name', function () {
    $model = new TestModelWithSlug();
    expect($model->getRouteKeyName())->toBe('slug');
});

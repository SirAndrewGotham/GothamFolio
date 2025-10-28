<?php

use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;

it('uses soft deletes trait', function () {
    $uses = class_uses(Category::class);

    expect($uses)->toHaveKey(SoftDeletes::class);
});

it('has fillable attributes', function () {
    $category = new Category;
    $fillable = [
        'name',
        'slug',
        'description',
        'cover',
        'is_featured',
        'is_active',
    ];

    expect($category->getFillable())->toEqual($fillable);
});

it('generates slug from name', function () {
    $category = Category::factory()->create(['name' => 'My Test Category']);
    expect($category->slug)->toBe('my-test-category');

    $category = Category::factory()->create(['name' => 'Another Test Category 123']);
    expect($category->slug)->toBe('another-test-category-123');
});

it('updates slug when name changes', function () {
    $category = Category::factory()->create(['name' => 'Initial Name']);
    expect($category->slug)->toBe('initial-name');

    $category->name = 'Updated Name';
    $category->save();
    expect($category->slug)->toBe('updated-name');
});

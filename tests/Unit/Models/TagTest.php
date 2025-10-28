<?php

use App\Models\Tag;

it('has fillable attributes', function () {
    $tag = new Tag;
    $fillable = [
        'name',
        'slug',
    ];

    expect($tag->getFillable())->toEqual($fillable);
});

it('generates slug from name', function () {
    $tag = Tag::factory()->create(['name' => 'My Test Tag']);
    expect($tag->slug)->toBe('my-test-tag');

    $tag = Tag::factory()->create(['name' => 'Another Test Tag 123']);
    expect($tag->slug)->toBe('another-test-tag-123');
});

it('updates slug when name changes', function () {
    $tag = Tag::factory()->create(['name' => 'Initial Tag Name']);
    expect($tag->slug)->toBe('initial-tag-name');

    $tag->name = 'Updated Tag Name';
    $tag->save();
    expect($tag->slug)->toBe('updated-tag-name');
});

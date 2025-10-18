<?php

namespace Tests\Unit\Concerns;

use App\Models\Tag;
use Tests\Support\TestModelWithTags;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

it('can add tags', function () {
    $model = TestModelWithTags::create(['name' => 'Test Model']);
    Log::debug('Created TestModel ID: ' . $model->id); // Log TestModel ID
    $tag1 = Tag::create(['name' => 'Tag 1', 'slug' => 'tag-1']);
    Log::debug('Created Tag ID: ' . $tag1->id); // Log Tag ID
    $tag2 = Tag::create(['name' => 'Tag 2', 'slug' => 'tag-2']);

    Log::debug('Pivot Table before addTag: ', [DB::table('taggables')->get()->toArray()]);
    $model->addTag($tag1);
    $model->addTag($tag2);
    $model->load('tags'); // Explicitly load the relationship

    expect($model->tags)->toHaveCount(2);
    assertDatabaseHas('taggables', [
        'tag_id' => $tag1->id,
        'taggable_id' => $model->id,
        'taggable_type' => $model->getMorphClass(),
    ]);
});

it('can remove tags', function () {
    $model = TestModelWithTags::create(['name' => 'Test Model']);
    $tag1 = Tag::create(['name' => 'Tag 1', 'slug' => 'tag-1']);
    $tag2 = Tag::create(['name' => 'Tag 2', 'slug' => 'tag-2']);

    $model->addTag($tag1);
    $model->addTag($tag2);

    $model->removeTag($tag1);

    expect($model->tags)->toHaveCount(1);
    assertDatabaseMissing('taggables', [
        'tag_id' => $tag1->id,
        'taggable_id' => $model->id,
    ]);
    assertDatabaseHas('taggables', [
        'tag_id' => $tag2->id,
        'taggable_id' => $model->id,
        'taggable_type' => $model->getMorphClass(),
    ]);
});

it('can check if it has a tag', function () {
    $model = TestModelWithTags::create(['name' => 'Test Model']);
    $tag = Tag::create(['name' => 'Tag 1', 'slug' => 'tag-1']);

    $model->addTag($tag);

    expect($model->hasTag($tag))->toBeTrue();
});

it('can sync tags', function () {
    $model = TestModelWithTags::create(['name' => 'Test Model']);
    $tag1 = Tag::create(['name' => 'Tag 1', 'slug' => 'tag-1']);
    $tag2 = Tag::create(['name' => 'Tag 2', 'slug' => 'tag-2']);
    $tag3 = Tag::create(['name' => 'Tag 3', 'slug' => 'tag-3']);

    $model->addTag($tag1);

    $model->syncTags([$tag2->id, $tag3->id]);

    expect($model->tags)->toHaveCount(2);
    expect($model->tags->pluck('id'))->toContain($tag2->id, $tag3->id);
    assertDatabaseMissing('taggables', [
        'tag_id' => $tag1->id,
        'taggable_id' => $model->id,
    ]);
    assertDatabaseHas('taggables', [
        'tag_id' => $tag2->id,
        'taggable_id' => $model->id,
        'taggable_type' => $model->getMorphClass(),
    ]);
    assertDatabaseHas('taggables', [
        'tag_id' => $tag3->id,
        'taggable_id' => $model->id,
        'taggable_type' => $model->getMorphClass(),
    ]);
});

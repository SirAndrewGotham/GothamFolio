<?php

namespace Tests\Unit\Concerns;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Tests\Support\TestModelWithCategories;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

it('can add categories', function () {
    $model = TestModelWithCategories::create(['name' => 'Test Model']);
    $category1 = Category::create(['name' => 'Category 1', 'slug' => 'category-1']);
    $category2 = Category::create(['name' => 'Category 2', 'slug' => 'category-2']);

    Log::debug('Pivot Table before addCategory: ', [DB::table('categorizables')->get()->toArray()]);
    $model->addCategory($category1);
    $model->addCategory($category2);
    $model->load('categories'); // Explicitly load the relationship

    expect($model->categories)->toHaveCount(2);
    assertDatabaseHas('categorizables', [
        'category_id' => $category1->id,
        'categorizable_id' => $model->id,
        'categorizable_type' => $model->getMorphClass(),
    ]);
});

it('can remove categories', function () {
    $model = TestModelWithCategories::create(['name' => 'Test Model']);
    $category1 = Category::create(['name' => 'Category 1', 'slug' => 'category-1']);
    $category2 = Category::create(['name' => 'Category 2', 'slug' => 'category-2']);

    $model->addCategory($category1);
    $model->addCategory($category2);

    $model->removeCategory($category1);

    expect($model->categories)->toHaveCount(1);
    assertDatabaseMissing('categorizables', [
        'category_id' => $category1->id,
        'categorizable_id' => $model->id,
    ]);
    assertDatabaseHas('categorizables', [
        'category_id' => $category2->id,
        'categorizable_id' => $model->id,
        'categorizable_type' => $model->getMorphClass(),
    ]);
});

it('can check if it has a category', function () {
    $model = TestModelWithCategories::create(['name' => 'Test Model']);
    $category = Category::create(['name' => 'Category 1', 'slug' => 'category-1']);

    $model->addCategory($category);

    expect($model->hasCategory($category))->toBeTrue();
});

it('can sync categories', function () {
    $model = TestModelWithCategories::create(['name' => 'Test Model']);
    $category1 = Category::create(['name' => 'Category 1', 'slug' => 'category-1']);
    $category2 = Category::create(['name' => 'Category 2', 'slug' => 'category-2']);
    $category3 = Category::create(['name' => 'Category 3', 'slug' => 'category-3']);

    $model->addCategory($category1);

    $model->syncCategories([$category2->id, $category3->id]);

    expect($model->categories)->toHaveCount(2);
    expect($model->categories->pluck('id'))->toContain($category2->id, $category3->id);
    assertDatabaseMissing('categorizables', [
        'category_id' => $category1->id,
        'categorizable_id' => $model->id,
    ]);
    assertDatabaseHas('categorizables', [
        'category_id' => $category2->id,
        'categorizable_id' => $model->id,
        'categorizable_type' => $model->getMorphClass(),
    ]);
    assertDatabaseHas('categorizables', [
        'category_id' => $category3->id,
        'categorizable_id' => $model->id,
        'categorizable_type' => $model->getMorphClass(),
    ]);
});

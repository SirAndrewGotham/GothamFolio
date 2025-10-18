<?php

use App\Models\Translation;
use Illuminate\Database\Eloquent\Relations\MorphTo;

it('has fillable attributes', function () {
    $translation = new Translation();
    $fillable = [
        'locale',
        'key',
        'value',
        'translatable_id',
        'translatable_type',
    ];

    expect($translation->getFillable())->toEqual($fillable);
});

it('has a translatable relationship', function () {
    $translation = new Translation();
    expect($translation->translatable())->toBeInstanceOf(MorphTo::class);
});

<?php

use App\Models\Feedback;
use Illuminate\Database\Eloquent\SoftDeletes;

it('uses soft deletes trait', function () {
    $uses = class_uses(Feedback::class);

    expect($uses)->toHaveKey(SoftDeletes::class);
});

it('has fillable attributes', function () {
    $feedback = new Feedback();
    $fillable = [
        'name',
        'email',
        'subject',
        'category',
        'message',
    ];

    expect($feedback->getFillable())->toEqual($fillable);
});

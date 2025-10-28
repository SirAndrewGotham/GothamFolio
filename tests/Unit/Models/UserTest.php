<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;

uses(RefreshDatabase::class);

it('uses notifiable and two factor authenticatable traits', function () {
    $uses = class_uses(User::class);

    expect($uses)->toHaveKey(Notifiable::class);
    expect($uses)->toHaveKey(TwoFactorAuthenticatable::class);
});

it('has fillable attributes', function () {
    $user = new User;
    $fillable = [
        'name',
        'email',
        'password',
    ];

    expect($user->getFillable())->toEqual($fillable);
});

it('has hidden attributes', function () {
    $user = new User;
    $hidden = [
        'password',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'remember_token',
    ];

    expect($user->getHidden())->toEqual($hidden);
});

it('casts attributes correctly', function () {
    $user = User::factory()->make([
        'email_verified_at' => now(),
        'password' => 'password',
    ]);

    expect($user->email_verified_at)->toBeInstanceOf(DateTimeInterface::class);
    expect($user->password)->not->toBe('password'); // Password should be hashed
});

it('generates correct initials for full name', function () {
    $user = User::factory()->make(['name' => 'John Doe']);
    expect($user->initials())->toBe('JD');
});

it('generates correct initials for single name', function () {
    $user = User::factory()->make(['name' => 'John']);
    expect($user->initials())->toBe('J');
});

it('generates correct initials for multiple names', function () {
    $user = User::factory()->make(['name' => 'John Michael Doe']);
    expect($user->initials())->toBe('JM');
});

it('generates correct initials for name with leading/trailing spaces', function () {
    $user = User::factory()->make(['name' => '  John  Doe  ']);
    expect($user->initials())->toBe('JD');
});

it('generates empty initials for empty name', function () {
    $user = User::factory()->make(['name' => '']);
    expect($user->initials())->toBe('');
});

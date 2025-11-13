<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class)
    ->beforeEach(function () {
        $this->seed(\Database\Seeders\RoleSeeder::class);
    })
    ->group('admin');

it('admin dashboard can be rendered', function () {
    $user = User::factory()->admin()->create();
    $this->actingAs($user);

    $response = $this->get(route('admin.dashboard'));

    $response->assertStatus(200);
    $response->assertSee('Welcome to the Admin Dashboard!');
});

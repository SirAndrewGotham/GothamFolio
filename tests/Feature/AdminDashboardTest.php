<?php

it('admin dashboard can be rendered', function () {
    $response = $this->get(route('admin.dashboard'));

    $response->assertStatus(200);
    $response->assertSee('Welcome to the Admin Dashboard!');
});

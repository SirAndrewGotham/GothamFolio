<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        session()->start();

        // Manually register FluxServiceProvider for tests
        $this->app->register(\Flux\FluxServiceProvider::class);
    }
}

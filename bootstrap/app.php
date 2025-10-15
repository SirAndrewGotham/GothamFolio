<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Laravel\Folio\Folio;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        using: function () {
            Folio::path(resource_path('views/pages'))->middleware([
                '*' => [
                    //
                ],
            ]);
        },
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up'
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

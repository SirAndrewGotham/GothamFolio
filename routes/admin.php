<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });

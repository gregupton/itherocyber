<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    // Show application dashboard.
    Route::get('/dashboard', \App\Http\Controllers\ShowDashboardController::class)
        ->name('dashboard');

});

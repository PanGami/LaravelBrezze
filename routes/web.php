<?php

use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function()
{

    Route::view('/', 'dashboard')->name('dashboard');

    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/timeline', TimelineController::class)->name('timeline');

});

require __DIR__.'/auth.php';

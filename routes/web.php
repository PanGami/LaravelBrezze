<?php

use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function()
{
    Route::view('/', 'dashboard')->name('dashboard');

    Route::get('/timeline', TimelineController::class)->name('timeline');
    Route::post('status', [StatusController::class, 'store'])->name('statuses.store');
});

Route::get('profile/{user}', ProfileInformationController::class)->name('profile');
require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')->middleware(['auth'])->name('dashboard');

Route::get('/timeline', TimelineController::class)->name('timeline');

require __DIR__.'/auth.php';

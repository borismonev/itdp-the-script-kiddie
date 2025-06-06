<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Public route
Route::get('/public', function () {
    return view('public');
})->name('public');

// Protected routes - require authentication
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Additional protected routes
    Route::get('/secret', function () {
        return view('secret');
    })->name('secret');

    Route::get('/members-only', function () {
        return view('members-only');
    })->name('members-only');
});

require __DIR__.'/auth.php';

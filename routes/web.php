<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;

// --- HALAMAN UTAMA ---
Route::get('/', function () {
    return view('welcome'); // Pastikan file welcome/index ada di resources/views
});

// --- RUTE DETAIL LOKER ---
Route::prefix('loker')->group(function () {
    Route::get('/helper', function () {
        return view('loker.helper');
    });

    Route::get('/motoris', function () {
        return view('loker.motoris');
    });
});

// --- RUTE LOGIN GOOGLE (SOCIALITE) ---
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// --- RUTE DASHBOARD & PROFILE (AUTH) ---
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- RUTE AUTH BAWAAN LARAVEL ---
// require __DIR__.'/auth.php';
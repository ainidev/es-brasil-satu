<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes - Brasil Es Krim & Es Puter
|--------------------------------------------------------------------------
*/

// --- 1. HALAMAN UTAMA / LANDING PAGE ---
Route::get('/', function () {
    return view('welcome'); // Halaman utama website
})->name('home');


// --- 2. INFORMASI LOWONGAN KERJA (LOKER) ---
Route::get('/loker', function () {
    return view('loker');
})->name('loker');

Route::prefix('loker')->group(function () {
    Route::get('/helper', function () {
        return view('loker.helper');
    })->name('loker.helper');

    Route::get('/motoris', function () {
        return view('loker.motoris');
    })->name('loker.motoris');
});


// --- 3. AUTHENTICATION GOOGLE (SOCIALITE) ---
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


// --- 4. AKSES LOGIN & DASHBOARD ADMIN ---
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

// Kelola Tentang Kami
Route::get('/admin/about', [AboutController::class, 'edit'])->name('admin.about.edit');
Route::put('/admin/about', [AboutController::class, 'update'])->name('admin.about.update');


// --- 5. HALAMAN TERPROTEKSI (HARUS LOGIN DULU) ---
Route::middleware(['auth'])->group(function () {
    // Dashboard User / Admin
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    // Dashboard Pengelolaan Admin
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // CRUD Pengelolaan Produk (Varian Rasa)
    Route::resource('admin/products', ProductController::class, [
        'names' => 'admin.products'
    ]);

    // Pengelolaan Profil User/Admin
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// require __DIR__.'/auth.php';
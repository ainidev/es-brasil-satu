<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\StoreController; 
use App\Http\Controllers\Admin\AvailableStoreController; 
use App\Http\Controllers\Admin\PromoController;

// --- IMPORT MODEL YANG DIBUTUHKAN UNTUK LANDING PAGE ---
use App\Models\About;
use App\Models\Partner;
use App\Models\Store;
use App\Models\Product;
use App\Models\Promo;

/*
|--------------------------------------------------------------------------
| Web Routes - Brasil Es Krim & Es Puter
|--------------------------------------------------------------------------
*/

// --- 1. HALAMAN UTAMA / LANDING PAGE (UPDATE DATA DINAMIS) ---
Route::get('/', function () {
    $about    = About::first();
    $partners = Partner::all();
    $store    = Store::first();   // Untuk fallback jika cuma 1 toko
    $stores   = Store::all();     // Untuk loop banyak toko
    $products = Product::all();
    $promo    = Promo::where('is_active', true)->latest()->first(); // Ambil promo aktif terbaru

    return view('welcome', compact('about', 'partners', 'store', 'stores', 'products', 'promo'));
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


// --- 4. AKSES LOGIN & LOGOUT ADMIN ---
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');


// --- 5. HALAMAN ADMIN & TERPROTEKSI (HARUS LOGIN) ---
Route::middleware(['auth'])->group(function () {

    // Dashboard User Biasa (jika ada)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    // Pengelolaan Profil User/Admin
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // --- GRUP ROUTE KHUSUS ADMIN ---
    Route::prefix('admin')->name('admin.')->group(function () {
        
        // Dashboard Admin
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

        // Kelola Tentang Kami
        Route::get('/about', [AboutController::class, 'edit'])->name('about.edit');
        Route::put('/about', [AboutController::class, 'update'])->name('about.update');

        // Kelola Toko / Cabang (CRUD Penuh)
        Route::resource('store', StoreController::class)->except(['create', 'show', 'edit']);
        
        // Kelola Produk / Varian
        Route::resource('products', ProductController::class);

        // Kelola Mitra Kami
        Route::resource('partners', PartnerController::class)->except(['create', 'show', 'edit']);

        // Kelola Tersedia di Toko
        Route::resource('available-stores', AvailableStoreController::class);

        // Kelola Pop-up Promo (Ditambahkan dengan benar tanpa double prefix)
        Route::resource('promos', PromoController::class)->only(['index', 'store', 'destroy']);
    });

});
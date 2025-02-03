<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


// 
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show'); // Menggunakan slug

Route::get('/', [ArticleController::class, 'home'])->name('home');

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/tentang', function () {
    return view('about');
});
Route::get('/kontak', function () {
    return view('kontak');
});
// 
Route::get('/toko', [ProductController::class, 'index'])->name('toko.tam');
Route::get('/produk/{slug}', [ProductController::class, 'show']);
// Menampilkan form untuk menambahkan produk
Route::get('/toko/create', [ProductController::class, 'create'])->name('products.create');
// Menyimpan produk yang baru ditambahkan
Route::post('/produk', [ProductController::class, 'store'])->name('products.store');


// routes/web.php
Route::get('/comingsoon', [LandingPageController::class, 'index'])->name('landing');
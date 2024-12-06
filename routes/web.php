<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman selamat datang

Route::get('/', function () {
    return view('/auth/login'); // Pastikan view 'welcome' ada di resources/views
})->name('welcome');

Route::get('/welcome', function () {
    return view('/welcome'); // Pastikan view 'welcome' ada di resources/views
})->name('welcome');

// Rute untuk mengarahkan pengguna ke halaman sesuai status login
Route::get('/dashboard', function () {
    return auth()->check() ? redirect()->route('dashboard') : redirect()->route('login');
})->name('home');

// Rute untuk login dan register
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

// Rute untuk halaman dashboard dan fitur yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); // Halaman dashboard
    
    // Rute untuk logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Rute untuk buku
    Route::prefix('books')->name('books.')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('index');
        Route::get('/create', [BookController::class, 'create'])->name('create');
        Route::post('/store', [BookController::class, 'store'])->name('store');
        Route::get('/{id}', [BookController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [BookController::class, 'edit'])->name('edit');
        // Rute update untuk buku menggunakan metode PUT
        Route::put('/{id}/update', [BookController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [BookController::class, 'destroy'])->name('destroy');
    });

    // Rute untuk artikel
    Route::prefix('articles')->name('articles.')->group(function () {
        Route::get('/', [ArticleController::class, 'index'])->name('index');
        Route::get('/create', [ArticleController::class, 'create'])->name('create');
        Route::post('/store', [ArticleController::class, 'store'])->name('store');
        Route::get('/{id}', [ArticleController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [ArticleController::class, 'edit'])->name('edit');
        // Rute update untuk artikel menggunakan metode PUT
        Route::put('/{id}/update', [ArticleController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [ArticleController::class, 'destroy'])->name('destroy');
    });
});

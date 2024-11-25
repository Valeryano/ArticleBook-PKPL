<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MakalahController;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\ProsidingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}/update', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{id}/update', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articles/{id}/destroy', [ArticleController::class, 'destroy'])->name('articles.destroy');

Route::get('/posters', [PosterController::class, 'index'])->name('posters.index');
Route::get('/posters/create', [PosterController::class, 'create'])->name('posters.create');
Route::post('/posters/store', [PosterController::class, 'store'])->name('posters.store');
Route::get('/posters/{id}', [PosterController::class, 'show'])->name('posters.show');
Route::get('/posters/{id}/edit', [PosterController::class, 'edit'])->name('posters.edit');
Route::put('/posters/{id}/update', [PosterController::class, 'update'])->name('posters.update');
Route::delete('/posters/{id}/destroy', [PosterController::class, 'destroy'])->name('posters.destroy');

Route::get('makalahs', [MakalahController::class, 'index'])->name('makalahs.index');
Route::get('/makalahs/create', [MakalahController::class, 'create'])->name('makalahs.create');
Route::post('/makalahs/store', [MakalahController::class, 'store'])->name('makalahs.store');
Route::get('/makalahs/{id}', [MakalahController::class, 'show'])->name('makalahs.show');
Route::get('/makalahs/{id}/edit', [MakalahController::class, 'edit'])->name('makalahs.edit');
Route::put('/makalahs/{id}/update', [MakalahController::class, 'update'])->name('makalahs.update');
Route::delete('/makalahs/{id}/destroy', [MakalahController::class, 'destroy'])->name('makalahs.destroy');

Route::get('prosidings', [ProsidingController::class, 'index'])->name('prosidings.index');
Route::get('/prosidings/create', [ProsidingController::class, 'create'])->name('prosidings.create');
Route::post('/prosidings/store', [ProsidingController::class, 'store'])->name('prosidings.store');
Route::get('/prosidings/{id}', [ProsidingController::class, 'show'])->name('prosidings.show');
Route::get('/prosidings/{id}/edit', [ProsidingController::class, 'edit'])->name('prosidings.edit');
Route::put('/prosidings/{id}/update', [ProsidingController::class, 'update'])->name('prosidings.update');
Route::delete('/prosidings/{id}/destroy', [ProsidingController::class, 'destroy'])->name('prosidings.destroy');


Route::get('laporans', [LaporanController::class, 'index'])->name('laporans.index');
Route::get('/laporans/create', [LaporanController::class, 'create'])->name('laporans.create');
Route::post('/laporans/store', [LaporanController::class, 'store'])->name('laporans.store');
Route::get('/laporans/{id}', [LaporanController::class, 'show'])->name('laporans.show');
Route::get('/laporans/{id}/edit', [LaporanController::class, 'edit'])->name('laporans.edit');
Route::put('/laporans/{id}/update', [LaporanController::class, 'update'])->name('laporans.update');
Route::delete('/laporans/{id}/destroy', [LaporanController::class, 'destroy'])->name('laporans.destroy');

<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('books', [BookController::class, 'index'])
->middleware(['auth', 'verified'])->name('index-book');
Route::get('books/create', [BookController::class, 'create'])
->middleware(['auth', 'verified'])->name('create-book');
Route::post('books', [BookController::class, 'store'])
->middleware(['auth', 'verified'])->name('store-book');
Route::get('books/{id}/edit', [BookController::class, 'edit'])
->middleware(['auth', 'verified'])->name('edit-book');
Route::put('books/{id}', [BookController::class, 'update'])
->middleware(['auth', 'verified'])->name('update-book');
Route::delete('books/{id}', [BookController::class, 'destroy'])
->middleware(['auth', 'verified'])->name('destroy-book');


require __DIR__.'/auth.php';

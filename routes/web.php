<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.layout2');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contract', [ContractController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/greeting', [GreetingController::class, 'sayHello']);
// Route::get('/show-form', [BookController::class, 'index']);
Route::post('/post-form', [BookController::class, 'store'])->name('postForm');

// Book
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

// Publisher
Route::get('/publishers', [PublisherController::class, 'index'])->name('publishers.index');
Route::get('/publishers/create', [PublisherController::class, 'create'])->name('publishers.create');
Route::post('/publishers', [PublisherController::class, 'store'])->name('publishers.store');
Route::get('/publishers/{publisher}', [PublisherController::class, 'show'])->name('publishers.show');
Route::get('/publishers/{publisher}/edit', [PublisherController::class, 'edit'])->name('publishers.edit');
Route::put('/publishers/{publisher}', [PublisherController::class, 'update'])->name('publishers.update');
Route::delete('/publishers/{publisher}', [PublisherController::class, 'destroy'])->name('publishers.destroy');


//author
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/authors/{author}', [AuthorController::class, 'update'])->name('authors.update');
Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');

<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view(
        'home',
        ['page_title' => 'Home']
    );
});

Route::get('/about', function () {
    return view(
        'about',
        [
            "page_title" => 'About',
            "name" => "Pria Bibir Pink",
            "project" => "Bookorama"
        ]
    );
});

Route::get('/view_books', [BookController::class, 'index']);

Route::post('/add_book', [BookController::class, 'add']);

Route::get('view_books/{isbn}/edit_book', [BookController::class, 'edit'])->name('books.edit_book');

Route::post('view_books/{isbn}/delete_book', [BookController::class, 'delete'])->name('books.delete_book');

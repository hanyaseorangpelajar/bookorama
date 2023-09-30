<?php

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
        ['title' => 'Home']
    );
});

Route::get('/about', function () {
    return view(
        'about',
        [
            "title" => 'About',
            "name" => "Pria Bibir Pink",
            "project" => "Bookorama"
        ]
    );
});

Route::get('/books', function () {
    $books = [
        [
            "title" => "Jawir",
            "slug" => 'jawir',
            "author" => "Mas Rusdi",
            "synopsis" => "Djawir adalah koentji"
        ],
        [
            "title" => "Sir",
            'slug' => 'sir',
            "author" => "Mas Cadi",
            "synopsis" => "Sir adalah koentji"
        ]
    ];

    return view(
        'books',
        [
            "title" => "Books",
            "books" => $books
        ]
    );
});

// halaman single book
Route::get('/books/{slug}', function ($slug) {
    $books = [
        [
            "title" => "Jawir",
            "slug" => 'jawir',
            "author" => "Mas Rusdi",
            "synopsis" => "Djawir adalah koentji"
        ],
        [
            "title" => "Sir",
            'slug' => 'sir',
            "author" => "Mas Cadi",
            "synopsis" => "Sir adalah koentji"
        ]
    ];

    $new_book = [];
    foreach ($books as $book) {
        if ($book['slug'] === $slug) {
            $new_book = $book;
        }
    }

    return view(
        'book',
        [
            'title' => 'Detail Book',
            'book' => $new_book
        ]
    );
});

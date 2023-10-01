<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        $page_title = 'Daftar Buku';
        return view(
            'books.view_books',
            compact('books', 'page_title')
        );
    }
}

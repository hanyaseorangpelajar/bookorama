<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view(
            'books',
            [
                "title" => "Books",
                "books" => Book::all()
            ]
        );
    }

    public function show($slug)
    {
        return view(
            'book',
            [
                'title' => 'Detail Book',
                'book' => Book::find($slug)
            ]
        );
    }
}

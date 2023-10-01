<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        $page_title = 'Book List';
        return view(
            'books.books',
            compact('books', 'page_title')
        );
    }

    public function create()
    {
        $page_title = 'Add Book';
        $categories = Category::all();
        return view(
            'books.create',
            compact('categories', 'page_title')
        )->with('route', route('books.store'));
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'isbn' => 'required|unique:books',
            'title' => 'required',
            'author' => 'required',
            'price' => 'required',
            'categoryid' => 'required'
        ]);

        Book::create($validated_data);

        $category = Category::find($validated_data['categoryid']);

        return view('books.books', compact('category'));
    }
}

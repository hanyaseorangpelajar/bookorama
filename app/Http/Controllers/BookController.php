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
        $custom_messages = [
            'required' => ':attribute column must be filled!',
            'unique' => ':attribute :value already exist!'
        ];

        $custom_attributes = [
            'isbn' => 'ISBN',
            'title' => 'Title',
            'author' => 'Author',
            'price' => 'Price',
            'categoryid' => 'Category'
        ];

        $validated_data = $request->validate([
            'isbn' => 'required|unique:books',
            'title' => 'required',
            'author' => 'required',
            'price' => 'required',
            'categoryid' => 'required'
        ], $custom_messages, $custom_attributes);

        $custom_messages = array_map(function ($message) {
            return ucfirst($message);
        }, $custom_messages);


        // $category = Category::find($validated_data['categoryid']);

        Book::create($validated_data);

        return view('books.books', compact('category'));
    }
}

@extends('layouts.book_main')

@section('card-body')
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-4">Tambah Buku</a>
    <table class="table table-striped">
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Category</th>
            <th>Author</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->category->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->price }}</td>
                <td>
                    {{-- <a href="{{ route('books.edit_book', $book->isbn) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('books.delete_book', $book->isbn) }}" method="post" style="display: inline">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
    </table>
@endsection

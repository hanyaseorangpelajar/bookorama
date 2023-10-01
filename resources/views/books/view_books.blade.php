@extends('layouts.book_main')

@section('card-body')
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
                    Kamu Peler
                </td>
            </tr>
        @endforeach
    </table>
@endsection

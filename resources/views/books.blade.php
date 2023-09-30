@extends('layouts.main')

@section('container')
    @foreach ($books as $book)
        <article class="mb-5">
            <h2>
                <a href="/books/{{ $book['slug'] }}">
                    {{ $book['title'] }}
                </a>
            </h2>
            <h5>By : {{ $book['author'] }}</h5>
            <p>{{ $book['synopsis'] }}</p>
        </article>
    @endforeach
@endsection

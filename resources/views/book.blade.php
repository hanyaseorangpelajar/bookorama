@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $book['title'] }}</h2>
        <h5>{{ $book['author'] }}</h5>
        <p>{{ $book['synopsis'] }}</p>
    </article>

    <a class="btn btn-secondary" href="/books">Back</a>
@endsection

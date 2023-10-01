@extends('layouts.book_main')
@section('card-body')
    <form action="{{ $route }}" method="post">
        @csrf
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" step="0.01" class="form-control">
        </div>
        <div class="form-group">
            <label for="categoryid">Category</label>
            <select name="categoryid" id="categoryid" class="form-control">
                <option value="" selected disabled>--- Select Category ---</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
@endsection

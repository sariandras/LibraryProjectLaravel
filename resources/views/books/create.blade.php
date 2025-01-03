<?php
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);
?>

<x-layout>
    <h1 class="text-center">New book</h1>
    <form method="POST" action="/books">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}"/>
            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author:</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{old('author')}}"/>
            @error('author')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre:</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre" value="{{old('genre')}}"/>
            @error('genre')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="publication_year" class="form-label">Publication year:</label>
            <input type="number" class="form-control @error('publication_year') is-invalid @enderror" id="publication_year" name="publication_year" value="{{old('publication_year')}}"/>
            @error('publication_year')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN:</label>
            <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" value="{{old('isbn')}}"/>
            @error('isbn')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Pages:</label>
            <input type="number" min="1" class="form-control @error('pages') is-invalid @enderror" id="pages" name="pages" value="{{old('pages')}}"/>
            @error('pages')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">Language:</label>
            <input type="text" class="form-control @error('language') is-invalid @enderror" id="language" name="language" value="{{old('language')}}"/>
            @error('language')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher:</label>
            <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" name="publisher" value="{{old('publisher')}}"/>
            @error('publisher')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="buttons d-flex justify-content-center">
            <button class="btn btn-success" type="submit">Add new book</button>
        </div>
    </form>

</x-layout>

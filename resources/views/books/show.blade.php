<x-layout>
<div class="row">
    <div class="col-md-12">
      <div class="book-header">
        <h2 class="text-primary">{{$book->title}}</h2>
        <h4 class="text-muted">by {{$book->author}}</h4>
      </div>

      <div class="book-info">
        <p><strong>Genre:</strong> {{$book->genre}}</p>
        @if ($book->publication_year<0)
            <p><strong>Published:</strong> AD {{$book->publication_year*-1}}</p>

        @else
            <p><strong>Published:</strong> {{$book->publication_year}}</p>

        @endif
        <p><strong>Pages:</strong> {{$book->pages}}</p>
        <p><strong>Language:</strong> {{$book->language}}</p>
      </div>
      <form action="/books/{{$book->id}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" type="submit">Delete</button>
      </form>
      <a class="btn btn-primary" href="/books/{{$book->id}}/edit">Edit</a>
    </div>
  </div>
</x-layout>

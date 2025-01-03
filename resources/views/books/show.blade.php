<x-layout>
<div class="row">
    <div class="col-md-12">
      <div class="book-header my-2 text-center">
        <h2>{{$book->title}}</h2>
        <h4>by {{$book->author}}</h4>
      </div>

      <div class="book-info">
        <p class="my-p-design"><strong>Genre:</strong> {{$book->genre}}</p>
        @if ($book->publication_year<0)
            <p class="my-p-design"><strong>Published:</strong> AD {{$book->publication_year*-1}}</p>

        @else
            <p class="my-p-design"><strong>Published:</strong> {{$book->publication_year}}</p>

        @endif
        <p class="my-p-design"><strong>Pages:</strong> {{$book->pages}}</p>
        <p class="my-p-design"><strong>Language:</strong> {{$book->language}}</p>
      </div>
      <div class="buttons mx-auto d-flex justify-content-evenly w-25">
          <a class="btn btn-primary" href="/books/{{$book->id}}/edit">Edit</a>
          <form action="/books/{{$book->id}}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>

      </div>
    </div>
  </div>
</x-layout>

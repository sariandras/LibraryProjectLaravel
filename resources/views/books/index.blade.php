<x-layout>
    <h1 class="text-center">Available books</h1>
    <div class="row">
        @foreach ($books as $book)
        <div class="card mx-2 my-2 opacity-70" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$book->title}}</h5>
              <p class="card-text">Genre: {{$book->genre}}</p>
              @if ($book->publication_year<0)
                <p class="card-text">Publication year: AD {{($book->publication_year)*-1}}</p>
              @else
                <p class="card-text">Publication year: {{$book->publication_year}}</p>
              @endif
              <a href="/books/{{$book->id}}" class="btn btn-primary">See details</a>
            </div>
          </div>
        @endforeach

    </div>
</x-layout>

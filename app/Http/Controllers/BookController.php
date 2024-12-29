<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function index()
    {
        $books = DB::table('books')->select('books.*')->get();
        return view('books.index',['books'=>$books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(BookRequest $request)
    {
        $validated = $request->validated();
        if (DB::table('books')->insert($validated)) {
            return redirect()->route('books.index')->with('success','Adding new book was successful');
        }
    }

    public function show(string $id)
    {
        $book = DB::table('books')->select('books.*')->where('books.id','=',$id)->first();
        if($book!=null){
            return view('books.show',['book'=>$book]);
        }

        abort(404);
    }

    public function edit(string $id)
    {
        $book = DB::table('books')->select('books.*')->where('id','=',$id)->first();
        if ($book) {
            return view('books.edit',['book'=>$book]);
        }

        abort(404);
    }

    public function update(BookRequest $request, string $id)
    {
        $validatedBook = $request->validated();
        $book = DB::table('books')->select('books.*')->where('id','=',$id)->first();
        if ($book) {
            if(DB::table('books')->where('id','=',$id)->update($validatedBook)){
                return redirect()->route('books.index')->with('success','Updating the information of a book was successfull!');
            };

        }
    }

    public function destroy(string $id)
    {
        $book = DB::table('books')->select('books.*')->where('id','=',$id)->first();
        if ($book) {
            DB::table('books')->delete($id);
            return redirect()->route('books.index')->with('success','Deletion was successful');
        }
    }
}

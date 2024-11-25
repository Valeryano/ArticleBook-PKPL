<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }
    public function create(Request $request)
    {
        // Menampilkan formulir untuk membuat buku baru
        return view('books.create'); 
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Judul' => 'required',
            'Penulis' => 'required',
            'ISBN_ISSN' => 'required',
            'Penerbit' => 'required',
            'Jumlah_Halaman' => 'required',
            'DOI' => 'required',
            'URL' => 'required'
        ]);
    
        // Membuat entri baru dalam database
        Book::create($validatedData);
    
        return redirect()->route('books.index')->with('success', 'Book added successfully');
    }
    
    public function show()
    {
        $books = Book::all();
        return view('books.show', compact('books'));
    }

    public function edit($id)
    {
    $book = Book::findOrFail($id);
    return view('books.edit', compact('books'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json($book, Response::HTTP_OK);
    }
    

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

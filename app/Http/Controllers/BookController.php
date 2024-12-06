<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    public function index()
    {
        // Menampilkan semua buku dalam format JSON
        $books = Book::all();
        return response()->json($books);
    }

    public function create()
    {
        // Menampilkan formulir untuk membuat buku baru
        return view('books.create');
    }

    public function store(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'Judul' => 'required|string',
            'Penulis' => 'required|string',
            'ISBN_ISSN' => 'required|numeric',
            'Penerbit' => 'required|string',
            'Jumlah_Halaman' => 'required|integer',
            'DOI' => 'required|string',
            'URL' => 'required|url'
        ], [
            'Judul.required' => 'Field judul buku wajib diisi.',
            'Penulis.required' => 'Field penulis wajib diisi.',
            'ISBN_ISSN.required' => 'Field ISBN/ISSN wajib diisi.',
            'ISBN_ISSN.numeric' => 'Field ISBN/ISSN harus berupa angka.',
            'Penerbit.required' => 'Field penerbit wajib diisi.',
            'Jumlah_Halaman.required' => 'Field jumlah halaman wajib diisi.',
            'Jumlah_Halaman.integer' => 'Field jumlah halaman harus berupa angka.',
            'DOI.required' => 'Field DOI wajib diisi.',
            'URL.required' => 'Field URL wajib diisi.',
            'URL.url' => 'Field URL harus dalam format URL yang valid.',
        ]);

        // Membuat entri baru dalam database
        $book = Book::create($validatedData);

        // Mengarahkan ke halaman detail buku yang baru ditambahkan
        return redirect()->route('books.show', $book->id)
                         ->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show()
    {
        $books = Book::all();
        return view('books.show', compact('books'));
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input untuk update
        $validatedData = $request->validate([
            'Judul' => 'required|string',
            'Penulis' => 'required|string',
            'ISBN_ISSN' => 'required|numeric',
            'Penerbit' => 'required|string',
            'Jumlah_Halaman' => 'required|integer',
            'DOI' => 'required|string',
            'URL' => 'required|url'
        ], [
            'Judul.required' => 'Field judul buku wajib diisi.',
            'Penulis.required' => 'Field penulis wajib diisi.',
            'ISBN_ISSN.required' => 'Field ISBN/ISSN wajib diisi.',
            'ISBN_ISSN.numeric' => 'Field ISBN/ISSN harus berupa angka.',
            'Penerbit.required' => 'Field penerbit wajib diisi.',
            'Jumlah_Halaman.required' => 'Field jumlah halaman wajib diisi.',
            'Jumlah_Halaman.integer' => 'Field jumlah halaman harus berupa angka.',
            'DOI.required' => 'Field DOI wajib diisi.',
            'URL.required' => 'Field URL wajib diisi.',
            'URL.url' => 'Field URL harus dalam format URL yang valid.',
        ]);

        // Mengupdate buku di database
        $book = Book::findOrFail($id);
        $book->update($validatedData);

        // Mengarahkan ke halaman detail buku yang diperbarui
        return redirect()->route('books.show', $book->id)
                         ->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Menghapus buku berdasarkan ID
        $book = Book::findOrFail($id);
        $book->delete();

        // Mengembalikan respon sukses tanpa konten
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

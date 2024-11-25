<?php

namespace App\Http\Controllers;


use App\Models\Poster;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PosterController extends Controller
{
    public function index()
    {
        $posters = Poster::all();
        return response()->json($posters);
    }
    public function create(Request $request)
    {
        // Menampilkan formulir untuk membuat buku baru
        return view('posters.create'); 
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Judul_Artikel' => 'required',
            'Penulis' => 'required',
            'Nama_Seminar' => 'required',
            'Penyelenggara_Seminar' => 'required',
            'Waktu_Pelaksaaan' => 'required',
            'ISBN_ISSN' => 'required',
            'URL' => 'required'
        ]);
    
        // Membuat entri baru dalam database
        Poster::create($validatedData);
    
        return redirect()->route('posters.index')->with('success', 'Poster added successfully');
    }
    
    public function show()
    {
        $posters = Poster::all();
        return view('posters.show', compact('posters'));
    }

    public function edit($id)
    {
    $posters = Poster::findOrFail($id);
    return view('posters.edit', compact('posters'));
    }

    public function update(Request $request, $id)
    {
        $posters = Poster::findOrFail($id);
        $posters->update($request->all());
        return response()->json($posters, Response::HTTP_OK);
    }
    

    public function destroy($id)
    {
        $Posters = Poster::findOrFail($id);
        $Posters->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

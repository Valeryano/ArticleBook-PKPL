<?php

namespace App\Http\Controllers;


use App\Models\Prosiding;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProsidingController extends Controller
{
    public function index()
    {
        $prosidings = Prosiding::all();
        return response()->json($prosidings);
    }
    public function create(Request $request)
    {
        // Menampilkan formulir untuk membuat buku baru
        return view('prosidings.create'); 
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
        Prosiding::create($validatedData);
    
        return redirect()->route('prosidings.index')->with('success', 'prosidings added successfully');
    }
    
    public function show()
    {
        $prosidings = Prosiding::all();
        return view('prosidings.show', compact('prosidings'));
    }

    public function edit($id)
    {
    $prosidings = Prosiding::findOrFail($id);
    return view('prosidings.edit', compact('prosidings'));
    }

    public function update(Request $request, $id)
    {
        $prosidings = Prosiding::findOrFail($id);
        $prosidings->update($request->all());
        return response()->json($prosidings, Response::HTTP_OK);
    }
    

    public function destroy($id)
    {
        $prosidings = Prosiding::findOrFail($id);
        $prosidings->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

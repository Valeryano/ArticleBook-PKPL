<?php

namespace App\Http\Controllers;



use App\Models\Makalah;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MakalahController extends Controller
{
    public function index()
    {
        $makalahs = Makalah::all();
        return response()->json($makalahs);
    }
    public function create(Request $request)
    {
        // Menampilkan formulir untuk membuat buku baru
        return view('makalahs.create'); 
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Judul_Artikel' => 'required',
            'Penulis' => 'required',
            'Nama_Seminar' => 'required',
            'Penyelenggara_Seminar' => 'required',
            'Waktu_Pelaksaaan' => 'required',
            'URL' => 'required'
        ]);
    
        // Membuat entri baru dalam database
        Makalah::create($validatedData);
    
        return redirect()->route('makalahs.index')->with('success', 'Makalah added successfully');
    }
    
    public function show()
    {
        $makalahs= Makalah::all();
        return view('makalahs.show', compact('makalahs'));
    }

    public function edit($id)
    {
    $makalahs = Makalah::findOrFail($id);
    return view('makalahs.edit', compact('makalahs'));
    }

    public function update(Request $request, $id)
    {
        $makalahs = Makalah::findOrFail($id);
        $makalahs->update($request->all());
        return response()->json($makalahs, Response::HTTP_OK);
    }
    

    public function destroy($id)
    {
        $makalahs = Makalah::findOrFail($id);
        $makalahs->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

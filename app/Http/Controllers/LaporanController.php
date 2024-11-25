<?php

namespace App\Http\Controllers;



use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LaporanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::all();
        return response()->json($laporans);
    }
    public function create(Request $request)
    {
        // Menampilkan formulir untuk membuat buku baru
        return view('laporans.create'); 
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Judul_Artikel' => 'required',
            'Penulis' => 'required',
            'URL' => 'required'
        ]);
    
        // Membuat entri baru dalam database
        Laporan::create($validatedData);
    
        return redirect()->route('laporans.index')->with('success', 'Poster added successfully');
    }
    
    public function show()
    {
        $laporans= Laporan::all();
        return view('laporans.show', compact('laporans'));
    }

    public function edit($id)
    {
    $laporans = Laporan::findOrFail($id);
    return view('laporans.edit', compact('laporans'));
    }

    public function update(Request $request, $id)
    {
        $laporans = Laporan::findOrFail($id);
        $laporans->update($request->all());
        return response()->json($laporans, Response::HTTP_OK);
    }
    

    public function destroy($id)
    {
        $laporans = Laporan::findOrFail($id);
        $laporans->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}


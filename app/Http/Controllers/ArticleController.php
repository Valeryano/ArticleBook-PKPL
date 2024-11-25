<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }
    public function create(Request $request)
    {
        // Menampilkan formulir untuk membuat buku baru
        return view('articles.create'); 
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Judul_Artikel' => 'required',
            'Penulis' => 'required',
            'Nama_Jurnal' => 'required',
            'Volume_Jurnal' => 'required',
            'Halaman' => 'required',
            'ISSN' => 'required',
            'Penerbit' => 'required',
            'URL' => 'required'
        ]);
    
        // Membuat entri baru dalam database
        Article::create($validatedData);
    
        return redirect()->route('articles.index')->with('success', 'article added successfully');
    }
    
    public function show()
    {
        $articles = Article::all();
        return view('articles.show', compact('articles'));
    }

    public function edit($id)
    {
    $articles = Article::findOrFail($id);
    return view('articles.edit', compact('articles'));
    }

    public function update(Request $request, $id)
    {
        $articles = Article::findOrFail($id);
        $articles->update($request->all());
        return response()->json($articles, Response::HTTP_OK);
    }
    

    public function destroy($id)
    {
        $articles = Article::findOrFail($id);
        $articles->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

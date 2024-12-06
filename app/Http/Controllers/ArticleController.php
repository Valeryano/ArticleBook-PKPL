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
    public function create()
    {
        return view('articles.create'); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Judul_Artikel' => 'required|string',
            'Penulis' => 'required|string',
            'Nama_Jurnal' => 'required|string',
            'Volume_Jurnal' => 'required|string',
            'Halaman' => 'required|integer',
            'ISSN' => 'required|numeric',
            'Penerbit' => 'required|string', 
            'URL' => 'required|url'
        ], [
            'Judul_Artikel.required' => 'Field judul artikel wajib diisi.',
            'Penulis.required' => 'Field penulis wajib diisi.',
            'Nama_Jurnal.required' => 'Field nama jurnal wajib diisi.',
            'Volume_Jurnal.required' => 'Field volume jurnal wajib diisi.',
            'Halaman.required' => 'Field halaman wajib diisi.',
            'Halaman.integer' => 'Field halaman harus berupa angka.',
            'ISSN.required' => 'Field ISSN wajib diisi.',
            'ISSN.numeric' => 'Field ISSN harus berupa angka.',
            'Penerbit.required' => 'Field penerbit wajib diisi.',
            'URL.required' => 'Field URL wajib diisi.',
            'URL.url' => 'Field URL harus dalam format URL yang valid.',
        ]);
        $article = Article::create($validatedData);
        return redirect()->route('articles.show', $article->id)
                         ->with('success', 'Artikel berhasil ditambahkan.');
    }
    public function show()
    {
        $articles = Article::all();
        return view('articles.show', compact('articles'));
    }
    public function edit($id)
{
    $article = Article::findOrFail($id);
    return view('articles.edit', compact('article'));
}
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Judul_Artikel' => 'required|string',
            'Penulis' => 'required|string',
            'Nama_Jurnal' => 'required|string',
            'Volume_Jurnal' => 'required|string',
            'Halaman' => 'required|integer',
            'ISSN' => 'required|numeric',
            'Penerbit' => 'required|string',
            'URL' => 'required|url'
        ], [
            'Judul_Artikel.required' => 'Field judul artikel wajib diisi.',
            'Penulis.required' => 'Field penulis wajib diisi.',
            'Nama_Jurnal.required' => 'Field nama jurnal wajib diisi.',
            'Volume_Jurnal.required' => 'Field volume jurnal wajib diisi.',
            'Halaman.required' => 'Field halaman wajib diisi.',
            'Halaman.integer' => 'Field halaman harus berupa angka.',
            'ISSN.required' => 'Field ISSN wajib diisi.',
            'ISSN.numeric' => 'Field ISSN harus berupa angka.',
            'Penerbit.required' => 'Field penerbit wajib diisi.',
            'URL.required' => 'Field URL wajib diisi.',
            'URL.url' => 'Field URL harus dalam format URL yang valid.',
        ]);
        $article = Article::findOrFail($id);
        $article->update($validatedData);

        return redirect()->route('articles.show', $article->id)
                         ->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
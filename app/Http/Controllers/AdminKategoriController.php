<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminKategoriController extends Controller
{
    public function index()
    {
        return view('dashboard.kategori.index', [
            'kategoris' => Kategori::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.kategori.create', [
            'kategoris' => Kategori::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:kategoris'
        ]);
        Kategori::create($validatedData);
        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function edit(Kategori $kategori)
    {
        return view('dashboard.kategori.edit', [
            'kategori' => $kategori
        ]);
    }

    public function update(Request $request, Kategori $kategori)
    {
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required|unique:kategoris'
        ];
        if ($request->slug != $kategori->slug) {
            $rules['slug'] = 'required|unique:kategoris';
        }
        $validatedData = $request->validate($rules);
        Kategori::where('id', $kategori->id)->update($validatedData);
        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil diperbaharui!');
    }

    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);
        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Kategori::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}


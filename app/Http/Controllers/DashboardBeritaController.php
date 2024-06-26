<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardBeritaController extends Controller
{
    public function index()
    {
        return view('dashboard.berita.index', [
            'beritas' => Berita::where('user_id', auth()->user()->id)->get()
        ]);
    }
    public function create()
    {
        return view('/dashboard.berita.create', [
            'kategoris' => Kategori::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:beritas',
            'kategori_id' => 'required',
            'image' => 'image|file',
            'body' => 'required'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('berita-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        Berita::create($validatedData);
        return redirect('/dashboard/berita')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function show(Berita $berita)
    {
        return view('dashboard.berita.show', [
            'berita' => $berita
        ]);
        if($berita->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    public function edit(Berita $berita)
    {
        return view('/dashboard.berita.edit', [
            'berita' => $berita,
            'kategoris' => Kategori::all()
        ]);
        if($berita->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    public function update(Request $request, Berita $berita)
    {
        $rules = ([
            'title' => 'required|max:255',
            'kategori_id' => 'required',
            'image' => 'image|file',
            'body' => 'required'
        ]);
        if($request->slug != $berita->slug) {
            $rules['slug'] = 'required|unique:beritas';
        }
        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('berita-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);   
        Berita::where('id', $berita->id)
            ->update($validatedData);
        return redirect('/dashboard/berita')->with('success', 'Berita berhasil diperbaharui!');
    }

    public function destroy(Berita $berita)
    {
        if($berita->image) {
            Storage::delete($berita->image);
        }
        Berita::destroy($berita->id);
        return redirect('/dashboard/berita')->with('success', 'Berita berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

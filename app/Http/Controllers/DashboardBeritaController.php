<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('dashboard.berita.index', [
        //     'beritas' => Berita::where('user_id', auth()->user()->id)->get()
        // ]);
        return view('dashboard.berita.index', [
            'beritas' => Berita::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/dashboard.berita.create', [
            'kategoris' => Kategori::all()
        ]);

        // {
        //     $kategoris = Kategori::all();
        //     return view('dashboard.berita.create', compact('kategoris'));
        // }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('berita-images');

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:beritas',
            'kategori_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('berita-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        // dd($validatedData);
        Berita::create($validatedData);

        return redirect('/dashboard/berita')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return view('dashboard.berita.show', [
            'berita' => $berita
        ]);

        if($berita->author->id !== auth()->user()->id) {
            abort(403);
       }

        // return $berita;

        // $berita = Berita::findOrFail($id);
        // return view('dashboard.berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $rules = ([
            'title' => 'required|max:255',
            'kategori_id' => 'required',
            'image' => 'image|file|max:1024',
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

    /**
     * Remove the specified resource from storage.
     */
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

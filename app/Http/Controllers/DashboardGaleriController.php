<?php

namespace App\Http\Controllers;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardGaleriController extends Controller
{
    public function index()
    {
        return view('dashboard.galeri.index', [
            'galeris' => Galeri::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('/dashboard.galeri.create', [
            'galeris' => Galeri::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:galeris',
            'image1' => 'required|image',
            'image2' => 'required|image',
            'image3' => 'required|image',
            'url' => 'required|url',
            'event_date' => 'required',
        ]);
        if($request->file('image1')){
            $validatedData['image1'] = $request->file('image1')->store('galeri-images');
        }
        if($request->file('image2')){
            $validatedData['image2'] = $request->file('image2')->store('galeri-images');
        }
        if($request->file('image3')){
            $validatedData['image3'] = $request->file('image3')->store('galeri-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        Galeri::create($validatedData);
        return redirect('/dashboard/galeri')->with('success', 'Dokumentasi berhasil ditambahkan!');
    }

    public function show(Galeri $galeri)
    {
        return view('dashboard.galeri.show', [
            'galeri' => $galeri
        ]);
        if($galeri->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    public function edit(Galeri $galeri)
    {
        return view('/dashboard.galeri.edit', [
            'galeri' => $galeri,
        ]);
        if($galeri->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    public function update(Request $request, Galeri $galeri)
    {
        $rules = ([
            'title' => 'required|max:255',
            'slug' => 'required|unique:galeris',
            'image1' => 'required||image',
            'image2' => 'required||image',
            'image3' => 'required||image',
            'url' => 'required|url',
            'event_date' => 'required',
        ]);
        if($request->slug != $galeri->slug) {
            $rules['slug'] = 'required|unique:galeris';
        }
        $validatedData = $request->validate($rules);
        if($request->file('image1')){
            if($request->oldImage1) {
                Storage::delete($request->oldImage1);
            }
            $validatedData['image1'] = $request->file('image1')->store('galeri-images');
        }
        if($request->file('image2')){
            if($request->oldImage2) {
                Storage::delete($request->oldImage2);
            }
            $validatedData['image2'] = $request->file('image2')->store('galeri-images');
        }
        if($request->file('image3')){
            if($request->oldImage3) {
                Storage::delete($request->oldImage3);
            }
            $validatedData['image3'] = $request->file('image3')->store('galeri-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        Galeri::where('id', $galeri->id)
            ->update($validatedData);
        return redirect('/dashboard/galeri')->with('success', 'Dokumentasi berhasil diperbaharui!');
    }

    public function destroy(Galeri $galeri)
    {
        $attributes = $galeri->getAttributes();
        $imageAttributes = preg_grep('/image/', array_keys($attributes));
        foreach ($imageAttributes as $attribute) {
            if ($galeri->$attribute) {
                Storage::delete($galeri->$attribute);
            }
        }
        Galeri::destroy($galeri->id);
        return redirect('/dashboard/galeri')->with('success', 'Dokumentasi berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Galeri::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

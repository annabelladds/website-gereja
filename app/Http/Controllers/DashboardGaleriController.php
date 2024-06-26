<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.galeri.index', [
            'galeris' => Galeri::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/dashboard.galeri.create', [
            'galeris' => Galeri::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:galeris',
            // 'user_id' => 'required',
            'image1' => 'required|image|max:1024',
            'image2' => 'required|image|max:1024',
            'image3' => 'required|image|max:1024',
            'url' => 'required|url',
            // 'time' => 'required|max:255',
            'event_date' => 'required',
            // 'formatted_date' => 'required'
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
        // dd($validatedData);
        Galeri::create($validatedData);

        return redirect('/dashboard/galeri')->with('success', 'Dokumentasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        return view('dashboard.galeri.show', [
            'galeri' => $galeri
        ]);

        if($galeri->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        return view('/dashboard.galeri.edit', [
            'galeri' => $galeri,
            // 'galeris' => Galeri::all()
            // 'kategoris' => Kategori::all()
        ]);

        if($galeri->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $rules = ([
            'title' => 'required|max:255',
            'slug' => 'required|unique:galeris',
            // 'user_id' => 'required',
            'image1' => 'required||image|max:1024',
            'image2' => 'required||image|max:1024',
            'image3' => 'required||image|max:1024',
            'url' => 'required|url',
            'event_date' => 'required',
            // 'body' => 'required'
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        // if($galeri->image) {
        //     Storage::delete($galeri->image);
        // }
        // if($galeri->image1) {
        //     Storage::delete($galeri->image1);
        // }
        // if($galeri->image2) {
        //     Storage::delete($galeri->image2);
        // }
        // if($galeri->image3) {
        //     Storage::delete($galeri->image3);
        // }

            // Get all attributes of the model
        $attributes = $galeri->getAttributes();

        // Filter attributes that contain 'image'
        $imageAttributes = preg_grep('/image/', array_keys($attributes));

        // Loop through each image attribute and delete the corresponding file
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

<?php

namespace App\Http\Controllers;

use App\Models\Warta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardWartaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('dashboard.warta.index');
        return view('dashboard.warta.index', [
            'wartas' => Warta::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/dashboard.warta.create', [
            'wartas' => Warta::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:wartas',
            // 'user_id' => 'required',
            'file' => 'required|file|max:1024|mimes:png,pdf,docx,jpg',
        ]);

        // if($request->file('file')){
        //     $validatedData['file'] = $request->file('file')->store('warta-files');
        // }

        // if($request->file('file')){
        //     $validatedData['file'] = $request->file('file')->store('warta-files', 'public');
        // }  
        
        if($request->file('file')){
            $originalFileName = $request->file('file')->getClientOriginalName();
            $validatedData['file'] = $request->file('file')->storeAs('warta-files', $originalFileName, 'public');
        }

        $validatedData['user_id'] = auth()->user()->id;
        // dd($validatedData);
        Warta::create($validatedData);

        return redirect('/dashboard/warta')->with('success', 'Warta berhasil ditambahkan!');

        // if ($request->file('file')) {
        //     $file = $request->file('file');
        //     $filename = $validatedData['slug'];
        //     $filePath = $file->storeAs('public/files', $filename);
    
        //     Simpan path file dan informasi lainnya di database
        //     FileModel::create([
        //         'slug' => $validatedData['slug'],
        //         'path' => $filePath,
        //     ]);
        // }
    
        // return redirect('/dashboard/berita')->with('success', 'File berhasil diunggah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Warta $warta)
    {
        return view('dashboard.warta.show', [
            'warta' => $warta
        ]);

        if($warta->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warta $warta)
    {
        return view('/dashboard.warta.edit', [
            'warta' => $warta,
            // 'kategoris' => Kategori::all()
        ]);

        if($warta->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Warta $warta)
    {
        $rules = ([
            'title' => 'required|max:255',
            // 'user_id' => 'required',
            'file' => 'required|file|max:1024',
            // 'body' => 'required'
        ]);

        if($request->slug != $warta->slug) {
            $rules['slug'] = 'required|unique:wartas';
        }

        $validatedData = $request->validate($rules);

        // if($request->file('file')){
        //     if($request->oldfile) {
        //         Storage::delete($request->oldfile);
        //     }
        //     $validatedData['file'] = $request->file('file')->store('warta-files', 'public');
        // }

        if($request->file('file')){
            if($request->oldfile) {
                Storage::disk('public')->delete($request->oldfile);
            }
            $originalFileName = $request->file('file')->getClientOriginalName();
            $validatedData['file'] = $request->file('file')->storeAs('warta-files', $originalFileName, 'public');
        }
        

        $validatedData['user_id'] = auth()->user()->id;
    
        Warta::where('id', $warta->id)
            ->update($validatedData);

        return redirect('/dashboard/warta')->with('success', 'Warta berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warta $warta)
    {
        if($warta->file) {
            Storage::delete($warta->file);
        }
        
        Warta::destroy($warta->id);

        return redirect('/dashboard/warta')->with('success', 'Warta berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Warta::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
    
}

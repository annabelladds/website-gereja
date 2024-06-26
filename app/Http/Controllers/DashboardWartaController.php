<?php

namespace App\Http\Controllers;
use App\Models\Warta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardWartaController extends Controller
{
    public function index()
    {
        return view('dashboard.warta.index', [
            'wartas' => Warta::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('/dashboard.warta.create', [
            'wartas' => Warta::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:wartas',
            'file' => 'required|file|mimes:png,pdf,docx,jpg',
        ]);
        if($request->file('file')){
            $originalFileName = $request->file('file')->getClientOriginalName();
            $validatedData['file'] = $request->file('file')->storeAs('warta-files', $originalFileName, 'public');
        }

        $validatedData['user_id'] = auth()->user()->id;
        Warta::create($validatedData);

        return redirect('/dashboard/warta')->with('success', 'Warta berhasil ditambahkan!');
    }

    public function show(Warta $warta)
    {
        return view('dashboard.warta.show', [
            'warta' => $warta
        ]);
        if($warta->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    public function edit(Warta $warta)
    {
        return view('/dashboard.warta.edit', [
            'warta' => $warta,
        ]);
        if($warta->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    public function update(Request $request, Warta $warta)
    {
        $rules = ([
            'title' => 'required|max:255',
            'file' => 'required|file',
        ]);
        if($request->slug != $warta->slug) {
            $rules['slug'] = 'required|unique:wartas';
        }
        $validatedData = $request->validate($rules);
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

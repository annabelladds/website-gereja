<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        return view('layanan.index', [
            'title' => 'Layanan',
            'active' => 'layanan'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:255',
            'phone' => ['required', 'regex:/^(\+62|0)\d{9,12}$/'],
            'address' => ['required', 'min:10', 'max:255'],
            'church' => 'required|min:2|max:255',
            'file' => ['required', 'file', 'mimes:pdf,docx,doc,png,jpg'],
            'family' => 'required|min:1|max:255'
        ]);
        if($request->file('file')){
            $originalFileName = $request->file('file')->getClientOriginalName();
            $validatedData['file'] = $request->file('file')->storeAs('layanan-files', $originalFileName, 'public');
        }
        Layanan::create($validatedData);
        return redirect('/layanan')->with('success', 'Terima kasih! Pendaftaran telah terkirim.');
    }
}

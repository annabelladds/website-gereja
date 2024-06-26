<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    // public function show(Galeri $galeri)
    // {
    //     return view('galeri', [
    //         "title" => "Galeri",
    //         "galeri" => Galeri::latest()->get()
    //     ]);
    // }

    public function index()
    {
        return view('galeri', [
            "title" => "Galeri",
            "active" => 'galeri',
            // "berita" => Berita::all()
            "galeri" => Galeri::latest()->paginate(3)->withQueryString()
        ]);
    }

    public function show(Galeri $galeridetail)
    {
        return view('galeridetail', [
            "title" => "Galeri",
            "galeri" => $galeridetail
        ]);
    }
}

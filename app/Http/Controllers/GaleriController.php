<?php

namespace App\Http\Controllers;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        return view('galeri', [
            "title" => "Galeri",
            "active" => 'galeri',
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

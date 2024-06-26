<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warta;

class WartaController extends Controller
{
    public function index()
    {
        return view('warta', [
            "title" => "Tata Ibadah & Warta Jemaat",
            // "berita" => Berita::all()
            "warta" => Warta::latest()->get()
            // latest()->limit(3)->get()
            // "warta" => Warta::all()
        ]);
    }

    public function show(Warta $wartadetail)
    {
        return view('wartadetail', [
            "title" => "Detail Tata Ibadah & Warta Jemaat",
            "warta" => $wartadetail
        ]);
    }

    // public function showWarta()
    // {
    // $warta = Warta::all(); // Ambil semua warta
    // return view('warta.beranda', compact('warta')); // Kirim koleksi ke tampilan
    // }

}

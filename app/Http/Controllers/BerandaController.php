<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warta;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda', [
            "title" => "Beranda",
            // "berita" => Berita::all()
            "active" => "beranda",
            "warta" => Warta::latest()->get()
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

    // public function index()
    // {
    // $warta = Warta::all();
    // return view('beranda', compact('warta'));
    // }
}

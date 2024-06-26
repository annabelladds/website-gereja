<?php

namespace App\Http\Controllers;
use App\Models\Warta;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda', [
            "title" => "Beranda",
            "active" => "beranda",
            "warta" => Warta::latest()->get()
        ]);
    }

    public function show(Warta $wartadetail)
    {
        return view('wartadetail', [
            "title" => "Detail Tata Ibadah & Warta Jemaat",
            "warta" => $wartadetail
        ]);
    }
}

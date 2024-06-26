<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;

class BeritaController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('author')) {
            $author = Kategori::firstWhere('slug', request('author'));
            $title = ' oleh ' . $author->name;
        }

        return view('berita', [
            "title" => "Berita" .$title,
            "active" => 'berita',
            // "berita" => Berita::all()
            "berita" => Berita::latest()->filter(request(['cari', 'author']))->paginate(16)->withQueryString()
        ]);
    }

    public function show(Berita $beritadetail)
    {
        // Ambil ID berita yang sedang dibuka
        $currentBeritaId = $beritadetail->id;

        // Ambil berita rekomendasi, kecuali berita yang sedang dibuka, urutkan berdasarkan yang terbaru
        $rekomendasiBerita = Berita::where('id', '!=', $currentBeritaId)
                                    ->orderBy('created_at', 'desc')
                                    ->limit(3)
                                    ->get();

        return view('beritadetail', [
            "title" => "Detail Berita",
            "active" => 'berita',
            "berita" => $beritadetail,
            "rekomendasiBerita" => $rekomendasiBerita,
        ]);
    }
}

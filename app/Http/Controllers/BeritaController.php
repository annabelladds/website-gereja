<?php

namespace App\Http\Controllers;
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
            "berita" => Berita::latest()->filter(request(['cari', 'author']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Berita $beritadetail)
    {
        $currentBeritaId = $beritadetail->id;
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

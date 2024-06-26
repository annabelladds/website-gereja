<?php

use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminUserController;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DashboardWartaController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardGaleriController;
use App\Http\Controllers\DashboardLayananController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda', ["title" => "Beranda"], ["active" => "beranda"],  ["/{wartadetail:slug}" => '$published_at']);

Route::get('/maintenance', function () {
    return view('maintenance');
});

Route::get('/parhalado', function () {
    return view('parhalado', [
        "active" => "parhalado",
        "title" => "Parhalado",
    ]);
});

Route::get('/koinonia', function () {
    return view('koinonia', [
        "title" => "Koinonia"
    ]);
});

Route::get('/marturia', function () {
    return view('marturia', [
        "title" => "Marturia"
    ]);
});

Route::get('/diakonia', function () {
    return view('diakonia', [
        "title" => "Diakonia"
    ]);
});

Route::get('kategoris', function(){
    return view('kategori', [
        'title' => 'Kategori Berita',        
        'kategori' =>  Kategori::all()   
    ]);
});

Route::get('/kategoris/{kategori:slug}', function(Kategori $kategori) {
    return view('kategori', [
        'title' => $kategori->name,        
        'berita' => $kategori->berita, 
        'kategori' =>  $kategori->name   
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('berita/{beritadetail:slug}', [BeritaController::class, 'show']);

Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('galeri/{galeridetail:slug}', [GaleriController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::delete('/dashboard/berita/{berita:slug}', [DashboardBeritaController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/berita/checkSlug', [DashboardBeritaController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/berita/create', function() {
    return view('dashboard.berita.create');
})->middleware('auth');
Route::post('/dashboard/berita/create', [DashboardBeritaController::class, 'store'])->middleware('auth');
Route::get('/dashboard/berita/{berita:slug}', [DashboardBeritaController::class, 'show'])->middleware('auth');
Route::get('/dashboard/berita/{berita:slug}/edit', [DashboardBeritaController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/berita/{berita:slug}', [DashboardBeritaController::class, 'update'])->middleware('auth');
Route::resource('/dashboard/berita', DashboardBeritaController::class)->middleware('auth');
Route::resource('/dashboard/berita/', DashboardBeritaController::class)->except([
    'show',
])->middleware('auth');


Route::get('/dashboard/warta/create', function() {
    return view('dashboard.warta.create');
})->middleware('auth');
Route::delete('/dashboard/warta/{warta:slug}', [DashboardWartaController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/warta/{warta:slug}/edit', [DashboardWartaController::class, 'edit'])->middleware('auth');
Route::get('/dashboard/warta/{warta:slug}', [DashboardWartaController::class, 'show'])->middleware('auth');
Route::put('/dashboard/warta/{warta:slug}', [DashboardWartaController::class, 'update'])->middleware('auth');
Route::post('/dashboard/warta/create', [DashboardWartaController::class, 'store'])->middleware('auth');
Route::resource('/dashboard/warta', DashboardWartaController::class)->middleware('auth');
Route::post('/dashboard/warta', [DashboardWartaController::class, 'store'])->name('file.store');


Route::get('/dashboard/galeri/create', function() {
    return view('dashboard.galeri.create');
})->middleware('auth');
Route::delete('/dashboard/galeri/{galeri:slug}', [DashboardGaleriController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/galeri/{galeri:slug}/edit', [DashboardGaleriController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/galeri/{galeri:slug}', [DashboardGaleriController::class, 'update'])->middleware('auth');
Route::post('/dashboard/galeri', [DashboardGaleriController::class, 'store'])->name('file.store');
Route::resource('/dashboard/galeri', DashboardGaleriController::class)->middleware('auth');
Route::get('/dashboard/galeri/{galeri:slug}', [DashboardGaleriController::class, 'show'])->middleware('auth');
Route::post('/dashboard/galeri/create', [DashboardGaleriController::class, 'store'])->middleware('auth');


Route::resource('/dashboard/layanan', DashboardLayananController::class)->middleware('auth');
Route::post('/dashboard/layanan', [DashboardLayananController::class, 'store'])->name('file.store');
Route::get('/dashboard/layanan/{layanan:slug}', [DashboardLayananController::class, 'show'])->middleware('auth');


Route::post('/layanan/store', [LayananController::class, 'store'])->name('layanan.store');

Route::get('/dashboard/layanan', [DashboardLayananController::class, 'index'])->name('layanan.index');
Route::get('/dashboard/layanan/download/{filename}', [DashboardLayananController::class, 'download'])->name('layanan.download');
Route::delete('/dashboard/layanan/{id}', [DashboardLayananController::class, 'destroy'])->name('layanan.destroy');

Route::resource('/dashboard/kategori', AdminKategoriController::class)->except('show')->middleware('auth');
Route::delete('/dashboard/kategori/{kategori:slug}', [AdminKategoriController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/kategori/{kategori:slug}/edit', [AdminKategoriController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/kategori/{kategori:slug}', [AdminKategoriController::class, 'update'])->middleware('auth');

Route::resource('/dashboard/user', AdminUserController::class)->except('show')->middleware('auth');
Route::delete('/dashboard/user/{user:username}', [AdminUserController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/user/{user:username}/edit', [AdminUserController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/user/{user:username}', [AdminUserController::class, 'update'])->middleware('auth');

Route::get('/layanan', [LayananController::class, 'index']);
Route::post('/layanan', [LayananController::class, 'store']);

Route::get('/sekolahminggu', function () {
    return view('sekolahminggu', [
        "active" => "koinonia",
        "title" => "Sekolah Minggu",
    ]);
});

Route::get('/remaja', function () {
    return view('remaja', [
        "active" => "koinonia",
        "title" => "Remaja"
    ]);
});

Route::get('/naposo', function () {
    return view('naposo', [
        "active" => "koinonia",
        "title" => "Naposo"
    ]);
});

Route::get('/parompuan', function () {
    return view('parompuan', [
        "active" => "koinonia",
        "title" => "Parompuan"
    ]);
});

Route::get('/ama', function () {
    return view('ama', [
        "active" => "koinonia",
        "title" => "Ama"
    ]);
});

Route::get('/musik', function () {
    return view('musik', [
        "active" => "marturia",
        "title" => "Musik"
    ]);
});

Route::get('/zending', function () {
    return view('zending', [
        "active" => "marturia",
        "title" => "Zending"
    ]);
});

Route::get('/sosial', function () {
    return view('sosial', [
        "active" => "diakonia",
        "title" => "Sosial"
    ]);
});

Route::get('/pendidikan', function () {
    return view('pendidikan', [
        "active" => "diakonia",
        "title" => "Pendidikan"
    ]);
});

Route::get('/kesehatan', function () {
    return view('Kesehatan', [
        "active" => "diakonia",
        "title" => "Kesehatan"
    ]);
});

Route::get('/kemasyarakatan', function () {
    return view('kemasyarakatan', [
        "active" => "diakonia",
        "title" => "Kemasyarakatan"
    ]);
});


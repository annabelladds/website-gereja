<?php

use App\Models\User;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WartaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardWartaController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardGaleriController;
use App\Http\Controllers\DashboardLayananController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


// Route::get('/', [BerandaController::class, 'index'])->name('beranda');
// // Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
// Route::get('/{wartadetail:slug}', [BerandaController::class, 'show'])->name('beranda');



Route::get('/', [BerandaController::class, 'index'])->name('beranda', ["title" => "Beranda"], ["active" => "beranda"],  ["/{wartadetail:slug}" => '$published_at']);

// Route::get('/authors/{author:username}', function(User $author) {
//     return view('berita', [
//         'title' => "Berita Oleh : $author->name",
//         'berita' => $author->berita->load('author'),
//     ]);
// });

// Route::get('/warta', [WartaController::class, 'index']);
// Route::get('warta/{wartadetail:slug}', [WartaController::class, 'show']);

Route::get('/maintenance', function () {
    return view('maintenance');
});

Route::get('/parhalado', function () {
    return view('parhalado', [
        "active" => "parhalado",
        "title" => "Parhalado",
        "image" => "contoh profil.jpg",
        "name" => "Pdt. D. Manurung, S.Th",
        "jabatan" => "Pimpinan Jemaat",
        "telp" => "081213141516",
        "image2" => "contoh profil.jpg",
        "name2" => "St. R. Hutahaen",
        "jabatan2" => "Sekretaris Huria",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi",
        "image3" => "contoh profil.jpg",
        "name3" => "St. W. Aritonang",
        "jabatan3" => "Bendahara Huria",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi",
        "image4" => "contoh profil.jpg",
        "name4" => "St. T. B. Sitompul",
        "jabatan4" => "Dewan Koinonia",
        "telp4" => "081213141516",
        "sektor4" => "Sektor Kosambi",
        "image5" => "contoh profil.jpg",
        "name5" => "St. R. Simaremare",
        "jabatan5" => "Dewan Marturia",
        "telp5" => "081213141516",
        "sektor5" => "Sektor Kosambi",
        "image6" => "contoh profil.jpg",
        "name6" => "St. J. Tambunan",
        "jabatan6" => "Dewan Diakonia",
        "telp6" => "081213141516",
        "sektor6" => "Sektor Kosambi",
        "image7" => "contoh profil.jpg",
        "name7" => "St. S. H. Sitompul",
        "jabatan7" => "Parhalado Parartaon",
        "telp7" => "081213141516",
        "sektor7" => "Sektor Kosambi",
        "image8" => "contoh profil.jpg",
        "name8" => "R. Gultom",
        "jabatan8" => "Badan Audit",
        "telp8" => "081213141516",
        "sektor8" => "Sektor Kosambi"
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

//biasanya pake yg ini untuk manual
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
// Route::get('/dashboard/galeri/{galeri:slug}/edit', [GaleriController::class, 'edit'])->name('galeri.edit');
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

// Route::get('/dashboard/berita/create', [BeritaController::class, 'create'])->middleware('auth');

// Route::group(['middleware' => ['auth', 'ceklevel:Annabella']], function() {
//     Route::get('/dashboard/berita/create', [BeritaController::class, 'create']);
// });


// Route::get('/dashboard.berita/create', function() {
//     return view('dashboard.berita.create');
// })->middleware('auth');

// Route::resource('/dashboard/berita/', DashboardBeritaController::class)->except([
//     'create',
// ])->middleware('auth');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });


Route::get('/layanan', [LayananController::class, 'index']);
Route::post('/layanan', [LayananController::class, 'store']);

// Route::get('/layanan', function () {
//     return view('layanan', [
//         "active" => "layanan",
//         "title" => "Layanan"
//     ]);
// });

Route::get('/sekolahminggu', function () {
    return view('sekolahminggu', [
        "active" => "koinonia",
        "title" => "Sekolah Minggu",
        "image" => "contoh profil.jpg",
        "name" => "St. R. br. Nainggolan",
        "jabatan" => "Paniroi Sekolah Minggu",
        "telp" => "081213141516",
        "sektor" => "Sektor Kosambi",
        "image2" => "contoh profil.jpg",
        "name2" => "St. R. Siahaan",
        "jabatan2" => "Paniroi Sekolah Minggu",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi",
        "image3" => "contoh profil.jpg",
        "name3" => "Ny. St. H. Manurung br. Sirait",
        "jabatan3" => "Ketua GSM",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi",
        "image4" => "contoh profil.jpg",
        "name4" => "Annabella br. Sinambela",
        "jabatan4" => "Sekretaris GSM",
        "telp4" => "0813 1155 4059",
        "sektor4" => "Sektor Kosambi",
        "image5" => "contoh profil.jpg",
        "name5" => "Ny. St. T. B Sitompul br. Siregar",
        "jabatan5" => "Bendahara GSM",
        "telp5" => "081213141516",
        "sektor5" => "Sektor Kosambi",
        "image6" => "contoh profil.jpg",
        "name6" => "NN",
        "jabatan6" => "Anggota GSM",
        "telp6" => "081213141516",
        "sektor6" => "Sektor Kosambi",
        "image7" => "contoh profil.jpg",
        "name7" => "NN",
        "jabatan7" => "Anggota GSM",
        "telp7" => "081213141516",
        "sektor7" => "Sektor Kosambi",
        "image8" => "contoh profil.jpg",
        "name8" => "NN",
        "jabatan8" => "Anggota GSM",
        "telp8" => "081213141516",
        "sektor8" => "Sektor Kosambi",
        "image9" => "contoh profil.jpg",
        "name9" => "NN",
        "jabatan9" => "Anggota GSM",
        "telp9" => "081213141516",
        "sektor9" => "Sektor Kosambi",
        "image10" => "contoh profil.jpg",
        "name10" => "NN",
        "jabatan10" => "Anggota GSM",
        "telp10" => "081213141516",
        "sektor10" => "Sektor Kosambi",
        "image11" => "contoh profil.jpg",
        "name11" => "NN",
        "jabatan11" => "Anggota GSM",
        "telp11" => "081213141516",
        "sektor11" => "Sektor Kosambi"
    ]);
});

Route::get('/remaja', function () {
    return view('remaja', [
        "active" => "koinonia",
        "title" => "Remaja",
        "image" => "contoh profil.jpg",
        "name" => "St. K. Marbun",
        "jabatan" => "Paniroi Remaja",
        "telp" => "081213141516",
        "sektor" => "Sektor Kosambi",
        "image2" => "contoh profil.jpg",
        "name2" => "Maria br. Siagian",
        "jabatan2" => "Ketua Remaja",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi",
        "image3" => "contoh profil.jpg",
        "name3" => "Yabes br. Simanungkalit",
        "jabatan3" => "Wakil Ketua Remaja",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi",
        "image4" => "contoh profil.jpg",
        "name4" => "Gita br. Gultom",
        "jabatan4" => "Sekretaris Remaja",
        "telp4" => "0813 1155 4059",
        "sektor4" => "Sektor Kosambi",
        "image5" => "contoh profil.jpg",
        "name5" => "Monik br. Tambunan",
        "jabatan5" => "Bendahara Remaja",
        "telp5" => "081213141516",
        "sektor5" => "Sektor Kosambi",
        "image6" => "contoh profil.jpg",
        "name6" => "NN",
        "jabatan6" => "Koor Sie. Kerohanian",
        "telp6" => "081213141516",
        "sektor6" => "Sektor Kosambi",
        "image7" => "contoh profil.jpg",
        "name7" => "NN",
        "jabatan7" => "Sie. Kerohanian",
        "telp7" => "081213141516",
        "sektor7" => "Sektor Kosambi",
        "image8" => "contoh profil.jpg",
        "name8" => "NN",
        "jabatan8" => "Sie. Kerohanian",
        "telp8" => "081213141516",
        "sektor8" => "Sektor Kosambi",
        "image9" => "contoh profil.jpg",
        "name9" => "NN",
        "jabatan9" => "Koor Sie. Humas",
        "telp9" => "081213141516",
        "sektor9" => "Sektor Kosambi",
        "image10" => "contoh profil.jpg",
        "name10" => "NN",
        "jabatan10" => "Sie. Humas",
        "telp10" => "081213141516",
        "sektor10" => "Sektor Kosambi",
        "image11" => "contoh profil.jpg",
        "name11" => "NN",
        "jabatan11" => "Koor Sie. Musik",
        "telp11" => "081213141516",
        "sektor11" => "Sektor Kosambi",
        "image12" => "contoh profil.jpg",
        "name12" => "NN",
        "jabatan12" => "Sie. Musik",
        "telp12" => "081213141516",
        "sektor12" => "Sektor Kosambi"
    ]);
});

Route::get('/naposo', function () {
    return view('naposo', [
        "active" => "koinonia",
        "title" => "Naposo",
        "image" => "contoh profil.jpg",
        "name" => "St. M. Simanjuntak",
        "jabatan" => "Paniroi Naposo",
        "telp" => "081213141516",
        "sektor" => "Sektor Kosambi",
        "image2" => "contoh profil.jpg",
        "name2" => "Freddy Pakpahan",
        "jabatan2" => "Ketua Naposo",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi",
        "image3" => "contoh profil.jpg",
        "name3" => "Satrio Lumbantobing",
        "jabatan3" => "Wakil Ketua Naposo",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi",
        "image4" => "contoh profil.jpg",
        "name4" => "Falentina br. Lumbantoruan",
        "jabatan4" => "Sekretaris Naposo",
        "telp4" => "0813 1155 4059",
        "sektor4" => "Sektor Kosambi",
        "image5" => "contoh profil.jpg",
        "name5" => "Desna br. Sitompul",
        "jabatan5" => "Bendahara Naposo",
        "telp5" => "081213141516",
        "sektor5" => "Sektor Kosambi",
        "image6" => "contoh profil.jpg",
        "name6" => "Hana br. Pardede",
        "jabatan6" => "Koor Sie. Kerohanian",
        "telp6" => "081213141516",
        "sektor6" => "Sektor Kosambi",
        "image7" => "contoh profil.jpg",
        "name7" => "Riris br. Silitonga",
        "jabatan7" => "Sie. Kerohanian",
        "telp7" => "081213141516",
        "sektor7" => "Sektor Kosambi",
        "image8" => "contoh profil.jpg",
        "name8" => "NN",
        "jabatan8" => "Sie. Kerohanian",
        "telp8" => "081213141516",
        "sektor8" => "Sektor Kosambi",
        "image9" => "contoh profil.jpg",
        "name9" => "NN",
        "jabatan9" => "Koor Sie. Humas",
        "telp9" => "081213141516",
        "sektor9" => "Sektor Kosambi",
        "image10" => "contoh profil.jpg",
        "name10" => "NN",
        "jabatan10" => "Sie. Humas",
        "telp10" => "081213141516",
        "sektor10" => "Sektor Kosambi",
        "image11" => "contoh profil.jpg",
        "name11" => "NN",
        "jabatan11" => "Koor Sie. Musik",
        "telp11" => "081213141516",
        "sektor11" => "Sektor Kosambi",
        "image12" => "contoh profil.jpg",
        "name12" => "NN",
        "jabatan12" => "Sie. Musik",
        "telp12" => "081213141516",
        "sektor12" => "Sektor Kosambi"
    ]);
});

Route::get('/parompuan', function () {
    return view('parompuan', [
        "active" => "koinonia",
        "title" => "Parompuan",
        "image" => "contoh profil.jpg",
        "name" => "St. H. br. Tampubolon",
        "jabatan" => "Paniroi Parompuan",
        "telp" => "081213141516",
        "sektor" => "Sektor Kosambi",
        "image2" => "contoh profil.jpg",
        "name2" => "Ny. Sagala br. Turnip",
        "jabatan2" => "Ketua Parompuan",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi",
        "image3" => "contoh profil.jpg",
        "name3" => "Ny. Simanulang br. Simanjuntak",
        "jabatan3" => "Sekretaris Parompuan",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi",
        "image4" => "contoh profil.jpg",
        "name4" => "Ny. Silaban br. Bakkara",
        "jabatan4" => "Bendahara Parompuan",
        "telp4" => "0813 1155 4059",
        "sektor4" => "Sektor Kosambi",
        "image5" => "contoh profil.jpg",
        "name5" => "Ny. Pasaribu br. Manalu",
        "jabatan5" => "Ketua Punguan Ina",
        "telp5" => "081213141516",
        "sektor5" => "Sektor Kosambi",
        "image6" => "contoh profil.jpg",
        "name6" => "Ny. Gultom br. Sagala",
        "jabatan6" => "Sekretaris Punguan Ina",
        "telp6" => "081213141516",
        "sektor6" => "Sektor Kosambi",
        "image7" => "contoh profil.jpg",
        "name7" => "Ny. Simanungkalit br. Samosir",
        "jabatan7" => "Bendahara Punguan Ina",
        "telp7" => "081213141516",
        "sektor7" => "Sektor Kosambi",
    ]);
});

Route::get('/ama', function () {
    return view('ama', [
        "active" => "koinonia",
        "title" => "Ama",
        "image" => "contoh profil.jpg",
        "name" => "St. E. Sinambela",
        "jabatan" => "Paniroi Ama",
        "telp" => "081213141516",
        "sektor" => "Sektor Kosambi",
        "image2" => "contoh profil.jpg",
        "name2" => "N. Pakpahan/br. Sinaga",
        "jabatan2" => "Ketua Ama",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi",
        "image3" => "contoh profil.jpg",
        "name3" => "F. Naibaho/br. Pasaribu",
        "jabatan3" => "Sekretaris Ama",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi",
        "image4" => "contoh profil.jpg",
        "name4" => "H. Silaban/br. Limbong",
        "jabatan4" => "Bendahara Parompuan",
        "telp4" => "0813 1155 4059",
        "sektor4" => "Sektor Kosambi",
    ]);
});

Route::get('/zending', function () {
    return view('zending', [
        "active" => "marturia",
        "title" => "Zending",
        "image" => "contoh profil.jpg",
        "name" => "Ny. St. H. Manurung br Sirait",
        "jabatan" => "Ketua Sie. Zending",
        "telp" => "081213141516",
        "sektor" => "Sektor Kosambi",
        "image2" => "contoh profil.jpg",
        "name2" => "N. Pakpahan/br. Sinaga",
        "jabatan2" => "Sie. Zending",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi",
        "image3" => "contoh profil.jpg",
        "name3" => "F. Naibaho/br. Pasaribu",
        "jabatan3" => "Sie. Zending",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi",
        "image4" => "contoh profil.jpg",
        "name4" => "H. Silaban/br. Limbong",
        "jabatan4" => "Sie. Zending",
        "telp4" => "0813 1155 4059",
        "sektor4" => "Sektor Kosambi",
    ]);
});

Route::get('/musik', function () {
    return view('musik', [
        "active" => "marturia",
        "title" => "Musik",
        "image" => "contoh profil.jpg",
        "name" => "D. Nainggolan/br. Sipahutar",
        "jabatan" => "Ketua Sie. Musik",
        "telp" => "081213141516",
        "sektor" => "Sektor Kosambi",
        "image2" => "contoh profil.jpg",
        "name2" => "Ester br. Tambunan",
        "jabatan2" => "Koor. Organis",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi",
        "image3" => "contoh profil.jpg",
        "name3" => "F. Naibaho/br. Pasaribu",
        "jabatan3" => "Sie. Musik",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi",
        "image4" => "contoh profil.jpg",
        "name4" => "H. Silaban/br. Limbong",
        "jabatan4" => "Sie. Musik",
        "telp4" => "0813 1155 4059",
        "sektor4" => "Sektor Kosambi",
    ]);
});

Route::get('/sosial', function () {
    return view('sosial', [
        "active" => "diakonia",
        "title" => "Sosial",
        "image" => "contoh profil.jpg",
        "name" => "J. Silaban/ br. Bakkara",
        "jabatan" => "Ketua Sie. Sosial",
        "telp" => "081213141516",
        "sektor" => "Sektor Kosambi",
        "image2" => "contoh profil.jpg",
        "name2" => "D. Manalu/br. Sinambela",
        "jabatan2" => "Kord. Sektor (Kosambi I)",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi I",
        "image3" => "contoh profil.jpg",
        "name3" => "F. Napitupulu/br. Simanjuntak",
        "jabatan3" => "Kord. Sektor (Kosambi I)",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi I",
        "image4" => "contoh profil.jpg",
        "name4" => "F. Naibaho/br. Pasaribu",
        "jabatan4" => "Kord. Sektor (Kosambi II)",
        "telp4" => "0813 1155 4059",
        "sektor4" => "Sektor Kosambi II",
        "image5" => "contoh profil.jpg",
        "name5" => "R. Manik/br. Panjaitan",
        "jabatan5" => "Kord. Sektor (Kosambi II)",
        "telp5" => "081213141516",
        "sektor5" => "Sektor Kosambi II",
        "image6" => "contoh profil.jpg",
        "name6" => "M. Pakpahan/br. Sinaga",
        "jabatan6" => "Kord. Sektor (Kosambi III)",
        "telp6" => "081213141516",
        "sektor6" => "Sektor Kosambi III",
        "image7" => "contoh profil.jpg",
        "name7" => "C. Purba/br. Hutasoit",
        "jabatan7" => "Kord. Sektor (Kosambi III)",
        "telp7" => "081213141516",
        "sektor7" => "Sektor Kosambi III",
        "image8" => "contoh profil.jpg",
        "name8" => "I. Situmeang/br. Simbolon",
        "jabatan8" => "Kord. Sektor (M. Prakarsa I)",
        "telp8" => "081213141516",
        "sektor8" => "Sektor M. Prakarsa I",
        "image9" => "contoh profil.jpg",
        "name9" => "M. H. Siagian/br. Malau",
        "jabatan9" => "Kord. Sektor (M. Prakarsa II)",
        "telp9" => "081213141516",
        "sektor9" => "Sektor M. Prakarsa II",
        "image10" => "contoh profil.jpg",
        "name10" => "M. Simanungkalit/br. Samosir",
        "jabatan10" => "Kord. Sektor (M. Prakarsa III)",
        "telp10" => "081213141516",
        "sektor10" => "Sektor M. Prakarsa III",
        "image11" => "contoh profil.jpg",
        "name11" => "G. Gurning/br. Marbun",
        "jabatan11" => "Kord. Sektor (Terangsari I)",
        "telp11" => "081213141516",
        "sektor11" => "Sektor Terangsari I",
        "image12" => "contoh profil.jpg",
        "name12" => "D. Siahaan/br. Manurung",
        "jabatan12" => "Kord. Sektor (Terangsari II)",
        "telp12" => "081213141516",
        "sektor12" => "Sektor Terangsari II"
    ]);
});

Route::get('/pendidikan', function () {
    return view('pendidikan', [
        "active" => "diakonia",
        "title" => "Pendidikan",
        "image" => "contoh profil.jpg",
        "name" => "Ny. R. E. Sihombing br. Hasugian",
        "jabatan" => "Ketua Sie. Pendidikan",
        "telp" => "081213141516",
        "sektor" => "Sektor Kosambi",
        "image2" => "contoh profil.jpg",
        "name2" => "NN",
        "jabatan2" => "Sekretaris Sie. Pendidikan",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi I",
        "image3" => "contoh profil.jpg",
        "name3" => "NN",
        "jabatan3" => "Bendahara Sie. Pendidikan",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi I",
        "image4" => "contoh profil.jpg",
        "name4" => "NN",
        "jabatan4" => "Sie. Pendidikan",
        "telp4" => "0813 1155 4059",
        "sektor4" => "Sektor Kosambi II",
        "image5" => "contoh profil.jpg",
        "name5" => "NN",
        "jabatan5" => "Sie. Pendidikan",
        "telp5" => "081213141516",
        "sektor5" => "Sektor Kosambi II",
        "image6" => "contoh profil.jpg",
        "name6" => "NN",
        "jabatan6" => "Sie. Pendidikan",
        "telp6" => "081213141516",
        "sektor6" => "Sektor Kosambi III",
        "image7" => "contoh profil.jpg",
        "name7" => "NN",
        "jabatan7" => "Sie. Pendidikan",
        "telp7" => "081213141516",
        "sektor7" => "Sektor Kosambi III",
        "image8" => "contoh profil.jpg",
        "name8" => "NN",
        "jabatan8" => "Sie. Pendidikan",
        "telp8" => "081213141516",
        "sektor8" => "Sektor M. Prakarsa I",
        "image9" => "contoh profil.jpg",
        "name9" => "NN",
        "jabatan9" => "Sie. Pendidikan",
        "telp9" => "081213141516",
        "sektor9" => "Sektor M. Prakarsa II"
    ]);
});

Route::get('/kesehatan', function () {
    return view('Kesehatan', [
        "active" => "diakonia",
        "title" => "kesehatan",
        "image" => "contoh profil.jpg",
        "name" => "Ny. Situmorang br Harianja",
        "jabatan" => "Ketua Sie. Kesehatan",
        "telp" => "081213141516",
        "sektor" => "Sektor Kosambi",
        "image2" => "contoh profil.jpg",
        "name2" => "NN",
        "jabatan2" => "Sie. Kesehatan",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi I",
        "image3" => "contoh profil.jpg",
        "name3" => "NN",
        "jabatan3" => "Sie. Kesehatan",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi I",
        "image4" => "contoh profil.jpg",
        "name4" => "NN",
        "jabatan4" => "Sie. Kesehatan",
        "telp4" => "0813 1155 4059",
        "sektor4" => "Sektor Kosambi II",
        "image5" => "contoh profil.jpg",
        "name5" => "NN",
        "jabatan5" => "Sie. Kesehatan",
        "telp5" => "081213141516",
        "sektor5" => "Sektor Kosambi II",
        "image6" => "contoh profil.jpg",
        "name6" => "NN",
        "jabatan6" => "Sie. Kesehatan",
        "telp6" => "081213141516",
        "sektor6" => "Sektor Kosambi III",
        "image7" => "contoh profil.jpg",
        "name7" => "NN",
        "jabatan7" => "Sie. Kesehatan",
        "telp7" => "081213141516",
        "sektor7" => "Sektor Kosambi III"
    ]);
});

Route::get('/kemasyarakatan', function () {
    return view('kemasyarakatan', [
        "active" => "diakonia",
        "title" => "Kemasyarakatan",
        "image" => "contoh profil.jpg",
        "name" => "R. Manik/ br Panjaitan",
        "jabatan" => "Ketua Sie. Kemasyarakatan",
        "telp" => "081213141516",
        "sektor" => "Sektor Kosambi",
        "image2" => "contoh profil.jpg",
        "name2" => "NN",
        "jabatan2" => "Sie. Kemasyrakatan",
        "telp2" => "081213141516",
        "sektor2" => "Sektor Kosambi I",
        "image3" => "contoh profil.jpg",
        "name3" => "NN",
        "jabatan3" => "Sie. Kemasyrakatan",
        "telp3" => "081213141516",
        "sektor3" => "Sektor Kosambi I",
        "image4" => "contoh profil.jpg",
        "name4" => "NN",
        "jabatan4" => "Sie. Kemasyrakatan",
        "telp4" => "0813 1155 4059",
        "sektor4" => "Sektor Kosambi II",
        "image5" => "contoh profil.jpg",
        "name5" => "NN",
        "jabatan5" => "Sie. Kemasyrakatan",
        "telp5" => "081213141516",
        "sektor5" => "Sektor Kosambi II",
        "image6" => "contoh profil.jpg",
        "name6" => "NN",
        "jabatan6" => "Sie. Kemasyrakatan",
        "telp6" => "081213141516",
        "sektor6" => "Sektor Kosambi III",
        "image7" => "contoh profil.jpg",
        "name7" => "NN",
        "jabatan7" => "Sie. Kemasyrakatan",
        "telp7" => "081213141516",
        "sektor7" => "Sektor Kosambi III"
    ]);
});


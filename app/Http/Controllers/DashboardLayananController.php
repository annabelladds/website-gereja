<?php

namespace App\Http\Controllers;
use App\Models\Layanan;
use Illuminate\Support\Facades\Storage;

class DashboardLayananController extends Controller
{

    public function index()
    {
        $layanans = Layanan::all();
        return view('dashboard.layanan.index', compact('layanans'));
    }

    public function destroy(Layanan $layanan)
    {
        if($layanan->file) {
            Storage::delete($layanan->file);
        }
        Layanan::destroy($layanan->id);
        return redirect('/dashboard/layanan')->with('success', 'Data jemaat baru berhasil dihapus!');
    }
    
}

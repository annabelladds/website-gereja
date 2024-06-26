<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DashboardLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('dashboard.layanan.index', [
    //         'layanans' => Layanan::where('user_id', auth()->user()->id)->get()
    //     ]);
    //     return view('dashboard.layanan.index', [
    //         'layanans' => Layanan::all()
    //     ]);
    // }

    public function index()
    {
        $layanans = Layanan::all();
        return view('dashboard.layanan.index', compact('layanans'));
    }

    // public function download($filename)
    // {
    //     $file = Storage::disk('public')->path('files/' . $filename);

    //     if (!Storage::disk('public')->exists('files/' . $filename)) {
    //         abort(404);
    //     }

    //     $headers = [
    //         'Content-Type' => $this->getMimeType($filename),
    //         'Content-Disposition' => 'attachment; filename="' . $filename . '"',
    //     ];

    //     return response()->file($file, $headers);
    // }

    // private function getMimeType($filename)
    // {
    //     $extension = pathinfo($filename, PATHINFO_EXTENSION);

    //     switch (strtolower($extension)) {
    //         case 'pdf':
    //             return 'application/pdf';
    //         case 'png':
    //             return 'image/png';
    //         case 'jpg':
    //         case 'jpeg':
    //             return 'image/jpeg';
    //         // tambahkan jenis file lain sesuai kebutuhan
    //         default:
    //             return 'application/octet-stream';
    //     }
    // }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanan $layanan)
    {
        // if($layanan->file) {
        //     Storage::delete($layanan->file);
        // }
        
        // Layanan::destroy($layanan->id);

        // if ($layanan->file) {
        //     // Hapus file dari penyimpanan publik
        //     Storage::delete('public/files/' . $layanan->file);
        // }
        
        // // Hapus record dari database
        // $layanan->delete();

        // return redirect('/dashboard/layanan')->with('success', 'File berhasil dihapus!');

        if($layanan->file) {
            Storage::delete($layanan->file);
        }
        
        Layanan::destroy($layanan->id);

        return redirect('/dashboard/layanan')->with('success', 'Warta berhasil dihapus!');
    }
    
}

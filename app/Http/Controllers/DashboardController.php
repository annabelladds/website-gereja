<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');

        // Log::info('Accessing dashboard');
        // return view('dashboard.index');
    }
}

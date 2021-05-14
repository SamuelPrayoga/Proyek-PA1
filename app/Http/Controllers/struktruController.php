<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\struktur;


class struktruController extends Controller
{
    public function index()
    {
        $struktur = struktur::all();
        return view('team', compact('struktur'));
    }
}
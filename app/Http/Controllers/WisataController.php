<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Models\DataWisata;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function index()
    {
        $wisata = DB::table('datawisata')->paginate(3);
        return view('blog', ['wisata' => $wisata]);
    }

    public function home()
    {
        return view('index');
    }
}
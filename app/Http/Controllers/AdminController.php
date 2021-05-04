<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function wisata()
    {
        $wisata = DB::table('datawisata')->get();
        return view('Admin/infowisata', ['wisata' => $wisata]);
    }

    public function tambahwisata()
    {
        return view('Admin/tambahwisata');
    }

    public function tambahwis(Request $request)
    {
        $wisatatambah = new Wisata();
        $wisatatambah->NamaWisata = $request->NamaWisata;
        $wisatatambah->InfoWisata = $request->InfoWisata;

        if ($request->hasFile('GambarWisata')) {
            $file = $request->file('GambarWisata')->getClientOriginalName();
            $request->file('GambarWisata')->move('fileblog', $file);
            $wisatatambah->GambarWisata = $file;
        }
        $wisatatambah->save();
        return redirect('infowisata');
    }
}
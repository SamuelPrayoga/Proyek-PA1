<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('indexAdmin');
    }
    public function wisata()
    {
        $wisata = DB::table('datawisata')->get();
        return view('Admin.infowisata', ['datawisata' => $wisata]);
    }

    public function tambahwisata()
    {
        return view('Admin.tambahwisata');
    }

    public function tambahwis(Request $request)
    {
        $wisata = new Wisata();
        $wisata->NamaWisata = $request->NamaWisata;
        $wisata->InfoWisata = $request->InfoWisata;

        if ($request->hasFile('GambarWisata')) {
            $file = $request->file('GambarWisata')->getClientOriginalName();
            $request->file('GambarWisata')->move('blog', $file);
            $wisata->GambarWisata = $file;
        }
        $wisata->save();
        return redirect('infowisata');
    }
}
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
            $request->file('GambarWisata')->move('img/blog', $file);
            $wisatatambah->GambarWisata = $file;
        }
        $wisatatambah->save();
        return redirect('infowisata');
    }


    public function edit($wisataID)
    {
        $editwisata = Wisata::find($wisataID);

        return view('Admin.editwisata', compact('editwisata'));
    }
    public function update(Request $request, $wisataID)
    {
        $update = Wisata::find($wisataID);
        $file = $update->GambarWisata;

        if ($request->hasFile('GambarWisata')) {
            $file = $request->file('GambarWisata')->getClientOriginalName();
            $request->file('GambarWisata')->move('gambarwisata', $file);
            $update->GambarWisata = $file;
        }

        $update->NamaWisata = $request->NamaWisata;
        $update->InfoWisata = $request->InfoWisata;
        $update->GambarWisata = $file;
        $update->save();

        return redirect('infowisata');
    }

    public function delete($wisataID)
    {
        $deletewisata = Wisata::find($wisataID);
        if ($deletewisata->delete()) {
            return redirect()->back();
        }
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Komentardansaran;
use App\Models\Wisata;
use App\Models\organisasi;
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
            $request->file('GambarWisata')->move('img/blog', $file);
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

    /*daftarKomentar*/
    public function komentar()
    {
        $komentardansaran = DB::table('komentardansaran')->get();
        return view('Admin/datakomentar', ['komentardansaran' => $komentardansaran]);
    }

    public function tambahkomentar()
    {
        return view('Admin/tambahkomentar');
    }

    public function tambahkomentars(Request $request)
    {
        $tambahorganisasis = new Komentardansaran();
        $tambahorganisasis->Username = $request->Username;
        $tambahorganisasis->Email = $request->Email;
        $tambahorganisasis->UserAddress = $request->UserAddress;
        $tambahorganisasis->SubjekKomentar = $request->SubjekKomentar;
        $tambahorganisasis->IsiKomentar = $request->IsiKomentar;
        $tambahorganisasis->TanggalKomentar = $request->TanggalKomentar;

        if ($request->hasFile('Gambar')) {
            $file = $request->file('Gambar')->getClientOriginalName();
            $request->file('Gambar')->move('img/Testimonial', $file);
            $tambahorganisasis->Gambar = $file;
        }
        $tambahorganisasis->save();
        return redirect('datakomentar');
    }

    public function ubah($KomentarID)
    {
        $editkomentar = Komentardansaran::find($KomentarID);

        return view('Admin.editkomentar', compact('editkomentar'));
    }

    public function updatekomentar(Request $request, $KomentarID)
    {
        $update = Komentardansaran::find($KomentarID);
        $file = $update->Gambar;

        if ($request->hasFile('Gambar')) {
            $file = $request->file('Gambar')->getClientOriginalName();
            $request->file('Gambar')->move('img/Testimonial', $file);
            $update->Gambar = $file;
        }

        $update->Username = $request->Username;
        $update->Email = $request->Email;
        $update->UserAddress = $request->UserAddress;
        $update->SubjekKomentar = $request->SubjekKomentar;
        $update->IsiKomentar = $request->IsiKomentar;
        $update->Gambar = $file;
        $update->save();

        return redirect('datakomentar');
    }

    public function hapus($KomentarID)
    {
        $hapuskomentar = Komentardansaran::find($KomentarID);
        if ($hapuskomentar->delete()) {
            return redirect()->back();
        }
    }


    /*strukturorganisasi*/
    public function organisasi()
    {
        $organisasi = DB::table('strukturorganisasi')->get();
        return view('Admin/dataorganisasi', ['strukturorganisasi' => $organisasi]);
    }

    public function tambahorganisasi()
    {
        return view('Admin/tambahorganisasi');
    }

    public function tambahorganisasis(Request $request)
    {
        $tambahorganisasis = new organisasi();
        $tambahorganisasis->nama = $request->nama;
        $tambahorganisasis->jabatan = $request->jabatan;
        $tambahorganisasis->status = $request->status;
        $tambahorganisasis->alamat = $request->alamat;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('img/organisasi', $file);
            $tambahorganisasis->gambar = $file;
        }
        $tambahorganisasis->save();
        return redirect('dataorganisasi');
    }

    public function edits($organisasiID)
    {
        $editorganisasi = organisasi::find($organisasiID);

        return view('Admin.editorganisasi', compact('editorganisasi'));
    }

    public function updateorganisasi(Request $request, $organisasiID)
    {
        $update = organisasi::find($organisasiID);
        $file = $update->gambar;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('img/organisasi', $file);
            $update->gambar = $file;
        }

        $update->nama = $request->nama;
        $update->jabatan = $request->jabatan;
        $update->status = $request->status;
        $update->alamat = $request->alamat;
        $update->gambar = $file;
        $update->save();

        return redirect('dataorganisasi');
    }

    public function hapusorganisasi($organisasiID)
    {
        $hapusorganisasi = organisasi::find($organisasiID);
        if ($hapusorganisasi->delete()) {
            return redirect()->back();
        }
    }
}
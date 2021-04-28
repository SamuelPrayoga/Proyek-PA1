<?php

namespace App\Http\Controllers;

use App\Models\Komentardansaran;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $testimonials = new Komentardansaran();
        $testimonials->Username = $request->Username;
        $testimonials->Email = $request->Email;
        $testimonials->UserAddress = $request->UserAddress;
        $testimonials->SubjekKomentar = $request->SubjekKomentar;
        $testimonials->IsiKomentar = $request->IsiKomentar;
        $testimonials->TanggalKomentar = now();


        if ($request->hasFile('Gambar')) {
            $file = $request->file('Gambar')->getClientOriginalName();
            $request->file('Gambar')->move('img/Testimonial', $file);
            $testimonials->Gambar = $file;
        }
        $testimonials->save();
        return redirect('/testimonials');
    }
}
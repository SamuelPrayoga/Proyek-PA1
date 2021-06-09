<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Komentardansaran;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = DB::table('komentardansaran')->orderBy('TanggalKomentar', 'DESC')->paginate(6);
        return view('testimonials', ['testimonials' => $testimonials]);
    }
}
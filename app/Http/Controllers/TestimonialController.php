<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Komentardansaran;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Komentardansaran::all();
        return view('testimonials', compact('testimonials'));
    }
}
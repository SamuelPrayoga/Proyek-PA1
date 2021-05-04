<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/testimonials', [TestimonialController::class, 'index']);
Route::get('/blog', [WisataController::class, 'index']);
Route::post('/testimonials/store', [ContactController::class, 'store'])->name('testimonials.store');
Route::get('/infowisata', [AdminController::class, 'Wisata']);
Route::get('/tambahwisata', [AdminController::class, 'tambahwisata']);
Route::post('/tambahwisatatambah', [AdminController::class, 'tambahwis'])->name('blog.tambah');
Route::get('/infowisata/editwisata/{wisataID}', [AdminController::class, 'edit']);
Route::post('/updateWisata/{wisataID}', [AdminController::class, 'update'])->name('infowisata.update');
Route::get('infowisata/delete/{wisataID}', [AdminController::class, 'delete'])->name('infowisata.delete');

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/team', function () {
    return view('team');
});


Route::get('/pricing', function () {
    return view('pricing');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/indexAdmin', function () {
    return view('Admin.indexAdmin');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/data-visualization', function () {
    return view('data-visualization');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/Admin.indexAdmin', function () {
    return view('Admin.indexAdmin');
});
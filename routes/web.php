<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\struktruController;

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

Route::get('/', [WisataController::class, 'home']);
Route::get('/testimonials', [TestimonialController::class, 'index']);
Route::get('/blog', [WisataController::class, 'index']);
Route::post('/blog', [WisataController::class, 'pencarian']);
Route::post('/testimonials/store', [ContactController::class, 'store'])->name('testimonials.store');

Route::get('/infowisata', [AdminController::class, 'Wisata']);
Route::get('/tambahwisata', [AdminController::class, 'tambahwisata']);
Route::post('/tambahwisatatambah', [AdminController::class, 'tambahwis'])->name('blog.tambah');
Route::get('/infowisata/editwisata/{wisataID}', [AdminController::class, 'edit']);
Route::post('/updateWisata/{wisataID}', [AdminController::class, 'update'])->name('infowisata.update');
Route::get('infowisata/delete/{wisataID}', [AdminController::class, 'delete'])->name('infowisata.delete');

Route::get('/datakomentar', [AdminController::class, 'komentar']);
Route::get('/tambahkomentar', [AdminController::class, 'tambahkomentar']);
Route::post('/tambahkomentar', [AdminController::class, 'tambahkomentars'])->name('komentar.tambah');
Route::get('/editkomentar/{KomentarID}', [AdminController::class, 'ubah']);
Route::post('/updatekomentar/{KomentarID}', [AdminController::class, 'updatekomentar'])->name('datakomentar.updatekomentar');
Route::get('/hapuskomentar/{KomentarID}', [AdminController::class, 'hapus'])->name('datakomentar.hapus');

Route::get('/dataorganisasi', [AdminController::class, 'organisasi']);
Route::get('/tambahorganisasi', [AdminController::class, 'tambahorganisasi']);
Route::post('/tambahorganisasi', [AdminController::class, 'tambahorganisasis'])->name('organisasi.tambah');
Route::get('/editorganisasi/{organisasiID}', [AdminController::class, 'edits']);
Route::post('/updateorganisasi/{organisasiID}', [AdminController::class, 'updateorganisasi'])->name('dataorganisasi.updateorganisasi');
Route::get('/hapusorganisasi/{organisasiID}', [AdminController::class, 'hapusorganisasi'])->name('dataorganisasi.hapusorganisasi');
Route::get('/strukturorganisasi', [struktruController::class, 'index']);

Route::get('/sign-in', [AdminController::class, 'login']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/visidanmisi', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/pricing', function () {
    return view('pricing');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});
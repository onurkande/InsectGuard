<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('site.index');
});

Route::get('/iletisim', function () {
    return view('site.contact');
});

Route::get('/hakkimizda', function () {
    return view('site.about');
});

Route::get('/urunler', function () {
    return view('site.products');
});

Route::get('/urun-detay', function () {
    return view('site.product-details');
});

Route::get('/videos', function () {
    return view('site.videos');
});

require __DIR__.'/admin.php';
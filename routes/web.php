<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\VideoController;
use App\Http\Controllers\Site\ContactController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/iletisim', [ContactController::class, 'index'])->name('contact');

Route::get('/hakkimizda', [AboutController::class, 'index'])->name('about');

Route::get('/urunler', [ProductController::class, 'index'])->name('products');

Route::get('/urun-detay/{slug}', [ProductController::class, 'show'])->name('product-detail');

Route::get('/videos', [VideoController::class, 'index'])->name('videos');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

require __DIR__.'/admin.php';
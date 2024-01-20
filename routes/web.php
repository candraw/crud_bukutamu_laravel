<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

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

#Route untuk Welcome
Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

#Route untuk About / MASIH BERMASALAH
Route::get('/pages', function () {
    return view('pages.about');
})->name('about');

Route::resource('/tamu', TamuController::class);
// Route::get('/cetak-tamu','TamuController@cetakTamu')->name('cetak-tamu');
Route::get('/cetak-tamu', [TamuController::class, 'cetakTamu'])->name('cetak-tamu');
Route::get('/about', [TamuController::class, 'about'])->name('about');


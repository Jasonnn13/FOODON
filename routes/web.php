<?php

use App\Http\Controllers\DonaturController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenerimaController;

require __DIR__.'/auth.php'; // Ensure this line is present

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
    return view('preload');
});

Route::get('/Home', function () {
    return view('pilihan-masuk');
});

Route::get('/Donatur', function () {
    return view('Donatur.data-donatur');
});

Route::get('/Penerima', function () {
    return view('Penerima.data-penerima');
});

Route::get('/Home-Penerima', function () {
    return view('Penerima.home-pengguna');
});
Route::get('/Home-Donatur', function () {
    return view('Donatur.home-donatur');
});

Route::get('/List', function () {
    return view('Donatur.product-list-donatur');
});

Route::get('/Signin', function () {
    return view('sign-in');
});

Route::get('/Signup', function () {
    return view('sign-up');
});

Route::resource('donatur', DonaturController::class);
Route::resource('penerima', PenerimaController::class);


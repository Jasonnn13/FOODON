<?php

use App\Http\Controllers\DonaturController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\DonationItemController;
use App\Http\Controllers\UserController;

Route::post('/check-user-type', [UserController::class, 'checkUserType'])->name('check.user.type');




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

Route::get('/product-list-donatur', function () {
    return view('donatur.product-list-donatur');
})->name('product-list-donatur');

Route::get('/Signin', function () {
    return view('sign-in');
});

Route::get('/Signup', function () {
    return view('sign-up');
});

Route::resource('donatur', DonaturController::class);
Route::resource('penerima', PenerimaController::class);

Route::get('/Home-Penerima', [DonationItemController::class, 'index']);
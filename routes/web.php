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
    return view('welcome');
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

<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-up', function () {
    return 'Halaman Sign up';
});

Route::get('/login', function () {
    return 'Halaman Login';
});

Route::get('/pengaduan', function () {
    return view('pengaduan');
});
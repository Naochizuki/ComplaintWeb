<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [AuthController::class, 'show_welcome_page'])
    ->name('welcome.page');
Route::post('/homepage', [AuthController::class, 'auth'])
    ->name('home.auth');
Route::get('/homepage', [HomeController::class, 'show_home_page'])
    ->name('home.page');
Route::get('/pengaduan', [ComplaintController::class, 'show_complaint_page'])
    ->name('complaint.page');
Route::post('/pengaduan', [ComplaintController::class, 'send_complaint'])
    ->name('complaint.send');
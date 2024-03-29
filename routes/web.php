<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamusController;


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
    return view('beranda');
});

Route::get('/kamus', function(){
    return view('kamus');
});

Route::get('/acara', function(){
    return view('acara');
});

Route::get('/tentangKami', function(){
    return view('tentangKami');
});

Route::get('/kamusHuruf', [KamusController::class, 'kamusHuruf'])->name('kamus.huruf');

Route::get('/kamus', [KamusController::class, 'kamus'])->name('kamus');




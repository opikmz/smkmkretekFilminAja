<?php

use App\Http\Controllers\genreC;
use App\Http\Controllers\studioC;
use App\Http\Controllers\frontendC;
use App\Http\Controllers\dashboardC;
use App\Http\Controllers\sutradaraC;
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
Route::get('/',[frontendC::class,'index'])->name('frontend');
Route::get('/admin',[dashboardC::class,'index'])->name('dashboard');

// Sutradara
Route::get('/sutradara',[sutradaraC::class,'index'])->name('sutradara');
Route::post('store_sutradara',[sutradaraC::class,'store'])->name('store_sutradara');
Route::get('/show_sutradara/{sutradara}',[sutradaraC::class,'show'])->name('show_sutradara');
Route::post('/update_sutradara/{sutradara}',[sutradaraC::class,'update'])->name('update_sutradara');
Route::get('/destroy_sutradara/{sutradara}',[sutradaraC::class,'destroy'])->name('destroy_sutradara');

// Genre
Route::get('/genre',[genreC::class,'index'])->name('genre');
Route::post('/store_genre',[genreC::class,'store'])->name('store_genre');
Route::get('/show_genre/{genre}',[genreC::class,'show'])->name('show_genre');
Route::post('/update_genre/{genre}',[genreC::class,'update'])->name('update_genre');
Route::get('/destroy_genre/{genre}',[genreC::class,'destroy'])->name('destroy_genre');

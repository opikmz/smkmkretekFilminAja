<?php

use App\Http\Controllers\genreC;
use App\Http\Controllers\loginC;
use App\Http\Controllers\movieC;
use App\Http\Controllers\pemeranC;
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
Route::get('/film',[frontendC::class,'film'])->name('film');

Route::get('/admin',[dashboardC::class,'index'])->name('dashboard');

Route::get('/register', [loginC::class, 'register'])->name('register');
Route::post('/store_register', [loginC::class, 'store_register'])->name('store_register');

Route::get('/login', [loginC::class, 'login'])->name('login');
Route::post('/act_login', [loginC::class, 'act_login'])->name('act_login');
Route::get('/logout', [loginC::class, 'logout'])->name('logout');

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

// Pemeran
Route::get('/pemeran',[pemeranC::class,'index'])->name('pemeran');
Route::post('/store_pemeran',[pemeranC::class,'store'])->name('store_pemeran');
Route::get('/show_pemeran/{pemeran}',[pemeranC::class,'show'])->name('show_pemeran');
Route::post('/update_pemeran/{pemeran}',[pemeranC::class,'update'])->name('update_pemeran');
Route::get('/destroy_pemeran/{pemeran}',[pemeranC::class,'destroy'])->name('destroy_pemeran');

// Movie
Route::get('/movie',[movieC::class,'index'])->name('movie');
Route::get('/create_movie',[movieC::class,'create'])->name('create_movie');
Route::get('/tambah_pemeran_movie/{id_pemeran}',[movieC::class,'tambah_pemeran_movie'])->name('tambah_pemeran_movie');
Route::post('/store_movie',[movieC::class,'store'])->name('store_movie');
Route::get('/show_movie/{movie}',[movieC::class,'show'])->name('show_movie');
Route::post('/update_movie/{movie}',[movieC::class,'update'])->name('update_movie');
Route::get('/destroy_movie/{movie}',[movieC::class,'destroy'])->name('destroy_movie');
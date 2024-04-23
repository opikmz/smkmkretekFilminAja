<?php

use App\Http\Controllers\frontendC;
use App\Http\Controllers\dashboardC;
use App\Http\Controllers\studioC;
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

// Studio
Route::get('/studio',[studioC::class,'index'])->name('studio');
Route::post('/store_studio',[studioC::class,'store'])->name('store_studio');
Route::get('/show_studio/{studio}',[studioC::class,'show'])->name('show_studio');
Route::post('/update_studio/{studio}',[studioC::class,'update'])->name('update_studio');
Route::get('/destroy_studio/{studio}',[studioC::class,'destroy'])->name('destroy_studio');

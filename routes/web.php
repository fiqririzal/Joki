<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/about',function(){ return view('pages.about');});
Route::get('/dosenn',[DosenController::class,'indexx']);
Route::get('/mahasiswaa',[MahasiswaController::class,'indexx']);

Route::get('/login', [AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class,'postlogin']);
Route::get('/logout', [AuthController::class,'logout']);
// Route::post('signup', 'AuthController@signup');
    Route::group([
        'middleware' => 'auth'
    ], function() {
        Route::get('/dashboard',function(){ return view('layouts.dashboard');});
    Route::get('/dosen',[DosenController::class,'index'])->name('dosen.index');
    Route::get('/dosen/input',[DosenController::class,'create'])->name('dosen.baru');
    Route::get('/dosen/{id}',[DosenController::class,'destroy'])->name('dosen.baru');
    Route::post('/dosen/simpan',[DosenController::class,'store'])->name('dosen.simpan');

    Route::get('/mahasiswa',[MahasiswaController::class,'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/input',[MahasiswaController::class,'create'])->name('mahasiswa.baru');
    Route::get('/mahasiswa/{id}',[MahasiswaController::class,'destroy'])->name('mahasiswa.baru');
    Route::post('/mahasiswa/simpan',[MahasiswaController::class,'store'])->name('mahasiswa.simpan');

    });



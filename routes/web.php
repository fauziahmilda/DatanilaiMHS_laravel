<?php

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MahasiswaController;
use GuzzleHttp\Middleware;

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
// menu utama setelah masuk. langsung liat profil
Route::get('/',  [MahasiswaController::class, 'index']);
Route::get('/main', [UserController::class, 'indexuser']);
// menu regist
Route::get('/regist', [UserController::class, 'regist']);
Route::post('/regist', [UserController::class, 'inputdatabaru']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/input', [UserController::class, 'input']);
//menu login
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'logininput']);
// menu input data nilai
Route::get('/input', [MahasiswaController::class, 'input']);
Route::get('/daftarmhs', [MahasiswaController::class, 'index'])->name(name: 'mhs');
Route::get('/cekinput', [MahasiswaController::class, 'cekinput']);
Route::post('/inputnilai', [MahasiswaController::class, 'inputnilai']);
// menu cek data lengkap
Route::get('/detailmhs/{id}', [MahasiswaController::class, 'detail']);

/*

Route::view('/nama_file', 'nama_file');

Route::view('/nama_file', 'nama_file',
    [
        'nama' => 'milda',
        'alamat' => 'x'
    ]);


*/
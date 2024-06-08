<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
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
})->name('loginView');

//Halaman Home
Route::get('/home', function () {
    return view('home');
})->name('home');

//Halaman Tambah
Route::get('/tambahmahasiswa', function () {
    return view('mahasiswa_tambah');
});

//Routing Autentikasi
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout/user', [AuthController::class, 'logout'])->name('logout');

//Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/create', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/edit/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}/destroy', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
Route::get('/mahasiswa/print/data', [MahasiswaController::class, 'print'])->name('mahasiswa.print');
Route::get('/mahasiswa/search/data', [MahasiswaController::class, 'search'])->name('mahasiswa.search');

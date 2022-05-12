<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerjalananController;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\HasilController;

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

// Asalnya saya menggunakan ->middleware('auth/guest'), cuman ketika pake middle setiap akan menginputkan data dan mau logout harus hapus cookies 


Route::get('/', [AuthController::class, 'indexLogin']);
Route::get('/register', [AuthController::class, 'indexRegister']);
Route::get('/dashboard', [PerjalananController::class, 'indexDashboard']);
Route::post('/create', [AuthController::class, 'RegistUser']);
Route::any('/loginUser', [AuthController::class, 'authenticate']);
Route::get('/catatan', [CatatanController::class, 'catatan']);
Route::get('/hasil', [HasilController::class, 'hasil']);
Route::post('/simpanhasil', [PerjalananController::class, 'simpanHasil']);
Route::get('/delete/{id}', [PerjalananController::class, 'hapusCatatan'])->name('hapusCatatan');
Route::get('/ubah/{id}', [PerjalananController::class, 'ubahCatatan'])->name('ubahCatatan');
Route::post('/update', [PerjalananController::class, 'updateCatatan'])->name('updateCatatan');
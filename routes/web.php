<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

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

//MainLayout
Route::get('/', [adminController::class, 'index'])->name('belibarang');
//Penambahan Data Tabel Beli
Route::get('/tambahpem', [adminController::class, 'tambah']);
Route::post('/insertdata', [adminController::class, 'insertdata']);
//Edit Data Tabel Beli
Route::get('/edit/{id}', [adminController::class, 'edit'])->name('edit');
Route::put('/updatedata/{id}', [adminController::class, 'updatedata'])->name('updatedata');

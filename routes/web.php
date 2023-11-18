<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\siswa;
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
//admin
Route::get('/', function () {
    return view('admin.layoutadmin');
 });
Route::get('datasiswa', [admin::class,'datasiswa']);
Route::get('kelas', [admin::class,'kelas']);
Route::post('kelas',[admin::class,'tambah']);

 //siswa    
Route::get('halutama', [siswa::class,'tampilantable']);
Route::get('mahfud', [siswa::class, 'laporan']);
Route::get('tambah', [siswa::class,'tambahh']);
Route::post('tambah', [siswa::class,'tambah']);
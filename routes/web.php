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
 //dashboard
 Route::get('utama', [admin::class,'tampilanutm']);
 Route::get('datasiswa', [admin::class,'datasiswa']);


 Route::get('transaksi',[admin::class,'transaksi']);
 //CRUD spp
 Route::post('tambahSpp', [admin::class,'tambahSpp']);

 //CRUD Kelas
 Route::post('tambahKelas', [admin::class,'tambahKelas']);
 
 //CRUD PETUGAS
 Route::post('tambahPetugas', [admin::class,'tambahPetugas']);

 //Tampil
 Route::get('spp',[admin::class,'spp']);
 Route::get('kelas',[admin::class,'kelas']);
 Route::get('petugas',[admin::class,'petugas']);
 Route::get('history',[admin::class,'history']);
 //siswa    
 Route::get('login',[siswa::class,'login']);
 Route::get('halutama', [siswa::class,'tampilantable']);
 Route::get('mahfud', [siswa::class, 'laporan']);
 
 
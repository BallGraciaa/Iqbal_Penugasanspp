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
 Route::get('admindash', [admin::class,'index']);
 
 
 //CRUD spp
 Route::post('tambahSpp', [admin::class,'tambahSpp']);
 

 //CRUD buku
 Route::post('tambahbuku', [admin::class,'tambahbuku']);
 Route::get('hapusbuku/{id}',[admin::class,'hapusbuku']);
 
 
 //CRUD PETUGAS
 Route::post('tambahPetugas', [admin::class,'tambahPetugas']);

 //Tampil
 Route::get('spp',[admin::class,'spp']);
 Route::get('buku',[admin::class,'bukuu']);
 Route::get('petugas',[admin::class,'regis']);
 Route::get('history',[admin::class,'history']);
 //siswa    
 Route::get('login',[siswa::class,'login']);
 Route::get('halutama', [siswa::class,'tampilantable']);
 Route::get('mahfud', [siswa::class, 'laporan']);
 
 
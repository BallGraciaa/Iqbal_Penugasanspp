<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\siswa;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function index(request $request){
        return view("");
    }
    

    public function datasiswa(){
        $lapor = new siswa;
        return view('admin.datasiswa',['data'=>$lapor->all()]);
    }  
    
    public function kelas(){
        $lapor = new kelas      ;
        return view('admin.kelas',['data'=>$lapor->all()]);
    }   

    public function tambah(request $request){
        $i = new kelas();
        $i ->create([
            'id_kelas'=> $request->input('id_kelas'),
            'nama_kelas'=> $request->input('nama_kelas'),
            'kompetensi_keahlian'=> $request->input('kompetensi_keahlian'),
        ]);
        return back()->with('pesan','data kelas berhasil dikirim');
    }
}

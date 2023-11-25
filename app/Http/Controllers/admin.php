<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\pembayaran;
use App\Models\petugas;
use App\Models\siswa;
use App\Models\spp;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function index(request $request){
        return view("");
    }
    
    public function tampilanutm()
    {
        $m = new pembayaran();
        return view('admin.dashboard', ['wg' => $m->all()]);
    }
    
    public function petugas(){
        $ol = new petugas;
        return view('admin.petugas',['ptg'=>$ol->all()]);
    }  
    

    public function datasiswa(){
        $lapor = new siswa;
        return view('admin.datasiswa',['data'=>$lapor->all()]);
    }  
    
    public function kelas(){
        $lapor = new kelas ;
        return view('admin.kelas',['data'=>$lapor->all()]);
    }   
    //logika kelas
    public function tambahKelas(Request $request){
        $i = new kelas();
        $cek = $request->validate([
            'nama_kelas'=> 'required|max:10',
            'kompetensi_keahlian'=> 'required|max:35',
        ]);
        $i->create($request->all());
        return redirect('kelas')->with('pesan','data kelas berhasil dikirim');
    }

    public function spp(){
        $spp = new spp ;
        return view('admin.spp',['dataspp'=>$spp->all()]);
    }   
    public function tambahSpp(Request $request){
        $e = new spp();
        $cek = $request->validate([
            'tahun'=> 'required|max:4',
            'nominal'=> 'required|max:12',
        ]);
        $e->create($request->all());
        return redirect('spp')->with('pesan','data kelas berhasil dikirim');
    }

    public function tambahPetugas(Request $request){
        $o = new petugas();
        $cek = $request->validate([
            'username'=> 'required|max:30',
            'password'=> 'required|max:35',
            'nama_petugas'=> 'required|max:50',
        ]);    
        $o->create($request->all());
        return redirect('petugas')->with('pesan','data kelas berhasil dikirim');
    }    

    public function history()
    {
        $m = new pembayaran();
        return view('admin.transaksi', ['wg' => $m->all()]);
    }
  
}

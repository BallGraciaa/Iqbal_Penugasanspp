<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategori;
use App\Models\kelas;
use App\Models\pembayaran;
use App\Models\petugas;
use App\Models\siswa;
use App\Models\spp;
use App\Models\ulasan_buku;
use Illuminate\Http\Request;

class admin extends Controller
{  
    public function bukuu(){
        $lapor = new buku ;
        return view('admin.buku',['data'=>$lapor->all()]);
    }   
    //logika kelas
    public function tambahbuku(Request $data){
        $i = new buku();
        $cek = $data->validate([
            'Judul'=> 'required|max:100',
            'Penulis'=> 'required|max:50',
            'Penerbit'=> 'required|max:100',
            'TahunTerbit'=> 'required|max:4',
            'stok'=> 'required|max:200',
        ]);
        $i->create($data->all());
        return redirect('buku')->with('pesan','data kelas berhasil dikirim');
    }

    public function hapusbuku($id){
        $el = buku::select('*')->where('BukuID',$id)->delete(); 
        return back();
    }
     public function editbuku(Request $request, $data){
            $iq = buku::where('BukuID',$data)->update([
                'Judul' => $request->Judul,
                'Penulis' => $request->Penulis,
                'Penerbit' => $request->Penerbit,
                'TahunTerbit' => $request->TahunTerbit,
                'stok' => $request->stok
            ]);
            return redirect('buku');
        }
        public function login(){
            return view('admin.signin');
        }
        public function regis(){
            $lapor = new petugas ;
            return view('admin.petugas',['ptg'=>$lapor->all()]);
        }   
        public function tambahadmin(Request $ptgs){
            $i = new petugas();
            $cek = $ptgs->validate([
                'Username'=> 'required|max:100',
                'Password'=> 'required|max:50',
                'email'=> 'required|max:100',
                'namaLengkap'=> 'required|max:100',
                'level'=>'required|max:20'
            ]);
            $i->create($ptgs->all());
            return redirect('registrasi')->with('pesan','data kelas berhasil dikirim');
        }
       
    }

  



<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use Illuminate\Http\Request;

class siswa extends Controller
{
    public function laporan()
{
    $m = new pembayaran();
    return view('siswa.historysiswa', ['wg' => $m->all()]);
}

public function tambahh(request $request){
    return view("tambah");
}


public function tambah(request $request){
    $i = new siswa();
    $i ->create([
        'nisn'=> $request->input('nisn'),
        'nis'=> $request->input('nis'),
        'nama'=> $request->input('nama'),
        'id_kelas'=> $request->input('id_kelas'),
        'alamat'=> $request->input('alamat'),
        'no_telp'=> $request->input('no_telp'),
        'id_spp'=> $request->input('id_spp')
    ]);
    return back()->with('pesan','laporan berhasil dikirim');
}
}

<?php

namespace App\Http\Controllers;

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
}

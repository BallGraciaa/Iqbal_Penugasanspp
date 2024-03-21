<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    //set tabel
    protected $table = 'peminjaman';
    //set primary key
    protected $primaryKey = 'peminjamanID';
    public $incrementing = true;
    //colom diisi secara massal
    protected $guarded=['peminjamanID'];
}

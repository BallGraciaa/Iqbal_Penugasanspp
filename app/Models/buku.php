<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    //set tabel
    protected $table = 'buku';
    //set primary key
    protected $primaryKey = 'BukuID';
    public $incrementing = true;
    //string yang diisi secara massal
    protected $guarded=['BukuID'];
}

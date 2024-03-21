<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    //set tabel
    protected $table='kategori';
    //set primary key
    protected $primaryKey = 'KategoriID';
    public $incrementing = true;
    //colom diisi secara massal
    protected $guarded=['KategoriID'];
}

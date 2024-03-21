<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_relasi extends Model
{
    use HasFactory;
    //set tabel
    protected $table='kategori_relasi';
    //set primary key
    protected $primaryKey = 'KategoriBukuID';
    public $incrementing = true;
    //colom yang diisi secara masal
    protected $guarded=['KategoriBukuID']; 
}

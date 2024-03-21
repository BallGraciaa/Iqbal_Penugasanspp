<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksi extends Model
{
    use HasFactory;
    //set tabel
    protected $table = 'koleksi';
    //set primary key
    protected $primaryKey = 'KoleksiID';
    public $incrementing = true;
    protected $guarded=['KoleksiID'];
}

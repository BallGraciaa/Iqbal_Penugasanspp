<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;
    //set table
    protected $table = 'petugas';
    protected $primaryKey = 'petugasID';
    public $incrementing = true;
    protected $guarded=['petugasID'];
}

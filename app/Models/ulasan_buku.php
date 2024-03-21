<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan_buku extends Model
{
    use HasFactory;
    protected $table = 'ulasan_buku';
    protected $primaryKey = 'UlasanID';
    public $incrementing = true;
    protected $guarded = ['UlasanID'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKK extends Model
{
    use HasFactory;

    protected $table = 'klasifikasi_kualifikasi';


    protected $guarded = ['id'];
}

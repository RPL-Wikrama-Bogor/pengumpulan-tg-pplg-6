<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    //default tablenya akn medicines

    // protected $table = 'medicine';  jika penamaan table tidak pakai s

    protected $fillable = [ //handling agar kolom dapat diberi value
        'type',
        'name',
        'price',
        'stock',
    ];
    
}

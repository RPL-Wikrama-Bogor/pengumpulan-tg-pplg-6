<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'medicines',
        'name_customer',
        'total_price',
    ];

    protected $casts = [ //memberikan penekanan bahwa kolom medicines bertipe data array
        'medicines' => 'array',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    //kolom foreign key harus gabungan dari tabel yg 
    //memiliki primary key tanpa huruf s digabungkan dengan 
    //_ lalu nama kolom primary key
}
  
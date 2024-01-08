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

    protected $casts = [ //memberikan penekanan bahwa kolom medicines bertipe data array / tipe data akan menjadi erray
        'medicines' => 'array'
    ];

    public function user(){
        //menghubungkan ke primary key nya
        //dalam kurung merupakan nama model tempat penyimpanan dari OK nya 51 FK yang ada di model ini
        return $this->belongsTo(User::class);
        //belongsTo mempunyai foreign key
        //kolom foreign key harus gabungan dari table yang memiliki primary key tanpa huruf s digabungkan dengan _ lalu nama kolom primary key
    }

}

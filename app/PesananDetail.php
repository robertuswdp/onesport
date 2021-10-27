<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function pesanan(){
        return $this->belongsTo(Pesanan::class,'pesanan_id', 'id');
    }

    public function Product(){
        return $this->belongsTo(Product::class,'product_id', 'id');
    }
}

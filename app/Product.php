<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Liga(){
        return $this->belongsTo(Liga::class,'liga_id', 'id');
    }

    public function pesanan_details(){
        return $this->hasMany(PesananDetail::class,'product_id', 'id');
    }
}

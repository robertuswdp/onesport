<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class liga extends Model
{
    public function Products(){
        return $this->hasMany(Product::class,'liga_id', 'id');
    }
}

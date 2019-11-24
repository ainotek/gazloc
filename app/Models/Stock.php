<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function suppliers(){
        return $this->hasManyThrough(Supplier::class, Product::class);
    }

}

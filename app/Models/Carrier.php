<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    public function carts(){
        return $this->belongsToMany(Cart::class, 'carts_carriers')
            ->withPivot('price')
            ->withTimestamps()
            ;
    }
}

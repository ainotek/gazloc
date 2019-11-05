<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class, 'product_orders')->withPivot('quantity');
    }

    public function stores(){
        return $this->belongsToMany(Store::class, 'stores_products')->withPivot(
            'active', 'quantity', 'price')->withTimestamps();
    }
}

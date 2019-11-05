<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class, 'product_orders')->withPivot('quantity');
    }
    public function customers(){
        return $this->belongsTo(Customer::class);
    }

}

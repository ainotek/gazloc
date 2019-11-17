<?php


namespace App\Http\Services;

use App\Models\Order;

class OrderService
{
    public function getAllOrders(){
        return Order::all();
    }

    public function getAllSOrderByStore($store_id){
        return Order::all();
    }
}

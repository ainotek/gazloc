<?php


namespace App\Http\Services;


use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderService
{

    public function getAllOrders(){
        $orders = Order::all();
        return $orders;
    }

    public function getAllSOrderByStore($store_id){
        $orders = Order::all();
        return $orders;
    }
}

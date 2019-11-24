<?php


namespace App\Http\Services;

use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderService
{
    public function getAllOrders(){
        return Order::all();
    }

    public function getAllSOrderByStore($store_id){
        return DB::table('orders')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->join('order_details', 'order_id', '=', 'orders.id')
            ->join('stocks', 'stocks.id', '=', 'order_details.stock_id')
            ->where('stocks.store_id', '=', $store_id)
            ->get();
    }
}

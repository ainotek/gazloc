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
            ->select('orders.state as order_state',
                'orders.order_number',
                'customers.email as customer_email',
                'customers.phone as customer_phone',
                'customers.last_name as customer_last_name',
                'customers.first_name as customer_first_name',
                'order_details.quantity',
                'order_details.created_at',
                'stocks.price',
                'products.name as product_name'
                )
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->join('order_details', 'order_id', '=', 'orders.id')
            ->join('stocks', 'stocks.id', '=', 'order_details.stock_id')
            ->join('products', 'products.id', '=', 'stocks.product_id')
            ->where('stocks.store_id', '=', $store_id)
            ->paginate(15);
    }
}

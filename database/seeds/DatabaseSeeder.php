<?php

use App\Models\Customer;
use App\Models\Hour;
use App\Models\Log;
use App\Models\Offered_service;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use App\Models\Service;
use App\Models\Stock;
use App\Models\Store;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Supplier::class, 5)->create();
        factory(Product::class, 5)->create();
        factory(Service::class, 4)->create();
        factory(Store::class, 15)->create();
        factory(Offered_service::class, 30)->create();
        factory(Stock::class, 30)->create();
        factory(Hour::class);
        factory(User::class, 25)->create();
        factory(Log::class, 50)->create();
        factory(Customer::class, 60)->create();
        factory(Order::class, 1200)->create();
        factory(Order_detail::class, 1200)->create();
    }
}

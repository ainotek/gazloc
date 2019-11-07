<?php

use App\Models\Customer;
use App\Models\Log;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\Store;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    private function randdate(){
        return \Carbon\Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
    }
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
//        factory(Supplier::class, 10)->create();
//        factory(Product::class, 10)->create();
//        factory(Service::class, 100)->create();
//        factory(Store::class, 1000)->create();
//        factory(User::class, 25)->create();
//        factory(Customer::class, 100)->create();
//        factory(Log::class, 500)->create();
//        factory(Order::class, 300)->create();
//        $this->call(UsersTableSeeder::class);
//        $this->call(StoreTableSeeder::class);
//        $this->call(UserTableSeeder::class);
//        $this->call(SupplierTableSeeder::class);

//        $service_array = [
//            'users', 'suppliers', 'stores', 'services', 'products', 'orders', 'logs', 'hours', 'customers'
//        ];
//        for ($i = 0; $i < 9; $i++){
//            \Illuminate\Support\Facades\DB::table('services')->insert([
//                'name'=>$service_array[$i],
//                'description'=>$faker->text
//            ]);
//        }
        $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

        $store_id = Store::all()->pluck('id')->toArray();
        $service_id = Service::all()->pluck('id')->toArray();
        $product = Product::all()->pluck('id')->toArray();
        $order_id = Order::all()->pluck('id')->toArray();

//        for ($j = 1; $j <= 1000; $j++){
//            for ($i = 1; $i <= 7; $i++){
//                \Illuminate\Support\Facades\DB::table('hours')->insert([
//                    'stores_id'=>$j,
//                    'day'=>$i,
//                    'open'=>'08:00:00',
//                    'close'=>'21:00:00'
//                ]);
//            }
//        }

        $prices = [2000, 5000, 12000, 24000, 30000];
//        for ($j = 1; $j <= 2000; $j++){
////            for ($i = 1; $i <= 7; $i++){
//                \Illuminate\Support\Facades\DB::table('stores_products')->insert([
//                    'products_id'=>$faker->randomElement($product),
//                    'stores_id'=>$faker->randomElement($store),
//                    'active'=>$faker->boolean,
//                    'quantity'=>$faker->numberBetween(0, 100),
//                    'price'=>$faker->randomElement($prices)
//                ]);
////            }
//        }


//        for ($j = 1; $j <= 1000; $j++){
////            for ($i = 1; $i <= 7; $i++){
//            \Illuminate\Support\Facades\DB::table('product_orders')->insert([
//                'products_id'=>$faker->randomElement($product),
//                'orders_id'=>$faker->randomElement($order_id),
//                'quantity'=>$faker->numberBetween(0, 100),
//            ]);
////            }
//        }


//        for ($j = 1; $j <= 1500; $j++){
////            for ($i = 1; $i <= 7; $i++){
//            \Illuminate\Support\Facades\DB::table('offered_services')->insert([
//                'services_id'=>$faker->randomElement($service_id),
//                'stores_id'=>$faker->randomElement($store_id),
//                'active'=>$faker->boolean,
//                'price'=>$faker->randomElement($prices),
//            ]);
////            }
//        }

    }
}

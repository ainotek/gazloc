<?php

use App\Models\Store;
use Illuminate\Database\Seeder;
class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Store::class,10)->create();
    }
}

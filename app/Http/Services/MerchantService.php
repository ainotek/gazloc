<?php


namespace App\Http\Services;


use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MerchantService
{
    public function createStore(array $data)
    {
        return Store::create([
            'name' => $data['name'],
            'city' =>  $data['city'],
            'email' => $data['email'],
            'role' => 'MERCHANT',
            'rating' => 0,
            'voted' => 0,
            'active' => false,
            'expire_at' => Carbon::now()->addYear()->format("Y-m-d H:i:s"),
        ]);
    }

    public function getStoreByUser($user){
        $store = Store::all()->find($user->store_id);
        return $store;
    }
}

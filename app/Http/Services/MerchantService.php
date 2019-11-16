<?php


namespace App\Http\Services;


use App\Models\Store;
use Illuminate\Support\Facades\DB;

class MerchantService
{



    public function getStoreByUser($user){
        $store = Store::all()->find($user->stores_id);
        return $store;
    }
}

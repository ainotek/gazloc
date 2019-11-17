<?php


namespace App\Http\Services;


use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserService
{

    public function getAllUserByStore($store_id){
          return User::all()->where('stores_id', $store_id);
    }

}

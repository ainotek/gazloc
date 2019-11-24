<?php


namespace App\Http\Services;


use App\Models\Store;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService
{

    public function getAllUserByStore($store_id){
          return User::all()->where('stores_id', $store_id);
    }

    public function createUser(array $data, $store)
    {
        if (!key_exists('phone', $data)){
            $data['phone'] = '00000000';
        }
        return User::create([
            'store_id' => $store->id,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'role' => 'MERCHANT',
            'active' => true,
            'expire_at' => new \DateTime(),
            'status' => 'ACTIVE',
        ]);
    }
}

<?php


namespace App\Http\Services;


use App\Models\Store;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService
{

    public function getAllUserByStore($store){
        $users = DB::table('users')
            ->where('store_id', '=', $store)->paginate(10);
        return $users;
    }

    public function createUser(array $data, $store)
    {
        if (!key_exists('phone', $data)){
            $data['phone'] = '00000000';
        }
        return User::create([
            'store_id' => $store,
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

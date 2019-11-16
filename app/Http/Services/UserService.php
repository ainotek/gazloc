<?php


namespace App\Http\Services;


use Illuminate\Support\Facades\DB;

class UserService
{

    public function getAllUserByStore($store_id){
        $users = DB::select('SELECT * FROM `users` WHERE `stores_id` = ?', [$store_id]);
        return $users;
    }

}

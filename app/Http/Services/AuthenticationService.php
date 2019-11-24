<?php


namespace App\Http\Services;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationService
{
    public function login($user, $remember = false)
    {
        if (Auth::attempt($user, $remember)){
            $user = Auth::user();
            $user->last_login = new \DateTime();
            $user->save();
            return true;
        }
        return false;
    }

}

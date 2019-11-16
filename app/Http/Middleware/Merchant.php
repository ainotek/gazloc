<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Merchant
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role != 'MERCHANT'){
            Auth::logout();
            $flash =  ['status'=>'info', 'message'=> "Vous n'êtes pas authoriser à accéder à cette page."];
            return redirect()
                ->route('login')
                ->with('flash', $flash)
                ;
        }
        return $next($request);
    }
}

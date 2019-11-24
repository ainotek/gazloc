<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role != 'ADMIN'){
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

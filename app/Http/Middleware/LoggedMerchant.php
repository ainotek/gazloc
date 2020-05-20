<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;
use Flash;
class LoggedMerchant
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

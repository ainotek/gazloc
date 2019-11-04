<?php

namespace App\Http\Middleware;

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
        return $next($request);

        if (!Auth::user()){
            flash("Vous devez être connecté pour voir cette page.")->error();
            return redirect('/connexion');
        }

        if (Auth::user()->role != 'MERCHANT'){
            flash("Vous n'êtes pas authoriser à accéder à cette page.")->error();
            return redirect('/connexion');
        }
        return $next($request);
    }
}

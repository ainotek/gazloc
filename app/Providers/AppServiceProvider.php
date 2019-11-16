<?php

namespace App\Providers;

use App\Http\Services\MerchantService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['merchant.partials.topbar', 'merchant.partials.leftsidebar' ],
            function ($views){
            $user = Auth::user();
            $merchantService = new MerchantService();
            //$userStore = $merchantService->getAllStoreUser($user->stores_id);
                $views->with('user', $user);
            });
    }
}

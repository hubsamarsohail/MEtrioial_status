<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


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
        Paginator::useBootstrap();

        view()->composer('*', function ($view) {
            $session = session()->get('b_user_data');
            if (isset($session) && $session != '')
                $view->with(
                    [
                        'user_info' => $session['user_info'],
                        'user_roles' => $session['user_roles'],
                        'user_menus' => $session['user_menus'],
                        'user_tenants' => $session['user_tenants'],
                    ]);
        });

    }
}

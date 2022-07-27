<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Sidebar;

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
        $loggedInUser = 'shail';
        $data= Sidebar::all();
        View::share('loggedInUser', $data);
        View::share('loggedInUserr', $loggedInUser);
    }
}
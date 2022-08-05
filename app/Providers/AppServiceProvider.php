<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
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
         $children = DB::select('SELECT * from sidebars');
         $subchildren  = DB::select('SELECT * from sidebars where parent_id!=0');


        $loggedInUser = 'shail';
        $data = Sidebar::where('Isactive','1')
                        ->orderBy('order', 'ASC')->get();

        View::share('children', $children);
        View::share('subchildren', $subchildren);
        View::share('loggedInUser', $data);
        View::share('loggedInUserr', $loggedInUser);
    }
}
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
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


         $settings = DB::select('SELECT * from settings where id=1');
         $children = DB::select('SELECT * from sidebars');
         $subchildren  = DB::select('SELECT * from sidebars where parent_id!=0');
         //$user = Auth::user();

         $data = Sidebar::where('Isactive','1')
                        ->orderBy('order', 'ASC')->get();

        /* view()->composer('*', function ($view) 
        {
            $view->with('user_info', \Session::get('user')['id'] );    
        });*/

        View::share('children', $children);
        View::share('subchildren', $subchildren);
        View::share('loggedInUser', $data);
       // View::share('user_info', $user);
        View::share('main_settings', $settings);
    }
}
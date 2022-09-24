<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Childmenu;
use App\Models\Topbar;
use App\Models\Header;
use App\Models\Footer;
use App\Models\Usefulllink;
use App\Models\Sociallink;
use App\Models\Frequentlyasked;
use Illuminate\Support\Facades\View;
use Illuminate\Cache\RateLimiting\Limit;


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
        View::composer('*', function($view)
        {
         $data=Menu::Limit(7)->get(); 
         View::share('menu', $data);
        });

        
        View::composer('*', function($view1)
       {
        $data=Submenu::all(); 
        View::share('submenu', $data);
       });


       View::composer('*', function($view2)
       {
        $data=Childmenu::all(); 
        View::share('childmenu', $data);
       });

       View::composer('*', function($view3)
       {
        $data=Topbar::all(); 
        View::share('topbar', $data);
       });



       View::composer('*', function($view4)
       {
        $data=Header::all(); 
        View::share('header', $data);
       });



       View::composer('*', function($view5)
       {
        $data=Footer::all(); 
        View::share('footer', $data);
       });


       View::composer('*', function($view7)
       {
        $data=Usefulllink::all(); 
        View::share('usefulllink', $data);
       });


       View::composer('*', function($view8)
       {
        $data=Sociallink::all(); 
        View::share('sociallink', $data);
       });


       View::composer('*', function($view8)
       {
        $data=Frequentlyasked::all(); 
        View::share('frequentlyasked', $data);
       });
    }
}

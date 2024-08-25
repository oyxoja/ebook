<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('master.site', function($view){
            $categories = Category::all();
            $ad = \App\Models\Ad::first();
            $view->with(compact('categories', 'ad'));
        });

        view()->composer('', function($view){
            $categories = Category::all();
            $ad = \App\Models\Ad::first();
            $view->with(compact('categories', 'ad'));
        });



        
    }
}

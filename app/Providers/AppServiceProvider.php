<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind('Settings',function (){
                return[
                    'date_format' => 'Y-m-d',
                    'time_format' => 'H:i',
                ];
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        Blade::if('can', function ($expression,$type='admin') {
            return  auth('admin')->user()->hasAccess($expression);
           
        });

        
        \Form::component('category', 'components.form.category-list', ['name', 'optionsArray','defaultKey', 'attributes']);

    }
}

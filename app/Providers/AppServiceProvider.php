<?php

namespace App\Providers;

use App\ControlPage;
use App\WebsiteInfo;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('navPages' , ControlPage::get());
        View::share('webSettings' , WebsiteInfo::first());
        View::share('active' , '');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

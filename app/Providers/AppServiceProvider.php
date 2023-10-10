<?php

namespace App\Providers;

use App\Models\Profile_wh;
use Illuminate\Contracts\View\View;
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
        view()->composer('Layouts.base', function ($view) {
            $data = Profile_wh::all();
            $view->with('data', $data);
        });
        view()->composer('Layouts.authBase', function ($view) {
            $data = Profile_wh::all();
            $view->with('data', $data);
        });
    }
}

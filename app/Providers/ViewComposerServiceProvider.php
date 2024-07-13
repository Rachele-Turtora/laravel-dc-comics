<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {

            $data = [
                'header_list' => config('common.header_list'),
                'footer_lists' => config('common.footer_lists'),
                'menu' => config('common.menu')
            ];

            $view->with($data);
        });
    }
}

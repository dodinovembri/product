<?php

namespace Dnx\Product\App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'Dnx_Product');
    }
}

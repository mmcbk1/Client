<?php
namespace Bkrol\ClientApi\Providers;

use Illuminate\Support\ServiceProvider;

class ClientApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require_once __DIR__ . '/../rutes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Bkrol\ClientApi\Controllers\ClientApiController');
        $this->loadViewsFrom(__DIR__.'/../views', 'client');
    }
}

<?php 

namespace Demindo\MulticraftApi;

use Illuminate\Support\ServiceProvider;

class MulticraftApiServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/multicraft.php' => config_path('multicraft.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $config = __DIR__ . '/../../config/multicraft.php';
        $this->mergeConfigFrom($config, 'multicraft');

        $this->publishes([__DIR__ . '/../../config/multicraft.php' => config_path('multicraft.php')], 'config');
        
        $this->app->bind('multicraftapi', function ()
        {
            return new MulticraftApi($this->app['config']->get('multicraft'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('multicraftapi');
    }

}

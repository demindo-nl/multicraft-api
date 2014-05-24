<?php namespace Mcprohosting\MulticraftApi;

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
        $this->package('mcprohosting/multicraft-api');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('multicraftapi', function ()
        {
            return new MulticraftApi($this->app['config']->get('multicraft-api::credentials'));
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

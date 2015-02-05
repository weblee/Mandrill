<?php

namespace Weblee\Mandrill;

use Illuminate\Support\ServiceProvider;

class MandrillServiceProvider extends ServiceProvider{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        //
    }

    /**
     * Register the mandrill service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('mandrill_mail', function($app){
            return new Mail($app['config']['services']['mandrill']['secret']);
        });

        $this->app->bind('Weblee\Mandrill\Mail', function($app){
            return new Mail($app['config']['services']['mandrill']['secret']);
        });

    }

} 
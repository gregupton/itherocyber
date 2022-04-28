<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SessionServiceProvider extends ServiceProvider
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
        \Session::extend('custom', function ($app) {
            return new \App\Extensions\DatabaseSessionHandler(
                $app['db']->connection($app['config']['session.connection']),
                $app['config']['session.table'],
                $app['config']['session.lifetime'],
                $app
            );
        });
    }
}

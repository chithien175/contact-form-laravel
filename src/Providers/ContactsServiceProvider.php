<?php

namespace ThienPham\Contacts\Providers;

use Illuminate\Support\ServiceProvider;

class ContactsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'contacts');
        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/thienpham-contacts'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        // $this->app->make('ThienPham\Contacts\Http\Controllers\ContactsController');
    }
}

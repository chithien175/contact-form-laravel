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
            __DIR__.'/../../resources/views' => resource_path('views/vendor/contacts'),
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
        require_once(__DIR__.'/../../src/Helpers/helpers.php');
    }
}

<?php

namespace ThienPham\Contacts;

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
        $this->loadViewsFrom(__DIR__.'/views', 'contacts');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/contacts'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('ThienPham\Contacts\ContactsController');
    }
}

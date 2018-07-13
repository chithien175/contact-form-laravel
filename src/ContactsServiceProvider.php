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
        //
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

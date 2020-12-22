<?php
namespace Lrvl\MailApp;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Gate;

class MailAppProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        $this->loadViewsFrom(__DIR__.'/resources/views', 'mail');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->publishes(
            [
                __DIR__.'/config' => config_path('hub/apps/mail')
            ]
        );
    }
}
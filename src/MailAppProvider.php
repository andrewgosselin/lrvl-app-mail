<?php
namespace Lrvl\MailApp;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class MailAppProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        $this->loadViewsFrom(__DIR__.'/resources/views', 'mail');
        $config = config('hub.apps.mail') ?? ['name' => 'Mail', 'slug' => 'mail'];
        View::share('mailApp', $config);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
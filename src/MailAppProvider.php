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
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([__DIR__.'/public' => public_path('vendor/lrvl/mail')], 'public');
        View::share('mailApp', [
            'name' => 'Mail',
            'slug' => 'mail',
            'icon' => [
                "type" => "url",
                "value" => "/vendor/lrvl/mail/icon.png"
            ]
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
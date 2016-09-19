<?php
namespace Mobilysms\Phpanonymous;

use Illuminate\Support\ServiceProvider;
use Mobilysms\Phpanonymous\Mobily;
use Config;
class MobilySmsPhpAnonymous extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([
        __DIR__.'/config' => base_path('config'),
      ]);

      $this->publishes([
        __DIR__.'/lang' => base_path('resources/lang/'.Config::get('app.locale')),
      ]);

       
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       
            $this->app['Mobily'] = $this->app->share(function($app)
            {
                return new Mobily();
            });

    }
}


 
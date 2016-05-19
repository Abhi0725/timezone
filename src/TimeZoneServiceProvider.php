<?php

namespace Abhishek\TimeZone;

use Illuminate\Support\ServiceProvider;

class TimeZoneServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([
        __DIR__.'/config/timezone.php' => config_path('timezone.php'),
    ], 'config');
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    $this->mergeConfigFrom( __DIR__.'/config/timezone.php', 'timezone');

    $this->app->bind('timezone', function ($app) {
        return new TimeZone;
    });
  }
}

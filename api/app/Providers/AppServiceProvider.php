<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->bind('App\Services\StarWarsAPIServiceInterface', 'App\Services\StarWarsAPIService');
    $this->app->bind('App\Services\StatisticLogServiceInterface', 'App\Services\StatisticLogService');
    $this->app->bind('App\Services\CreateStatisticServiceInterface', 'App\Services\CreateStatisticService');
    $this->app->bind('App\Services\MeasureExecutionTimeServiceInterface', 'App\Services\MeasureExecutionTimeService');
  }
}

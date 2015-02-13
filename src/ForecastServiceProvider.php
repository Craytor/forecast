<?php

namespace MyWeather;

use Illuminate\Support\ServiceProvider;

class ForecastServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath(__DIR__.'/../config/forecast.php');

        $this->publishes([$source => config_path('forecast.php')]);

        $this->mergeConfigFrom($source, 'forecast');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('MyWeather\ForecastClient', function ($app) {
            $apiKey = $app->config->get('forecast.apiKey');

            return new ForecastClient($apiKey);
        });
    }
}

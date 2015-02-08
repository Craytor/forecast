<?php

namespace MyWeather\Forecast;

use GuzzleHttp\Client;

class ForecastFactory
{
    /**
     * Create a new webhook gateway instance.
     *
     * @param string[] $config
     *
     * @return \MyWeather\Forecast\ForecastGateway
     */
    public function make(array $config)
    {
        $client = new Client();
        return new ForecastGateway($client, $config);
    }
}

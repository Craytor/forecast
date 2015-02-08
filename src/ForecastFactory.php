<?php

namespace MyWeather\Forecast;

use GuzzleHttp\Client;

class ForecastFactory
{
    /**
     * Create a new forecast gateway instance.
     *
     * @param string $apiKey
     *
     * @return \MyWeather\Forecast\ForecastGateway
     */
    public function make($apiKey)
    {
        $client = new Client();

        return new ForecastGateway($client, $config);
    }
}

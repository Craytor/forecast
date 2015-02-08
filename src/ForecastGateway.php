<?php

namespace MyWeather\Forecast;

use GuzzleHttp\Client;

class ForecastGateway
{
    /**
     * Gateway api endpoint.
     *
     * @var string
     */
    protected $endpoint = 'https://api.forecast.io';

    /**
     * The http client.
     *
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * Configuration options.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * Create a new webhook gateway instance.
     *
     * @param \GuzzleHttp\Client $client
     * @param string             $apiKey
     *
     * @return void
     */
    public function __construct(Client $client, $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }


    /**
     * Create an api call instance.
     *
     * @param string $latitude
     * @param string $longitude
     * @param string $time
     * @param array  $options
     *
     * @return void
     */
    public function request($latitude, $longitude, $time = null, $options = [])
    {
        // guzzle request here
    }
}

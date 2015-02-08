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
     * @var string[]
     */
    protected $config;

    /**
     * Create a new webhook gateway instance.
     *
     * @param \GuzzleHttp\Client $client
     * @param string[]           $config
     *
     * @return void
     */
    public function __construct(Client $client, array $config)
    {
        $this->client = $client;
        $this->config = $config;
    }

}

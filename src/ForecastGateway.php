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
    protected $endpoint = 'https://api.forecast.io/forecast';

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
     * Create a new Forecast gateway instance.
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
     * @return array $response
     */
    public function request($latitude, $longitude, $time = null, array $options = [])
    {
        $success = false;

        $response = $this->client->get($endpoint."/".$this->apiKey."/".$latitude.",".$longitude.((is_null($time)) ? '' : ','.$time));

        return $response;
    }
}

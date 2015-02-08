<?php

namespace MyWeather\Forecast;

use GuzzleHttp\Client as GuzzleClient;

class Forecast
{
    /**
     * Gateway api endpoint.
     *
     * @var string
     */
    protected $endpoint = 'https://api.forecast.io/forecast';

    /**
     * Configuration options.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * Create a new Forecast gateway instance.
     *
     * @param string $apiKey
     *
     * @return void
     */
    public function __construct($apiKey)
    {
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

        $response = $this->getHttpClient()->get($this->getEndpointUrl()."/".$latitude.",".$longitude.((is_null($time)) ? '' : ','.$time));

        return $response;
    }

    /**
     * Builds the endpoint url.
     *
     * @return string
     */
    protected function getEndpointUrl()
    {
        return $this->endpoint."/".$this->apiKey;
    }

    /**
     * Get the http client.
     *
     * @return \Guzzle\Client
     */
    protected function getHttpClient()
    {
        return new GuzzleClient();
    }
}

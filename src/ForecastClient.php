<?php

namespace MyWeather;

use GuzzleHttp\Client;

class ForecastClient
{
    /**
     * The endpoint.
     *
     * @var string
     */
    protected $endpoint = 'https://api.forecast.io/forecast';

    /**
     * The api key.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * The guzzle client.
     *
     * @var \GuzzleHttp\Client
     */
    protected $guzzleClient;

    /**
     * Create a new forecast client instance.
     *
     * @param string                  $apiKey
     * @param \GuzzleHttp\Client|null $client
     *
     * @return void
     */
    public function __construct($apiKey, Client $client = null)
    {
        $this->apiKey = $apiKey;
        $this->guzzleClient = $client ?: new Client();
    }

    /**
     * Call the api and return a forecast object.
     *
     * @param string      $latitude
     * @param string      $longitude
     * @param string|null $time
     *
     * @return \MyWeather\Forcast
     */
    public function get($latitude, $longitude, $time = null)
    {
        $url = $this->buildUrl($latitude, $longitude, $time);

        $response = $this->guzzleClient->get($url);

        return new Forecast($response->json());
    }

    /**
     * Builds the url.
     *
     * @param string      $latitude
     * @param string      $longitude
     * @param string|null $time
     *
     * @return string
     */
    protected function buildUrl($latitude, $longitude, $time)
    {
        $time = is_null($time) ? '' : ','.$time;

        return $this->endpoint.'/'.$this->apiKey.'/'.$latitude.','.$longitude.$time;
    }
}

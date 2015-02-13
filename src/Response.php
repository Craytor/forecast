<?php

namespace MyWeather;

class Response
{
    /**
     * The summary of the response.
     *
     * @var string
     */
    protected $summary;

    /**
     * The icon of the response.
     *
     * @var string
     */
    protected $icon;

    /**
     * The data of the response.
     *
     * @var array
     */
    protected $data;

    /**
     * The raw data of the response.
     *
     * @var string
     */
    protected $response;

    /**
     * Gateway reponse summary.
     *
     * @return array
     */
    public function summary()
    {
        return $this->summary;
    }

    /**
     * Gateway reponse icon.
     *
     * @return array
     */
    public function icon()
    {
        return $this->icon;
    }

    /**
     * The temperature.
     *
     * @return float
     */
    public function temperature()
    {
        return (float) $this->data['temperature'];
    }

    /**
     * The min temperature.
     *
     * @return float
     */
    public function minTemperature()
    {
        return (float) $this->data['temperatureMin'];
    }

    /**
     * Gateway reponse data.
     *
     * @return array
     */
    public function data()
    {
        return $this->data;
    }

    /**
     * Response raw data.
     *
     * @return array
     */
    public function raw()
    {
        return $this->response;
    }

    /**
     * Set the raw response array from the gateway.
     *
     * @param array $response
     *
     * @return \Dinkbit\PayMe\Transaction
     */
    public function setRaw(array $response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Map the given array onto the reponse's properties.
     *
     * @param array $attributes
     *
     * @return \MyWeather\Response
     */
    public function map(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            $this->{$key} = $value;
        }

        return $this;
    }
}

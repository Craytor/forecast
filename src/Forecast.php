<?php

namespace MyWeather;

class Forecast
{
    /**
     * The raw data.
     *
     * @var array
     */
    protected $data;

    /**
     * Create a new forecast instance.
     *
     * @param array $data
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Returns the currently array.
     *
     * @return array
     */
    public function currently()
    {
        return $this->data['currently'];
    }

    /**
     * Returns the minutely array.
     *
     * @return array
     */
    public function minutely()
    {
        return $this->data['minutely'];
    }

    /**
     * Returns the hourly array.
     *
     * @return array
     */
    public function hourly()
    {
        return $this->data['hourly'];
    }

    /**
     * Returns the daily array.
     *
     * @return array
     */
    public function daily()
    {
        return $this->data['daily'];
    }

    /**
     * Returns the alerts array.
     *
     * @return array
     */
    public function alerts()
    {
        return $this->data['alerts'];
    }

    /**
     * Returns the timezone string.
     *
     * @return array
     */
    public function timezone()
    {
        return $this->data['timezone'];
    }

    /**
     * Returns the offset string.
     *
     * @return array
     */
    public function offset()
    {
        return $this->data['offset'];
    }
}

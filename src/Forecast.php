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
     * @return \MyWeather\Response
     */
    public function currently()
    {
        return (new Response())->setRaw($this->data['currently'])->map([
            'summary' => $this->data['currently']['summary'],
            'icon'    => $this->data['currently']['icon'],
            'data'    => $this->data['currently'],
        ]);
    }

    /**
     * Returns the minutely array.
     *
     * @return \MyWeather\Response
     */
    public function minutely()
    {
        return (new Response())->setRaw($this->data['minutely'])->map($this->data['minutely']);
    }

    /**
     * Returns the hourly array.
     *
     * @return \MyWeather\Response
     */
    public function hourly()
    {
        return (new Response())->setRaw($this->data['hourly'])->map($this->data['hourly']);
    }

    /**
     * Returns the daily array.
     *
     * @return \MyWeather\Response
     */
    public function daily()
    {
        return (new Response())->setRaw($this->data['daily'])->map($this->data['daily']);
    }

    /**
     * Returns the alerts array.
     *
     * @return \MyWeather\Response
     */
    public function alerts()
    {
        return (new Response())->setRaw($this->data['alerts'])->map([
            'summary' => $this->data['alerts']['summary'],
            'icon'    => 'alerts',
            'data'    => $this->data['alerts'],
        ]);
    }
}

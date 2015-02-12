# Forecast
==========

Forecast was created by, and is maintained by [Tyler Youschak](https://tjyouschak.me). Forecast uses [Forecast.io](http://forcast.io)'s weather API, so a free API key will be required. I've chosen Forecast.io due to the really inexpensive API, which you get 1,000 free calls a day, and if you go over that 10,000 calls, it's one-center per 10,000 calls.

## Installation
To get started with Forecast, you must first require `"myweather/forecast"` in your `composer.json` and set it to `"dev-master"` (for time being).

You will need to have the following, in order for Forecast to work:
* `"guzzlehttp/guzzle": "~5.0"` in your `composer.json`.

## Usage
```
use MyWeather\ForecastClient;

$client = ForecastClient($apiKey);
$forecast = $client->get('lat','lng');
$currently = $forecast->currently();

```

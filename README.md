MyWeather Forecast
==================

MyWeather Forecast was created by, and is maintained by [Tyler Youschak](https://tjyouschak.me). Forecast uses [Forecast.io](http://forcast.io)'s weather API, so a free API key will be required. I've chosen Forecast.io due to the really inexpensive API, which you get 1,000 free calls a day, and if you go over that 10,000 calls, it's one-center per 10,000 calls.


## Installation

To get the latest version of MyWeather Forecast, simply add the following line to the require block of your `composer.json` file:

```
"myweather/forecast": "~1.0@dev"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

If you're using Laravel 5, then you can register our service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'MyWeather\ForecastServiceProvider'`


## Usage

```
use MyWeather\ForecastClient;

$client = ForecastClient($apiKey);
$forecast = $client->get('lat','lng');
$currently = $forecast->currently();
```

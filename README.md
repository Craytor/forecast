MyWeather Forecast
==================

MyWeather Forecast was created by, and is maintained by [Tyler Youschak](http://tjyouschak.me). MyWeather Forecast uses [Forecast.io](https://developer.forecast.io/)'s weather API, so a free API key will be required. I've chosen Forecast.io due to the really inexpensive API, which supplies you with 1,000 free calls per day. If you go over 1,000 calls, it's only one-cent per 10,000 calls.

## Requirements
Before installing Forecast, you need to make sure you have `cURL` installed on your server! Chances are this will already be completed!

## Installation

To get the latest version of MyWeather Forecast, simply add the following line to the require block of your `composer.json` file:

```
"myweather/forecast": "~1.0@dev"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

If you're using Laravel 5, then you can register our service provider. Open up `config/app.php` and add the following to the `providers` array.

* `'MyWeather\ForecastServiceProvider'`


## Usage

Usage of MyWeather Forecast is quite simple. To get started, you must first _use_ our package. This will allow you to start using our package, here's an example: `use MyWeather\ForecastClient;`

Alright! We are now using the package, but how and where are we going to declare our API key (provided by [Forecast.io](https://developer.forecast.io/))? Well, let's take a look:
* You can use it by typing the following: `$client = ForecastClient($apiKey);` This will go ahead and set your API key for your request.
* Now your going to want to set the latitude (lat) and longitude (lng) of the location your trying to find. It may be best to use Javascript and ask the person if you can use their location, or you can just hard code in a geo-location look up. Here's how you can do that: `$forecast = $client->get('lat','lng');`
* Now, let's get the viddles! You can now (since you have declared your API key and lat & lng), use our `currently`, `minutely`, `hourly`, and `daily` selectors which will return that information in an array.

Here's a look at all of that combined:

```php
use MyWeather\ForecastClient;

$client = new ForecastClient($apiKey);
$forecast = $client->get('lat','lng');
$currently = $forecast->currently();
```

## Contribute
Have an idea of a new data selector that should be added? Or do you have an idea that will make this package even better? Open an issue report, and we'll have a gander!

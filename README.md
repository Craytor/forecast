# forecast

```
use MyWeather\Forecast;

$forecast = Forecast($apiKey);
$forecast->request('lat','lng');
$currently = $forecast->currently();

print_r($currently);
```

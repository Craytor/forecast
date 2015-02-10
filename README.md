# forecast

```
use MyWeathre\Forecast;

$forecast = Forecast($apiKey);
$response = $forecast->request('lat','lng')->currently();
print_r($response);
```

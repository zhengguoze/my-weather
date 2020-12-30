<h1 align="center"> myWeather </h1>

<p align="center"> 天气api.</p>


## Installing

```shell
$ composer require zhengguo/myWeather -vvv
```

## Usage

use Overtrue\Weather\Weather;

$key = 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';

$weather = new Weather($key);Copy
获取实时天气#
$response = $weather->getWeather('深圳');

在 Laravel 中使用#
在 Laravel 中使用也是同样的安装方式，配置写在 config/services.php 中：
    .
    .
    .
     'weather' => [
        'key' => env('WEATHER_API_KEY'),
    ],Copy
然后在 .env 中配置 WEATHER_API_KEY ：
WEATHER_API_KEY=xxxxxxxxxxxxxxxxxxxxxCopy
可以用两种方式来获取 Overtrue\Weather\Weather 实例：
方法参数注入#
    .
    .
    .
    public function edit(Weather $weather) 
    {
        $response = $weather->getWeather('深圳');
    }
    .
    .
    .Copy
服务名访问#
    .
    .
    .
    public function edit() 
    {
        $response = app('weather')->getWeather('深圳');
    }
    .
    .
    .

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/zhengguo/myWeather/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/zhengguo/myWeather/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT
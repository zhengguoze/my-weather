<?php


namespace Zhengguoze\MyWeather\Tests;


use PHPUnit\Framework\TestCase;
use Zhengguoze\MyWeather\Weather;

class WeatherTest extends TestCase
{
    public function testGetWeather()
    {
        $myWeather = new Weather('1f788da51680ae38243f6cfe939ea7e9');
        $res = $myWeather->getWeather('深圳');
        var_dump($res);
    }
}

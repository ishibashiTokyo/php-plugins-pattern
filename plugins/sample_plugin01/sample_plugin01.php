<?php
class sample_plugin01
{
    public static function init()
    {
        # code...
        echo 'sample_plugin01:初期化完了' . PHP_EOL;
    }

    public static function before()
    {
        # code...
        echo 'sample_plugin01::before()だよ！' . PHP_EOL;
    }

    public static function after(string $output): string
    {
        # code...
        return $output . ' / sample_plugin01';
    }
}
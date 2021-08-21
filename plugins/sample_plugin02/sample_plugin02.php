<?php
class sample_plugin02
{
    public static function init()
    {
        # code...
        echo 'sample_plugin02:初期化完了' . PHP_EOL;
    }

    public static function before()
    {
        # code...
        echo 'sample_plugin02::before()だよ！' . PHP_EOL;
    }

    public static function after(string $output): string
    {
        # code...
        return $output . ' / sample_plugin02';
    }
}
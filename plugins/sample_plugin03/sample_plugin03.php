<?php
class sample_plugin03
{
    public static function init()
    {
        # code...
        echo 'sample_plugin03:初期化完了' . PHP_EOL;
    }

    // sample_plugin03ではbeforeは存在しないとする
    // public static function before()
    // {
    //     # code...
    // }

    public static function after(string $output): string
    {
        # code...
        return $output . ' / sample_plugin03';
    }
}

<?php
class pluginLoader
{
    private static $plugin_directorys = [];
    private static $plugins = [];

    public static function load()
    {
        self::$plugin_directorys = glob('plugins/*', GLOB_ONLYDIR);
        self::$plugins = array_map(
            function ($value) {
                return str_replace('plugins/', '', $value);
            }
            , self::$plugin_directorys
        );

        foreach (self::$plugin_directorys as $key => $dir_name) {
            require_once($dir_name . '/' . self::$plugins[$key] . '.php');
        }
    }

    public static function event(string $trigger, $value = null)
    {
        foreach (self::$plugins as $plugin) {
            if (method_exists($plugin, $trigger)) {
                $value = $plugin::$trigger($value);
            }
        }

        return $value;
    }
}
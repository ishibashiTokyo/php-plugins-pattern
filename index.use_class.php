<?php
include_once('plugin_loader.php');
pluginLoader::load();

// initメソッドのコール
pluginLoader::event('init');

// beforeメソッドのコール
pluginLoader::event('before');

// レスポンスボディ内容
$output = 'プラグイン機能の実装パターン！';

$output = pluginLoader::event('after', $output);

echo $output;
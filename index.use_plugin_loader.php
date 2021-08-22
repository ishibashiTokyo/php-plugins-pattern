<?php
// プラグインローダーの読み込み
include_once('plugin_loader.php');

// プラグインの読み込み
pluginLoader::load();

// initメソッドのコール
pluginLoader::event('init');

// beforeメソッドのコール
pluginLoader::event('before');

// レスポンスボディ内容
$output = 'プラグイン機能の実装パターン！';

// afterメソッドのコール
$output = pluginLoader::event('after', $output);

echo $output;

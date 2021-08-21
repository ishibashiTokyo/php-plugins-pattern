<?php
// プラグインディレクトリ情報の初期化
$_dir_list = glob('plugins/*', GLOB_ONLYDIR);
$plugin_list = array_map(
    function ($value) {
        return str_replace('plugins/', '', $value);
    }
    , $_dir_list
);

// プラグインメインファイルの読み込み
foreach ($_dir_list as $key => $dir_name) {
    require_once($dir_name . '/' . $plugin_list[$key] . '.php');
}

// initメソッドのコール
foreach ($plugin_list as $plugin) {
    if (method_exists($plugin, 'init')) {
        $plugin::init();
    }
}

// beforeメソッドのコール
foreach ($plugin_list as $plugin) {
    if (method_exists($plugin, 'before')) {
        $plugin::before();
    }
}

// レスポンスボディ内容
$output = 'プラグイン機能の実装パターン！';

// afterメソッドのコール
foreach ($plugin_list as $plugin) {
    if (method_exists($plugin, 'after')) {
        $output = $plugin::after($output);
    }
}

// 出力
echo $output;

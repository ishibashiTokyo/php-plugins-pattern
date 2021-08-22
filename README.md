# README

PHPでプラグイン機能として追加拡張できるイベントりすなのサンプルコード  
どんなのがいいか模索しながら書いているので検証は各自でお願いします。

## 参考にしたサイト

- [PHP でプラグインのようなものを実装](https://qiita.com/yorozuone/items/27b4cfb5177ef424f069)
- [イベントハンドラ（イベントリスナ）とは - IT用語辞典 e-Words](https://e-words.jp/w/%E3%82%A4%E3%83%99%E3%83%B3%E3%83%88%E3%83%8F%E3%83%B3%E3%83%89%E3%83%A9.html)

##  ファイル構成

```shell
./
├── LICENSE
├── README.md
├── index.php           # サンプル処理
├── index.use_class.php # プラグインローダーを使用したサンプル処理
├── plugin_loader.php   # プラグインローダー
└── plugins             # プラグインディレクトリ
    ├── sample_plugin01
    │   └── sample_plugin01.php
    ├── sample_plugin02
    │   └── sample_plugin02.php
    └── sample_plugin03
        └── sample_plugin03.php
```

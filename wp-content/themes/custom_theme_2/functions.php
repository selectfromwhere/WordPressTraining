<?php

// https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#Title_.E3.82.BF.E3.82.B0

// titleタグをhead内に生成する
add_theme_support( 'title-tag' );

// HTML5でマークアップ
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );

//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

?>
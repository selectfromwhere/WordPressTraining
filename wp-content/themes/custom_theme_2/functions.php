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

//カスタムメニュー
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

//メニューボタンjs呼び出し
function navbutton_scripts(){
  wp_enqueue_script( 'navbutton_script', get_template_directory_uri() .'/js/navbutton.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts' , 'navbutton_scripts' );


//サイドバーにウィジェット追加
function widgetarea_init() {
register_sidebar(array(
    'name'=>'サイドバー',
    'id' => 'side-widget',
    'before_widget'=>'<div id="%1$s" class="%2$s sidebar-wrapper">',
    'after_widget'=>'</div>',
    'before_title' => '<h4 class="sidebar-title">',
    'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'widgetarea_init' );

?>
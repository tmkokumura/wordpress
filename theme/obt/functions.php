<?php
//サイドバーを1つ設置する
register_sidebar(array(
      'name'=>'サイドバー',
      'before_widget'=>'<div class="sidebar-wrapper">',
      'after_widget'=>'</div>',
      'before_title' => '<p class="sidebar-title">',
      'after_title' => '</p>'
));

function register_my_menu() {
  register_nav_menu('main-menu',__( 'メインメニュー' ));
}
add_action( 'init', 'register_my_menu' );

//アイキャッチ画像を有効化する
add_theme_support( 'post-thumbnails', array( 'post' ) );
<?php

// css
require_once 'functions/include-css.php';
// js
require_once 'functions/include-js.php';
// navi
require_once 'functions/custom-menu.php';
// navi
require_once 'functions/add-image-size.php';
// widget
require_once 'functions/widget.php';

// カスタムヘッダー画像を設置する
$custom_header_defaults = array(
  'default-image'          => get_stylesheet_directory_uri() . '/images/common/mv-default.jpg',
  'width'                  => 1000,
  'height'                 => 750,
  );
add_theme_support( 'custom-header', $custom_header_defaults );


/**
 * テーマカスタマイザー　実装例
*/
function my_theme_customize_register( $wp_customize ) {

  /*
   * 画像フィールドを実装
   * 参考 ） https://dainashiyesterday.com/post-4246/
   * データ取得方法 ：　get_theme_mod( 'mw_theme_option' );
  */

  // セクション
  $wp_customize->add_section( 'mw_theme_option_image', array(
    'title' => '下層ページの共通画像',
    'priority' => 200,
    'description' => '画像をアップロードしてください。',
  ));

  // セッティング
  $wp_customize->add_setting( 'mw_theme_option[image][0]' ); //設定項目を追加
  // コントロール
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mw_theme_option_image', array(
    'settings' => 'mw_theme_option[image][0]',
    'label' => '画像',
    'section' => 'mw_theme_option_image',
    'description' => '画像を設定してください。',
  )));


}
add_action( 'customize_register', 'my_theme_customize_register' );
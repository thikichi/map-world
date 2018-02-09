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
<?php
/*----------------------------------------------------------------------------------------------------*/
/* サイトに読み込むJSファイルを指定 */
/*----------------------------------------------------------------------------------------------------*/



function wp_enqueue_js() {

  /*
   * slicknav
  */
  wp_enqueue_script(
    'slicknav',
    get_stylesheet_directory_uri() . '/vendor/slicknav/jquery.slicknav.js',
    array('jquery'),
    false,
    true
  );

  /*
   * slick
  */
  wp_enqueue_script(
    'slick',
    get_stylesheet_directory_uri() . '/vendor/slick/slick.js',
    array('jquery'),
    false,
    true
  );

  /*
   * common.js
  */
  wp_enqueue_script(
    'os-common',
    get_stylesheet_directory_uri() . '/js/common.js',
    array('jquery'),
    false,
    true
  );

}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_js' );

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no,address=no,email=no">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" type="application/rss+xml" title="RSSフィード">
  <?php if(is_admin_bar_showing()): ?>
    <style type="text/css">
      /* ログイン時に管理バーが表示されている時に読み込ませたいスタイルを定義 */
    </style>
  <?php endif; ?>
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php /* TOPページ */ ?>
  <?php if(is_front_page()): ?>

  <?php /* 特定の固定ページ ※ slug : 固定ページのスラッグ名を指定 */ ?>
  <?php elseif(is_page('slug')): ?>

  <?php /* 上記以外の固定ページ */ ?>
  <?php elseif(is_page()): ?>

  <?php /* 新着情報（アーカイブ ＆ 詳細） */ ?>
  <?php elseif(is_post_type_archive('news') || is_singular('news') || is_tax('newscategory')): ?>

  <?php /* 特定のカスタム投稿のアーカイブ　※ slug: カスタム投稿のスラッグ名を指定 */ ?>
  <?php elseif(is_post_type_archive('slug')): ?>

  <?php /* 特定のカスタム投稿の詳細　※ slug: カスタム投稿のスラッグ名を指定 */ ?>
  <?php elseif(is_singular('slug')): ?>

  <?php /* 特定のカスタム分類アーカイブ　※ slug: カスタム分類のスラッグ名を指定 */ ?>
  <?php elseif(is_tax('slug')): ?>

  <?php /* 「投稿」（ブログ）のアーカイブ */ ?>
  <?php elseif(is_archive() || is_single() || is_home()): ?>

  <?php /* 404ページ */ ?>
  <?php elseif(is_404()): ?>

  <?php /* その他 */ ?>
  <?php else: ?>

  <?php endif; ?>

<!-- header -->
<!--==================================================-->

<header id="header" class="header">
  <div class="container">
    <div class="header-inner">
      <h1 class="header-title family-serif">
        World Map
      </h1>
      <p class="header-subttl">
        A Beautiful WordPress Theme For Bloggers
      </p>
    </div>
  </div>
</header><!-- /header -->
<nav id="navigation-pc" class="navigation">
  <div class="container">
    <?php
    wp_nav_menu(
      array(
        'theme_location'=>'GLOBAL NAVIGATION'
      )
    );
    ?>
  </div>
</nav><!-- .navigation -->
<nav id="navigation-sp"></nav>

<!-- mainvisual -->
<!--==================================================-->

<div class="mainvisual">
  <div class="mainvisual-inner">
    <ul class="slider-for">
      <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/sample01.jpg);"></li>
      <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/sample02.jpg);"></li>
      <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/sample03.jpg);"></li>
      <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/sample04.jpg);"></li>
      <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/sample05.jpg);"></li>
      <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/sample01.jpg);"></li>
      <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/sample02.jpg);"></li>
      <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/sample03.jpg);"></li>
      <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/sample04.jpg);"></li>
      <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/sample05.jpg);"></li>
    </ul>
  </div>
</div><!-- .mainvisual -->

<!-- mainbody -->
<!--==================================================-->

<div class="mainbody">

<!-- content0001 -->
<!--==================================================-->

<div class="content0001">
  <div class="container">
    <div class="content0001-inner">
      <div class="content0001-inner-1">
        <div class="contnt0001-main">
          <div class="content0001-mv-navi">
            <ul class="slider-nav">
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/common/sample01.jpg" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/common/sample02.jpg" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/common/sample03.jpg" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/common/sample04.jpg" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/common/sample05.jpg" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/common/sample01.jpg" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/common/sample02.jpg" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/common/sample03.jpg" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/common/sample04.jpg" alt=""></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/common/sample05.jpg" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="content0001-inner-2">
        <h2 class="content0001-title family-serif">
          最新の記事一覧
        </h2>
        ここにはいります。
      </div>
    </div>
  </div>
</div><!-- .content0001 -->

<!-- content0002 -->
<!--==================================================-->

<div class="content0002">
  <div class="container">
    <div class="content0002-inner">
      ここにコンテンツがはいります
    </div>
  </div>
</div><!-- .content0002 -->



</div><!-- .mainbody -->






  <?php wp_footer(); ?>
  <script>
    (function($){

      /* すべての Javascript の後に記述したいスクリプト */



    })(jQuery);
  </script>
  </body>
</html>
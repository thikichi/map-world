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

<!-- homeslider -->
<!--==================================================-->

<div class="homeslider">
  <div class="container">
    <div class="homeslider-inner">
      <div class="homeslider-inner-1">
        <div class="homeslider-main">
          <div class="homeslider-mv-navi">
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
    </div>
  </div>
</div><!-- .homeslider -->

<!-- homecontent-1 -->
<!--==================================================-->

<div class="homecontent-1">
  <div class="container">
    <div class="homecontent-1-inner">
      <h2 class="homecontent-title family-serif">最新の記事一覧</h2>


      <?php if ( have_posts() ): ?>
        <div class="row homecontent-row">
          <?php while( have_posts() ) : the_post(); ?>
            <div class="col-md-4 matchHeight">
              <div class="homecontent-box">
                <div class="homecontent-box-thumb">

                <?php
                // アイキャッチ画像のIDを取得
                $eyecatch_id  = get_post_thumbnail_id();
                // mediumサイズの画像内容を取得（引数にmediumをセット）
                $eyecatch_img = wp_get_attachment_image_src( $eyecatch_id , 'img_golden_ratio' );
                // 画像IDから画像のメタ情報を取得
                $attachment = get_post($eyecatch_id);
                // 画像キャプション取得
                $eyecatch_caption = $attachment->post_excerpt;
                // 画像説明を取得
                $eyecatch_explain = $attachment->post_content;
                // 画像alt取得
                $eyecatch_alt = get_post_meta($eyecatch_id, '_wp_attachment_image_alt', true);
                // 画像の有無判定
                if($eyecatch_img) {
                  // 画像あり
                  echo '<img class="img-fluid cener-block" src="' . $eyecatch_img[0] . '" alt="' . $eyecatch_alt . '">';
                } else {
                  // 画像なし
                  echo '<img class="img-fluid cener-block" src="http://placehold.jp/72/3d4070/ffffff/750x465.png?text=No Image" alt="">';
                }
                ?>

                </div>
                <h3 class="homecontent-box-subttl family-serif">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h3>
                <div class="homecontent-box-text">
                  <?php the_excerpt(); ?>
                </div>
                <div class="homecontent-meta">
                  <span class="homecontent-meta-category">
                    Category: <?php the_category( ' | ', 'multiple' ); ?>
                  </span>　
                  <span class="homecontent-meta-author">
                    <i class="fas fa-user"></i> <?php the_author(); ?>
                  </span>　
                  <span class="homecontent-meta-tag">
                    <?php the_tags( '<i class="fas fa-tags"></i> ', ' | ' ); ?>
                  </span>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div><!-- .row -->
      <?php else: ?>
        <p class="no-article homecontent-no-article">
          まだ記事の投稿がありません。
        </p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</div><!-- .homecontent-1 -->



</div><!-- .mainbody -->






  <?php wp_footer(); ?>
  <script>
    (function($){

      /* すべての Javascript の後に記述したいスクリプト */



    })(jQuery);
  </script>
  </body>
</html>
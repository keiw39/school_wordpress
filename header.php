<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/ fb# website: http://ogp.me/ns/website#">
  <meta charset="UTF-8" />
  <?php if (is_single()): ?>
  <?php if ($post->post_excerpt) { ?>
  <meta name="description" content="<? echo $post->post_excerpt; ?>" />
  <?php } else {
      $summary = strip_tags($post->post_content);
      $summary = str_replace("\n", '', $summary);
      $summary = mb_substr($summary, 0, 120) . '…';
      ?>
  <meta name="description" content="<?php echo $summary; ?>" />
  <?php } ?>
  <?php elseif (is_home() || is_front_page()): ?>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <?php else: ?>
  <meta name="description" content="<?php the_excerpt(); ?>" />
  <?php endif; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex,nofollow" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- PC・スマホページでの相互の関係性 -->
  <link rel=”canonical” href=”/http://example.com//”>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/27f7c35d10.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.typekit.net/jol6dsm.css" />
  <!-- ファビコンの設定 -->
  <link rel="shortcut icon" href="<?php echo esc_url(
      get_template_directory_uri() . '/img/engress.ico'
  ); ?>" />
  <!-- スマホ用のアプリアイコン -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(
      get_template_directory_uri() . '/img/apple-touch-icon.png'
  ); ?>" />
  <?php wp_head(); ?>
  <!--システム・プラグイン用-->
</head>
<body <?php body_class(); ?>>
  <div id="top" class="wrap" ontouchstart="">
    <!-- header -->
    <header class="l-header">
      <div class="l-header__wrap">
        <div class="l-header__inner-left">
          <!-- header-logo -->
          <h1 class="l-header__logoWrap">
              <a href="<?php echo esc_url(
                  home_url()
              ); ?>" class="l-header__logoLink">
                <img
                  src="<?php echo esc_url(
                      get_template_directory_uri() .
                          '/img/l-header__logo_img.svg'
                  ); ?>"
                  width="136"
                  height="27.1"
                  loading="lazy"
                  alt="ロゴアイコン"
                  class="l-header__logoImg"
                />
              </a>
            </h1>
          <!-- /header-logo -->
          <!-- header-desktop-menu -->
          <div class="l-desktopMenu">
            <nav class="l-desktopMenu__nav">
              <div class="l-desktopMenu__navWrap">
                <ul class="l-desktopMenu__navList">
                  <li class="l-desktopMenu__navItem">
                    <a href="<?php echo esc_url(
                        home_url()
                    ); ?>" class="l-desktopMenu__navLink">ホーム</a>
                  </li>
                  <li class="l-desktopMenu__navItem">
                    <a href="<?php echo esc_url(
                        home_url('news')
                    ); ?>" class="l-desktopMenu__navLink">お知らせ</a>
                  </li>
                  <li class="l-desktopMenu__navItem">
                    <a href="<?php echo esc_url(
                        home_url('blog')
                    ); ?>" class="l-desktopMenu__navLink">ブログ</a>
                  </li>
                  <li class="l-desktopMenu__navItem">
                    <a href="<?php echo esc_url(
                        home_url('price')
                    ); ?>" class="l-desktopMenu__navLink">コース・料金</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <!-- /header-desktop-menu -->
        </div>
        <div class="l-header__inner-right">
          <nav class="l-desktopMenu__nav">
            <div class="l-desktopMenu__navWrap">
              <ul class="l-desktopMenu__navList">
                <li class="l-desktopMenu__navItem">
                  <p class="l-desktopMenu__navText">平日08:00〜20:00</p>
                  <a href="tel:0123-456-7890" class="-tel" target="_blank">
                    <img src="<?php echo esc_url(
                        get_template_directory_uri() .
                            '/img/l-desktopMenu_tel_icon.svg'
                    ); ?>" width="10" height="14.7" loading="lazy" alt="電話のアイコン画像" class="l-desktopMenu__navItem_telImg" />
                    0123-456-7890</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url(
                        home_url('contact')
                    ); ?>" class="l-desktopMenu__navLink">資料請求</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url(
                      home_url('contact')
                  ); ?>" class="l-desktopMenu__navLink">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!-- header-nav-toggle -->
        <a id="js-hamburger__toggle" class="l-hamburger__toggle disable">
          <div class="l-hamburger__toggleWrap">
            <span class="l-hamburger__toggleSpan"></span>
            <span class="l-hamburger__toggleSpan"></span>
            <span class="l-hamburger__toggleSpan"></span>
          </div>
          <p class="l-hamburger__toggleText">MENU</p>
        </a>
        <!-- /header-nav-toggle -->
      </div>
    </header>
    <!-- /header -->
    <!-- header-sp-menu -->
    <div class="l-spMenu">
      <div class="l-spMenu__inner">
        <nav class="l-spMenu__nav">
          <ul class="l-spMenu__navList">
            <li class="l-spMenu__navItem">
              <a href="<?php echo esc_url(
                  home_url()
              ); ?>" class="l-spMenu__navLink">ホーム</a>
            </li>
            <li class="l-spMenu__navItem">
              <a href="<?php echo esc_url(
                  home_url('news')
              ); ?>" class="l-spMenu__navLink">お知らせ</a>
            </li>
            <li class="l-spMenu__navItem">
              <a href="<?php echo esc_url(
                  home_url('blog')
              ); ?>" class="l-spMenu__navLink">ブログ</a>
            </li>
            <li class="l-spMenu__navItem">
              <a href="<?php echo esc_url(
                  home_url('price')
              ); ?>" class="l-spMenu__navLink">コース・料金</a>
            </li>
          </ul>
          <div class="l-spMenu__navWrap">
            <ul class="l-spMenu__navList">
              <li class="l-spMenu__navItem">
                <div class="l-spMenu__navItem">
                  <a href="<?php echo esc_url(
                      home_url('contact')
                  ); ?>" class="l-spMenu__navLink">資料請求</a>
                </div>
                <div class="l-spMenu__navItem">
                  <a href="<?php echo esc_url(
                      home_url('contact')
                  ); ?>" class="l-spMenu__navLink">お問い合わせ</a>
                </div>
              </li>
              <li class="l-spMenu__navItem">
                <p class="l-spMenu__navText">平日08:00〜20:00</p>
                <a href="tel:0123-456-7890" class="-tel" target="_blank">
                  <img src="<?php echo esc_url(
                      get_template_directory_uri() .
                          '/img/l-desktopMenu_tel_icon.svg'
                  ); ?>" width="10" height="14.7" loading="lazy" alt="電話のアイコン画像" class="l-spMenu__navItem_telImg" />
                  0123-456-7890</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- /header-sp-menu -->
    <!-- bg-black -->
    <div class="l-spMenu__bg"></div>
    <!-- /bg-black -->
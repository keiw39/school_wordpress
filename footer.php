      <!-- footer -->
      <footer class="l-footer">
        <div class="l-footer__inner">
          <div class="l-footer__contactWrap">
            <div class="l-footer__documentInner">
              <h2 class="l-section__title">まずは無料で資料請求から</h2>
              <div class="c-btn__wrap">
                <a href="<?php echo esc_url(
                    home_url('contact')
                ); ?>" class="c-btn">資料請求</a>
              </div>
              <a href="<?php echo esc_url(
                  home_url('contact')
              ); ?>" class="l-section__contactLink">お問い合わせ</a>
            </div>
            <div class="l-footer__contactInner">
              <div class="l-footer__contactDetail">
                <p class="l-footer__contactText">
                  お電話でのお問い合わせはこちら
                </p>
                <a href="tel:0123-456-7890" class="-tel" target="_blank">0123-456-7890</a>
                <p class="l-footer__contactTime">
                  平日<time>08:00〜20:00</time>
                </p>
              </div>
            </div>
          </div>
          <div class="l-footer__detailWrap">
            <nav class="l-footer__nav">
              <ul class="l-footer__navList">
                <li class="l-footer__navItem">
                  <a href="<?php echo esc_url(
                      home_url()
                  ); ?>" class="l-footer__navLink">ホーム</a>
                </li>
                <li class="l-footer__navItem">
                  <a href="<?php echo esc_url(
                      home_url('news')
                  ); ?>" class="l-footer__navLink">お知らせ</a>
                </li>
                <li class="l-footer__navItem">
                  <a href="<?php echo esc_url(
                      home_url('blog')
                  ); ?>" class="l-footer__navLink">ブログ</a>
                </li>
                <li class="l-footer__navItem">
                  <a href="<?php echo esc_url(
                      home_url('price')
                  ); ?>" class="l-footer__navLink">コース・料金</a>
                </li>
              </ul>
            </nav>
            <div class="l-footer__company">
              <h1 class="l-footer__logoWrap">
                <a href="<?php echo esc_url(
                    home_url()
                ); ?>" class="l-footer__logoLink">
                  <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() .
                            '/img/l-footer__logo_img.svg'
                    ); ?>"
                    width="159"
                    height="31"
                    loading="lazy"
                    alt="ロゴアイコン"
                    class="l-footer__logoImg"
                  />
                </a>
              </h1>
              <a href="tel:0123-456-7890" class="-tel" target="_blank">
                <img src="<?php echo esc_url(
                    get_template_directory_uri() . '/img/l-footer__tel_icon.svg'
                ); ?>" width="10" height="14.7" loading="lazy" alt="電話のアイコン画像" class="l-footer__telImg" />
                0123-456-7890</a>
              <p class="l-footer__companyTime">平日<time>08:00〜20:00</time></p>
            </div>
          </div>
        </div>
        <div class="l-footer__copyWrap">
          <small class="l-footer__copy">© 2020 Engress.</small>
        </div>
      </footer>
      <?php wp_footer(); ?>
      <!--システム・プラグイン用-->
      <!-- /footer -->
      </div>
      <script>
new ScrollHint('.js-scrollable', {
  i18n: {
    scrollable: 'スクロールできます'
  }
});
      </script>
      </body>
      </html>
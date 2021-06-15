<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: コース・料金ページ
*/
?>
<!-- main -->
<main class=" l-main">
  <article>
    <!-- page-hero -->
    <header class="l-pageHero -price">
      <h1 class="l-pageHero__title">コース・料金</h1>
    </header>
    <!-- /page-hero -->
    <!-- breadcrumbs -->
    <?php if (is_front_page()): ?>
    <?php else: ?>
    <div class="l-breadcrumbs">
      <div class="l-container">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
      </div>
    </div>
    <?php endif; ?>
    <!-- /breadcrumbs -->
    <!-- section-system -->
    <section class="p-price__sec-system">
      <div class="l-container">
        <h2 class="l-section__title">料金体系</h2>
        <div class="l-contents__wrap">
          <div class="c-listPrice__system-price">入会金 39,800円</div>
          <div class="c-listPrice__system-plus">
            <img src="<?php echo esc_url(
                get_template_directory_uri() .
                    '/img/c-listPrice__system-plus_icon.svg'
            ); ?>" width="18.8" height="19" loading="lazy" alt="プラス記号" class="c-listPrice__system-plus_icon" />
          </div>
          <div class="c-listPrice__system-price">月額費用</div>
        </div>
        <p class="l-section__text">
                Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
              </p>
      </div>
    </section>
    <!-- /section-system -->
    <!-- section-price -->
    <section class="p-price__sec-price">
      <div class="l-container">
        <h2 class="l-section__title">料金表</h2>
        <div class="l-contents__wrap">
          <ul id="js-scrollable" class="c-listPrice__priceList js-scrollable">
            <li class="c-listPrice__priceItem">
              <div class="c-listPrice__priceName">基礎プラン</div>
              <div class="c-listPrice__priceDetail">
                <p class="c-listPrice__price"><?php the_field(
                    '基礎プラン'
                ); ?>円〜</p>
                <p class="c-listPrice__priceText">*月額（税抜価格）</p>
                <ul class="c-listPrice__detailList">
                  <li class="c-listPrice__detailText">
                    カリキュラム作成
                  </li>
                  <li class="c-listPrice__detailText">
                    TOEFL学習サポート
                  </li>
                  <li class="c-listPrice__detailText">
                    週一回のビデオMTG
                  </li>
                </ul>
              </div>
            </li>
            <li class="c-listPrice__priceItem">
              <div class="c-listPrice__priceName">演習プラン</div>
              <div class="c-listPrice__priceDetail">
                <p class="c-listPrice__price"><?php the_field(
                    '演習プラン'
                ); ?>円〜</p>
                <p class="c-listPrice__priceText">*月額（税抜価格）</p>
                <ul class="c-listPrice__detailList">
                  <li class="c-listPrice__detailText">
                    カリキュラム作成
                  </li>
                  <li class="c-listPrice__detailText">
                    TOEFL学習サポート
                  </li>
                  <li class="c-listPrice__detailText">
                    週一回のビデオMTG
                  </li>
                  <li class="c-listPrice__detailText">
                    週二回の模試(解説付き)
                  </li>
                </ul>
              </div>
            </li>
            <li class="c-listPrice__priceItem">
              <div class="c-listPrice__priceName">
                おすすめ <br />志望校対策プラン
              </div>
              <div class="c-listPrice__priceDetail">
                <p class="c-listPrice__price"><?php the_field(
                    '志望校対策プラン'
                ); ?>円〜</p>
                <p class="c-listPrice__priceText">*月額（税抜価格）</p>
                <ul class="c-listPrice__detailList">
                  <li class="c-listPrice__detailText">
                    カリキュラム作成
                  </li>
                  <li class="c-listPrice__detailText">
                    TOEFL学習サポート
                  </li>
                  <li class="c-listPrice__detailText">
                    週一回のビデオMTG
                  </li>
                  <li class="c-listPrice__detailText">
                    週二回の模試(解説付き)
                  </li>
                  <li class="c-listPrice__detailText">
                    週一回の英語面接対策
                  </li>
                </ul>
              </div>
            </li>
            <li class="c-listPrice__priceItem">
              <div class="c-listPrice__priceName">フレックスプラン</div>
              <div class="c-listPrice__priceDetail">
                <p class="c-listPrice__price"><?php the_field(
                    'フレックスプラン'
                ); ?>円〜</p>
                <p class="c-listPrice__priceText">*月額（税抜価格）</p>
                <ul class="c-listPrice__detailList">
                  <li class="c-listPrice__detailText">
                    ＊別途ご相談ください
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- /section-price -->
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>
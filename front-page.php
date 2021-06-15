<!-- header呼び出し -->
<?php get_header(); ?>
<!-- main -->
<main class="l-main">
  <article>
    <!-- main visual -->
    <div class="p-home__mv">
      <div class="p-home__mv__textWrap">
        <h2 class="p-home__mv__catchTitle">TOEFL対策はEngress</h2>
        <p class="p-home__mv__subTitle">
                日本人へのTOEFL指導歴豊かな講師陣の<br />
                コーチング型TOEFLスクール
              </p>
        <div class="c-btn__wrap">
          <a href="<?php echo esc_url(
              home_url('contact')
          ); ?>" class="c-btn">資料請求</a>
        </div>
        <a href="<?php echo esc_url(
            home_url('contact')
        ); ?>" class="l-section__contactLink">お問い合わせ</a>
      </div>
    </div>
    <!-- /main visual -->
    <!-- section-about -->
    <section id="about" class="p-home__sec-about">
      <div class="l-container">
        <h2 class="l-section__title">
                TOEFL学習でこんな悩みありませんか？
              </h2>
        <div class="l-section__troublewrap">
          <ul>
            <li>
              勉強の習慣が<br />
              身についていない
            </li>
            <li>
              勉強しているはず<br />
              なのに点数が伸びない
            </li>
            <li>
              正しい勉強方法が<br />
              わからない
            </li>
          </ul>
        </div>
        <div class="p-home__sec-about__aboutWrap">
          <div class="p-home__sec-about__lineWrap">
            <h3 class="l-section__title">
                    <span>Engressは</span><br />
                    <span><span>TOEFLに特化したスクール</span>です</span>
                  </h3>
            <p class="l-section__text">
                    完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br />
                    TOEFLの苦手分野を克服します。
                  </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /section-about -->
    <!-- section-strong -->
    <section id="strong" class="p-home__sec-strong">
      <div class="l-container">
        <h2 class="l-section__title">
                TOEFL対策に特化したEngress3つの強み
              </h2>
        <div class="l-contents__wrap">
          <ol class="c-listStrong__itemList">
            <li class="c-listStrong__item">
              <div class="c-listStrong__imgWrap">
                <picture>
                  <source srcset="<?php echo esc_url(
                      get_template_directory_uri() .
                          '/img/c-listStrong__img_01@2x.jpg.webp'
                  ); ?>" type="image/webp" />
                  <source srcset="<?php echo esc_url(
                      get_template_directory_uri() .
                          '/img/c-listStrong__img_01@2x.jpg'
                  ); ?>" type="image/jpg" />
                  <img src="<?php echo esc_url(
                      get_template_directory_uri() .
                          '/img/c-listStrong__img_01@2x.jpg'
                  ); ?>" width="350" height="240" loading="lazy" alt="カリキュラム作成中の画像" class="c-listStrong__img" />
                </picture>
              </div>
              <div class="c-listStrong__textWrap">
                <p class="c-listStrong__itemLabel">特徴1</p>
                <h3 class="c-listStrong__itemTitle">
                        TOEFLに最適化された<br />
                        無駄のないカリキュラム
                      </h3>
                <p class="l-section__text">
                        TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                      </p>
              </div>
            </li>
            <li class="c-listStrong__item">
              <div class="c-listStrong__imgWrap">
                <picture>
                  <source srcset="<?php echo esc_url(
                      get_template_directory_uri() .
                          '/img/c-listStrong__img_02@2x.jpg.webp'
                  ); ?>" type="image/webp" />
                  <source srcset="<?php echo esc_url(
                      get_template_directory_uri() .
                          '/img/c-listStrong__img_02@2x.jpg'
                  ); ?>" type="image/jpg" />
                  <img src="<?php echo esc_url(
                      get_template_directory_uri() .
                          '/img/c-listStrong__img_02@2x.jpg'
                  ); ?>" width="350" height="240" loading="lazy" alt="講師の画像" class="c-listStrong__img" />
                </picture>
              </div>
              <div class="c-listStrong__textWrap">
                <p class="c-listStrong__itemLabel">特徴2</p>
                <h3 class="c-listStrong__itemTitle">
                        日本人指導歴10年以上の<br />
                        経験豊富な講師陣
                      </h3>
                <p class="l-section__text">
                        Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
                      </p>
              </div>
            </li>
            <li class="c-listStrong__item">
              <div class="c-listStrong__imgWrap">
                <picture>
                  <source srcset="<?php echo esc_url(
                      get_template_directory_uri() .
                          '/img/c-listStrong__img_03@2x.jpg.webp'
                  ); ?>" type="image/webp" />
                  <source srcset="<?php echo esc_url(
                      get_template_directory_uri() .
                          '/img/c-listStrong__img_03@2x.jpg'
                  ); ?>" type="image/jpg" />
                  <img src="<?php echo esc_url(
                      get_template_directory_uri() .
                          '/img/c-listStrong__img_03@2x.jpg'
                  ); ?>" width="350" height="240" loading="lazy" alt="点数アップの画像" class="c-listStrong__img" />
                </picture>
              </div>
              <div class="c-listStrong__textWrap">
                <p class="c-listStrong__itemLabel">特徴3</p>
                <h3 class="c-listStrong__itemTitle">
                        平均3ヶ月でTOEFL iBT20点アップ
                      </h3>
                <p class="l-section__text">
                        Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
                      </p>
              </div>
            </li>
          </ol>
        </div>
        <div class="l-contents__wrap">
          <h3 class="c-listStrong__itemTitle">
                  Engressの料金プランはこちら
                </h3>
          <div class="c-btn__wrap">
            <a href="<?php echo esc_url(
                home_url('price')
            ); ?>" class="c-btn -price">料金を見てみる</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /section-strong -->
    <!-- section-success -->
    <section id="success" class="p-home__sec-success">
      <div class="l-container">
        <h2 class="l-section__title">TOEFL成功事例</h2>
        <div class="l-contents__wrap">
          <ul class="c-listSuccess__itemList">
            <li class="c-listSuccess__item">
              <p class="c-listSuccess__text">
                <?php the_field('実績①'); ?>
                    </p>
              <div class="c-listSuccess__detail">
                <div class="c-listSuccess__imgWrap">
                  <picture>
                    <img src="<?php the_field(
                        'イメージ画像①'
                    ); ?>" width="125" height="140" loading="lazy" alt="インタビューを受けたT.Fujiyamaさんの画像" class="c-listSuccess__img" />
                  </picture>
                </div>
                <div class="c-listSuccess__detailInner">
                  <div class="c-listSuccess__detailWrap">
                    <p class="c-listSuccess__label"><?php the_field(
                        '職業①'
                    ); ?></p>
                    <p class="c-listSuccess__label"><?php the_field(
                        '名前①'
                    ); ?></p>
                  </div>
                  <p class="c-listSuccess__label"><?php the_field(
                      '点数①'
                  ); ?></p>
                </div>
              </div>
            </li>
            <li class="c-listSuccess__item">
              <p class="c-listSuccess__text">
                      <?php the_field('実績②'); ?>
                    </p>
              <div class="c-listSuccess__detail">
                <div class="c-listSuccess__imgWrap">
                  <picture>
                    <img src="<?php the_field(
                        'イメージ画像②'
                    ); ?>" width="138" height="141" loading="lazy" alt="インタビューを受けたY.Takiyamaさんの画像" class="c-listSuccess__img" />
                  </picture>
                </div>
                <div class="c-listSuccess__detailInner">
                  <div class="c-listSuccess__detailWrap">
                    <p class="c-listSuccess__label"><?php the_field(
                        '職業②'
                    ); ?></p>
                    <p class="c-listSuccess__label"><?php the_field(
                        '名前②'
                    ); ?></p>
                  </div>
                  <p class="c-listSuccess__label"><?php the_field(
                      '点数②'
                  ); ?></p>
                </div>
              </div>
            </li>
            <li class="c-listSuccess__item">
              <p class="c-listSuccess__text">
                            <?php the_field('実績③'); ?>
                          </p>
              <div class="c-listSuccess__detail">
                <div class="c-listSuccess__imgWrap">
                  <picture>
                    <img src="<?php the_field(
                        'イメージ画像③'
                    ); ?>" width="135" height="138" loading="lazy" alt="インタビューを受けたM.Yamadaさんの画像" class="c-listSuccess__img" />
                  </picture>
                </div>
                <div class="c-listSuccess__detailInner">
                  <div class="c-listSuccess__detailWrap">
                    <p class="c-listSuccess__label"><?php the_field(
                        '職業③'
                    ); ?></p>
                    <p class="c-listSuccess__label"><?php the_field(
                        '名前③'
                    ); ?></p>
                  </div>
                  <p class="c-listSuccess__label"><?php the_field(
                      '点数③'
                  ); ?></p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- /section-success -->
    <!-- section-flow -->
    <section id="flow" class="p-home__sec-flow">
      <div class="l-container">
        <h2 class="l-section__title">ご利用の流れ</h2>
        <div class="l-contents__wrap">
          <ol class="c-listFlow__itemList">
            <li class="c-listFlow__item">
              <div class="c-listFlow__detailWrap">
                <div class="c-listFlow__number">01</div>
                <div class="c-listFlow__title">お問い合わせ</div>
              </div>
              <div class="c-listFlow__text">
                まずはフォームまたはお電話からお申し込みください。
              </div>
            </li>
            <li class="c-listFlow__item">
              <div class="c-listFlow__detailWrap">
                <div class="c-listFlow__number">02</div>
                <div class="c-listFlow__title">ヒアリング</div>
              </div>
              <div class="c-listFlow__text">
                現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。
              </div>
            </li>
            <li class="c-listFlow__item">
              <div class="c-listFlow__detailWrap">
                <div class="c-listFlow__number">03</div>
                <div class="c-listFlow__title">学習プランのご提供</div>
              </div>
              <div class="c-listFlow__text">
                目標達成のために最適な学習プランをご提案致します。
              </div>
            </li>
            <li class="c-listFlow__item">
              <div class="c-listFlow__detailWrap">
                <div class="c-listFlow__number">04</div>
                <div class="c-listFlow__title">ご入会</div>
              </div>
              <div class="c-listFlow__text">
                お申込み完了後、レッスンがスタートします。
              </div>
            </li>
          </ol>
        </div>
      </div>
    </section>
    <!-- /section-flow -->
    <!-- section-faq -->
    <section id="faq" class="p-home__sec-faq">
      <div class="l-container">
        <h2 class="l-section__title">よくある質問</h2>
        <div class="c-listFaq__wrap">
          <details class="c-listFaq__accordionItem">
            <summary class="c-listFaq__accordionQuestion">
              Engressはサラリーマンでも学習を続けられるでしょうか？
            </summary>
            <p class="c-listFaq__accordionAnswer">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                  </p>
          </details>
          <details class="c-listFaq__accordionItem">
            <summary class="c-listFaq__accordionQuestion">
              教材はオリジナルのものを使用しているのでしょうか？
            </summary>
            <p class="c-listFaq__accordionAnswer">
                    Engressでは日本人指導歴10年以上の経験豊富な講師陣が多数おり、目標達成のための完全オリジナルの教材を取り揃えております。
                  </p>
          </details>
          <details class="c-listFaq__accordionItem">
            <summary class="c-listFaq__accordionQuestion">
              講師に日本人はいますか？
            </summary>
            <p class="c-listFaq__accordionAnswer">
                    はい、います。Engressには経験豊富な日本人講師もおりますので、「外国人講師だと最初は不安...」といった悩みにも対応できます。
                  </p>
          </details>
          <details class="c-listFaq__accordionItem">
            <summary class="c-listFaq__accordionQuestion">
              TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？
            </summary>
            <p class="c-listFaq__accordionAnswer">
                    Engressでは海外大学合格のみのカリキュラム構築は行っておりません。しかし、TOFEL高スコアによる海外大学合格のためのアプローチ法は複数ご提案できますので、まずはご相談ください。
                  </p>
          </details>
        </div>
      </div>
    </section>
    <!-- /section-faq -->
    <!-- section-news -->
    <section id="news" class="p-home__sec-news">
      <div class="l-container">
        <div class="c-listNews__wrap">
          <div class="c-listNews__blogWrap">
            <h2 class="l-section__title">ブログ</h2>
            <ul class="c-listNews__newsList">
              <?php
              $count = 1; // ナンバリング出力
              $args = [
                  'post_type' => 'post', // 投稿タイプを指定
                  'posts_per_page' => 3, // 表示する記事数
                  'paged' => get_query_var('paged'),
              ];
              $my_query = new WP_Query($args);
              if ($my_query->have_posts()):
                  while ($my_query->have_posts()):
                      $my_query->the_post(); ?>
              <li class="c-listNews__newsItem">
                <a href="<?php the_permalink(); ?>" class="c-listNews__newsLink">
                  <article>
                    <figure class="c-listNews__newsInner">
                      <div class="c-listNews__catLabel"> <?php
                      $category = get_the_category();
                      echo $category[0]->name;
                      ?></div>
                      <div class="c-listNews__newsThumb">
                        <picture>
                          <?php if (has_post_thumbnail()):
                              the_post_thumbnail('large'); ?>
                          <?php
                          else:
                               ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" loading="lazy" alt="no-image" class="c-listNews__img" />
                          <?php
                          endif; ?>
                        </picture>
                      </div>
                      <figcaption class="c-listNews__textWrap">
                        <h3 class="c-listNews__newsTitle">
<?php if (mb_strlen($post->post_title) > 30) {
    $title = mb_substr($post->post_title, 0, 30);
    echo $title . '...';
} else {
    echo $post->post_title;
}
?>
                              </h3>
                        <time class="c-listNews__newsDate">
                          <?php the_time('Y-m-d'); ?>
                        </time>
                      </figcaption>
                    </figure>
                  </article>
                </a>
              </li>
              <?php
                  endwhile;
              endif;
              wp_reset_postdata();
              ?>
            </ul>
          </div>
          <div class="c-listNews__newsWrap">
            <h2 class="l-section__title">お知らせ</h2>
            <ul class="c-listNews__newsList">
              <?php
              $count = 1; // ナンバリング出力
              $args = [
                  'post_type' => 'news', // 投稿タイプを指定
                  'posts_per_page' => 3, // 表示する記事数
                  'paged' => get_query_var('paged'),
              ];
              $my_query = new WP_Query($args);
              if ($my_query->have_posts()):
                  while ($my_query->have_posts()):
                      $my_query->the_post(); ?>
              <li class="c-listNews__newsItem">
                <a href="<?php the_permalink(); ?>" class="c-listNews__newsLink">
                  <time class="c-listNews__newsDate"> <?php the_time(
                      'Y-m-d'
                  ); ?></time>
                  <h3 class="c-listNews__newsTitle">
<?php if (mb_strlen($post->post_title) > 30) {
    $title = mb_substr($post->post_title, 0, 30);
    echo $title . '...';
} else {
    echo $post->post_title;
}
?>
                        </h3>
                </a>
              </li>
              <?php
                  endwhile;
              endif;
              wp_reset_postdata();
              ?>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- /section-news -->
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>
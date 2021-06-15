<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: お問い合わせページ
*/
?>
<!-- main -->
<main class="l-main">
  <article>
    <!-- page-hero -->
    <header class="l-pageHero -contact">
      <h1 class="l-pageHero__title">お問い合わせ・資料請求</h1>
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
    <!-- section-contact -->
    <section class="p-contact__sec-contact">
      <div class="l-container">
        <h3 class="l-section__title">
                弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
              </h3>
        <?php the_content(); ?>
      </div>
    </section>
    <!-- /section-contact -->
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>
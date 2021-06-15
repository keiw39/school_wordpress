<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: 404ページ
*/
?>
<!-- main -->
<main class="l-main">
  <article>
    <!-- page-hero -->
    <header class="l-pageHero -single"></header>
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
    <!-- section-404 -->
    <section class="p-404">
      <div class="l-container">
        <h2 class="l-section__title">404</h2>
        <p class="l-section__text">NOT FOUND</p>
        <p class="l-section__text">
                お探しのページは見つかりません。<br />
                削除されたかURLが変更された可能性があります。
              </p>
        <div class="c-btn__wrap">
          <a href="<?php echo esc_url(
              home_url()
          ); ?>" class="l-section__contactLink">TOPヘ戻る</a>
        </div>
      </div>
    </section>
    <!-- /section-404 -->
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>
<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: CONTACT THANKSページ
*/
?>
<!-- main -->
<main class="l-main">
  <article>
    <!-- page-hero -->
    <header class="l-pageHero -contact-thanks"></header>
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
    <!-- section-contact-thanks -->
    <section class="p-contact__sec-thanks">
      <div class="l-container">
        <h2 class="l-section__title">
                お問い合わせいただきありがとうございます<br />
                内容を確認した後、担当者よりご連絡いたします
              </h2>
        <a href="<?php echo esc_url(
            home_url()
        ); ?>" class="l-section__contactLink">ホームへ戻る</a>
      </div>
    </section>
    <!-- /section-contact-thanks -->
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>
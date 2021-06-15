<!-- header呼び出し -->
<?php get_header(); ?>
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
    <!-- section-news -->
    <section class="p-single__sec-news">
      <div class="l-container">
        <div class="l-single__container">
          <div class="l-single-content__wrap">
            <main class="l-single-content__main">
              <?php if (have_posts()):
                  while (have_posts()):
                      the_post(); ?>
              <article class="l-single-content__article">
                <header class="l-single-content__header">
                  <h1 class="l-single-content__entryTitle">
  <?php the_title(); ?>
                        </h1>
                  <div class="l-single-content__entryDetail">
                    <time class="l-single-content__entryDate">
                      <?php the_time('Y-m-d'); ?>
                    </time>
                  </div>
                </header>
                <div class="l-single-content__entry-content">
                  <?php the_content(); ?>
                </div>
                <?php
                  endwhile;
              endif; ?>
              </article>
            </main>
          </div>
        </div>
      </div>
    </section>
    <!-- /section-blog -->
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>
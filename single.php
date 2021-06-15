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
    <!-- section-blog -->
    <section class="p-single__sec-single">
      <div class="l-container">
        <div class="l-single__container">
          <div class="l-single-content__wrap">
            <main class="l-single-content__main">
              <?php if (have_posts()):
                  while (have_posts()):
                      the_post(); ?>
              <article class="l-single-content__article">
                <header class="l-single-content__header">
                  <span class="l-single-content__entryLabel">
                    <?php if (!is_category() && has_category()): ?>
                    <a href="" class="l-single-content__entryLabel__link">
                      <?php
                      $category = get_the_category();
                      echo $category[0]->name;
                      ?>
                    </a>
                    <?php endif; ?>
                  </span>
                  <h1 class="l-single-content__entryTitle">
                          <?php the_title(); ?>
                        </h1>
                  <div class="l-single-content__entryDetail">
                    <div class="l-single-content__socialWrap">
                      <?php wp_social_bookmarking_light_output_e(
                          null,
                          get_permalink(),
                          the_title('', '', false)
                      ); ?>
                    </div>
                    <time class="l-single-content__entryDate">
                      <?php the_time('Y-m-d'); ?>
                    </time>
                  </div>
                  <figre class="l-single-content__entryThumb">
                    <?php if (has_post_thumbnail()):
                        the_post_thumbnail('large'); ?>
                    <?php
                    else:
                         ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" loading="lazy" alt="no-image" class="l-single-content__entryThumb_img" />
                    <?php
                    endif; ?>
                  </figre>
                </header>
                <div class="l-single-content__entry-content">
                  <?php the_content() ?>
                </div>
                <?php
                  endwhile;
              endif; ?>
              </article>
            </main>
            <div class="l-single-recommended__widget">
              <div class="l-single-recommended__widgetBox">
                <h2 class="l-single-recommended__widgetTitle">
                        おすすめの記事
                      </h2>
                <div class="l-single-recommended__widgetInner">
                  <ul class="l-single-recommended__widgetList">
                    <?php
                    global $post;
                    $tag_slug = 'pickup'; // タグのスラッグ
                    $tag_posts = get_posts([
                        'post_type' => 'post', // 投稿タイプ
                        //'tag_id' => 1,  タグIDを番号で指定する場合
                        'tag' => $tag_slug, // タグをスラッグで指定する場合
                        'posts_per_page' => 3, // 表示件数
                        'orderby' => 'date', // 基準になる表示順
                        'order' => 'DESC', // 昇順・降順
                    ]);
                    if ($tag_posts):
                        foreach ($tag_posts as $post):
                            setup_postdata($post); ?>
                    <li class="l-single-recommended__widgetItem">
                      <a href="<?php the_permalink(); ?>" class="l-single-recommended__widgetLink">
                        <article>
                          <figure class="
                                    l-single-recommended__widgetItem__inner
                                  ">
                            <div class="
                                      l-single-recommended__widgetItem__thumb
                                    ">
                              <span class="
                                        l-single-recommended__widgetItem__newsLabel
                                      ">
                                <?php
                                $category = get_the_category();
                                echo $category[0]->name;
                                ?>
                              </span>
                              <picture>
                                <?php if (has_post_thumbnail()):
                                    the_post_thumbnail('large'); ?>
                                <?php
                                else:
                                     ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" loading="lazy" alt="no-image" class="l-single-recommended__widgetItem__img" />
                                <?php
                                endif; ?>
                              </picture>
                            </div>
                            <figcaption class="
                                      l-single-recommended__widgetItem__textWrap
                                    ">
                              <time class="
                                        l-single-recommended__widgetItem__newsDate
                                      ">
                                <?php the_time('Y-m-d'); ?>
                              </time>
                              <h3 class="
                                        l-single-recommended__widgetItem__newsTitle
                                      ">
                                    <?php if (mb_strlen($post->post_title) > 30) {
    $title = mb_substr($post->post_title, 0, 30);
    echo $title . '...';
} else {
    echo $post->post_title;
} ?>
                                    </h3>
                            </figcaption>
                          </figure>
                        </article>
                      </a>
                    </li>
                    <?php
                        endforeach;
                    endif;
                    wp_reset_postdata();
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </section>
    <!-- /section-blog -->
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>
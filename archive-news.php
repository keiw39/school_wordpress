<!-- header呼び出し -->
<?php get_header(); ?>
<!-- main -->
<main class="l-main">
  <article>
    <!-- page-hero -->
    <header class="l-pageHero -news">
      <h1 class="l-pageHero__title">お知らせ</h1>
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
    <!-- section-blog -->
    <section class="p-news__sec-news">
      <div class="l-container">
        <h2 class="l-section__title">お知らせ一覧</h2>
        <div class="l-contents__wrap">
          <ul class="c-listBlog__postList">
            <?php
            $count = 1; // ナンバリング出力
            $args = [
                'post_type' => 'news', // 投稿タイプを指定
                'posts_per_page' => 10, // 表示する記事数
                'paged' => get_query_var('paged'),
            ];
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()):
                while ($my_query->have_posts()):
                    $my_query->the_post(); ?>
            <li class="c-listBlog__postItem">
              <a href="<?php the_permalink(); ?>" class="c-listBlog__postLink">
                <div class="c-listBlog__postInner">
                  <time class="c-listBlog__postDate"><?php the_time(
                      'Y-m-d'
                  ); ?></time>
                  <h3 class="c-listBlog__postTitle">
                  <?php if (mb_strlen($post->post_title) > 30) {
    $title = mb_substr($post->post_title, 0, 30);
    echo $title . '...';
} else {
    echo $post->post_title;
}
?>
                        </h3>
                </div>
              </a>
            </li>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
          </ul>
        </div>
        <!-- pagination -->
        <div class="l-pagination">
          <div class="l-paginationWrap">
            <?php if (function_exists('pagination')):
                pagination($my_query->max_num_pages, $paged);
            endif; ?>
          </div>
        </div>
        <?php wp_reset_postdata(); ?>
        <!-- /pagination -->
      </div>
    </section>
    <!-- /section-blog -->
  </article>
</main>
<!-- footer呼び出し -->
<?php get_footer();
?>
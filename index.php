<!-- header呼び出し -->
<?php get_header(); ?>
<!-- main -->
<main class="l-main">
  <article>
    <!-- page-hero -->
    <header class="l-pageHero -blog">
      <h1 class="l-pageHero__title">ブログ</h1>
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
    <section class="p-blog__sec-blog">
      <div class="l-container">
        <h2 class="l-section__title">新着一覧</h2>
        <div class="l-contents__wrap">
          <ul class="c-listBlog__postList">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
            <li class="c-listBlog__postItem">
              <a href="<?php the_permalink(); ?>" class="c-listBlog__postLink">
                <article>
                  <figure class="c-listBlog__postInner">
                    <div class="c-listBlog__postThumb">
                      <div class="c-listBlog__postCat">
                        <?php
                        $category = get_the_category();
                        echo $category[0]->name;
                        ?>
                      </div>
                      <picture>
                        <?php if (has_post_thumbnail()):
                            the_post_thumbnail('large'); ?>
                        <?php
                        else:
                             ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" loading="lazy" alt="no-image" class="c-listBlog__postImg" />
                        <?php
                        endif; ?>
                      </picture>
                    </div>
                    <figcaption class="c-listBlog__postItem__textWrap">
                      <time class="c-listBlog__postDate">
                        <?php the_time('Y-m-d'); ?>
                      </time>
                      <h3 class="c-listBlog__postTitle">
                             <?php if (mb_strlen($post->post_title) > 30) {
    $title = mb_substr($post->post_title, 0, 30);
    echo $title . '...';
} else {
    echo $post->post_title;
} ?>
                            </h3>
                      <p class="c-listBlog__postText">
                              <?php the_excerpt(); ?>
                            </p>
                    </figcaption>
                  </figure>
                </article>
              </a>
            </li>
            <?php
                endwhile;
            endif; ?>
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
        <!-- /pagination -->
      </div>
    </section>
    <!-- /section-blog -->
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer();
?>
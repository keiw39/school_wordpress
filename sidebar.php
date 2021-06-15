    <aside class="l-single-sidebar__wrap">
      <div class="l-single-sidebar__widget">
        <div class="l-single-sidebar__widgetBox">
          <h2 class="l-single-sidebar__widgetTitle">関連記事</h2>
          <div class="l-single-sidebar__widgetInner">
            <ul class="l-single-sidebar__widgetList">
              <?php
              // 同じカテゴリから記事を3件呼び出す
              $categories = get_the_category($post->ID);

              $category_ID = [];

              foreach ($categories as $category):
                  array_push($category_ID, $category->cat_ID);
              endforeach;

              $args = [
                  // 今読んでいる記事を除く
                  'post__not_in' => [$post->ID],
                  'posts_per_page' => 3,
                  'category__in' => $category_ID,
                  // ランダムに記事を選ぶ
                  'orderby' => 'rand',
              ];
              $query = new WP_Query($args);
              if ($query->have_posts()):
                  while ($query->have_posts()):
                      $query->the_post(); ?>
              <li class="l-single-sidebar__widgetItem">
                <a href="<?php the_permalink(); ?>" class="l-single-sidebar__widgetLink">
                  <article>
                    <figure class="l-single-sidebar__widgetItem__inner">
                      <div class="l-single-sidebar__widgetItem__thumb">
                        <picture>
                          <?php if (has_post_thumbnail()):
                              the_post_thumbnail('large'); ?>
                          <?php
                          else:
                               ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" loading="lazy" alt="no-image" class="l-single-sidebar__widgetItem__img" />
                          <?php
                          endif; ?>
                        </picture>
                      </div>
                      <figcaption class="
                                      l-single-sidebar__widgetItem__textWrap
                                    ">
                        <h3 class="
                                        l-single-sidebar__widgetItem__newsTitle
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
                  endwhile;
              endif;
              ?>
              <?php wp_reset_postdata(); ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="l-single-sidebar__widget">
        <div class="l-single-sidebar__widgetBox">
          <h2 class="l-single-sidebar__widgetTitle">カテゴリー</h2>
          <div class="l-single-sidebar__widgetInner">
            <?php $categoryList = get_categories(); ?>
            <?php if ($categoryList): ?>
            <ul class="l-single-sidebar__widgetList">
              <?php foreach ($categoryList as $value): ?>
              <li class="l-single-sidebar__catItem">
                <a href="<?= home_url(
                    $value->taxonomy . '/' . $value->slug
                ) ?>/" class="l-single-sidebar__catLink">
                  <?= $value->name ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </aside>
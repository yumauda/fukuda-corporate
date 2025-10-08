<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <div class="p-page-mv__detail">
          <div class="p-page-mv__title">
            <h1 class="c-main-title">
              <span class="c-main-title__en">News</span>
              <span class="c-main-title__ja">お知らせ</span>
            </h1>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="p-page-mvImg">
    <div class="l-inner">
      <figure class="p-page-mvImg__img">
        <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_news.png" alt="お知らせ" width="1700" height="500">
      </figure>
    </div>
  </section>
  <div class="p-news">
    <div class="l-inner">
      <div class="p-news__content">
        <div class="p-news__select">
          <?php
          // いま表示しているタクソノミーを判定（通常: category / 例: news_category）
          $qo = get_queried_object();
          $taxonomy = (isset($qo->taxonomy) && taxonomy_exists($qo->taxonomy)) ? $qo->taxonomy : 'category';

          // 現在のタームID（「すべて」の時は 0）
          $current_term_id = (isset($qo->term_id) && $qo instanceof WP_Term) ? (int) $qo->term_id : 0;

          // 「すべて」へのURL
          // 投稿（post）の一覧ページを使う場合：
          $all_url = get_permalink(get_option('page_for_posts'));
          // もし「ニュース」等のカスタム投稿タイプのアーカイブに戻したいなら：
          // $all_url = get_post_type_archive_link('news'); // ←サイトに合わせて変更

          // セレクトに出すカテゴリー一覧
          $cats = get_terms(array(
            'taxonomy'   => $taxonomy,
            'hide_empty' => true,   // 必要に応じて false
          ));

          if (is_wp_error($cats)) {
            $cats = array(); // 念のため安全側
          }
          ?>

          <select id="js-news-category" class="p-news__select-input">
            <option value="<?php echo esc_url($all_url); ?>" <?php selected(0, $current_term_id); ?>>すべて</option>
            <?php if (! empty($cats)) : ?>
              <?php foreach ($cats as $cat) :
                $url = get_term_link($cat);
                if (is_wp_error($url)) continue;
              ?>
                <option value="<?php echo esc_url($url); ?>" <?php selected($cat->term_id, $current_term_id); ?>>
                  <?php echo esc_html($cat->name); ?>
                </option>
              <?php endforeach; ?>
            <?php endif; ?>
          </select>

        </div>
        <ul class="p-news__lists">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>
              <li class="p-news__list">
                <a href="<?php the_permalink(); ?>" class="p-news__link">
                  <div class="p-news__link-left">
                    <div class="p-news__meta">
                      <?php
                      $categories = get_the_category();
                      if (! empty($categories)) {
                        $cat_names = array_map(function ($cat) {
                          return esc_html($cat->name);
                        }, $categories);
                        echo '<span class="p-single-topics__meta-category">' . implode(', ', $cat_names) . '</span>';
                      }
                      ?>
                      <time datetime="<?php the_time('Y.m.d'); ?>" class="p-news__time"><?php the_time('Y.m.d'); ?></time>
                    </div>
                    <p class="p-news__title">
                      <?php the_title(); ?>
                    </p>
                  </div>
                  <div class="p-news__link-right">
                    <img src="<?php echo get_template_directory_uri() ?>/images/common/news_link_arrow.png" alt="" width="46" height="46">
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <?php
        // ▼ このブロックをループ（have_posts() ... endwhile;）の直後に置いてください。
        global $wp_query;

        $paged  = max(1, get_query_var('paged'));
        $total  = (int) $wp_query->max_num_pages;

        if ($total > 1) : ?>
          <div class="p-news__pagination">

            <?php // Prev
            if ($paged > 1) : ?>
              <a href="<?php echo esc_url(get_pagenum_link($paged - 1)); ?>" class="p-news__pagination-link" aria-label="前のページ">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/news_pagination_arrow_prev.png'); ?>" alt="" width="24" height="24">
              </a>
            <?php else : ?>
              <span class="p-news__pagination-link is-disabled" aria-hidden="true">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/news_pagination_arrow_prev.png'); ?>" alt="" width="24" height="24">
              </span>
            <?php endif; ?>

            <?php
            // 数字リンク（paginate_links を配列で受けて整形）
            $links = paginate_links(array(
              'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
              'format'    => '?paged=%#%', // パーマリンク設定により自動で無視されます
              'current'   => $paged,
              'total'     => $total,
              'type'      => 'array',
              'end_size'  => 1,
              'mid_size'  => 2,
              'prev_next' => false,
            ));

            if ($links) {
              foreach ($links as $link_html) {

                // 現在ページ？
                if (preg_match('/class=[\'"][^\'"]*current/', $link_html)) {
                  // 数字を抜く
                  preg_match('/>(\d+)</', $link_html, $m);
                  $num = isset($m[1]) ? $m[1] : $paged;

                  // デザインに合わせて aタグ＋currentクラスで出力（href は現在ページのURL）
                  echo '<a href="' . esc_url(get_pagenum_link($paged)) . '" class="p-news__pagination-link current">' . esc_html($num) . '</a>';
                } else {
                  // href と 数字を抜く
                  preg_match('/href=[\'"]([^\'"]+)[\'"]/', $link_html, $href_m);
                  preg_match('/>(\d+)</', $link_html, $num_m);
                  $href = isset($href_m[1]) ? $href_m[1] : '#';
                  $num  = isset($num_m[1]) ? $num_m[1] : '';

                  echo '<a href="' . esc_url($href) . '" class="p-news__pagination-link">' . esc_html($num) . '</a>';
                }
              }
            }
            ?>

            <?php // Next
            if ($paged < $total) : ?>
              <a href="<?php echo esc_url(get_pagenum_link($paged + 1)); ?>" class="p-news__pagination-link" aria-label="次のページ">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/news_pagination_arrow_next.png'); ?>" alt="" width="24" height="24">
              </a>
            <?php else : ?>
              <span class="p-news__pagination-link is-disabled" aria-hidden="true">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/news_pagination_arrow_next.png'); ?>" alt="" width="24" height="24">
              </span>
            <?php endif; ?>

          </div>
        <?php endif; ?>


      </div>
    </div>
  </div>


</main>
<?php get_footer() ?>
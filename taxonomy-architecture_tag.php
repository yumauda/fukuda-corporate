<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <div class="p-page-mv__detail">
          <div class="p-page-mv__title">
            <h1 class="c-main-title">
              <span class="c-main-title__en">Works</span>
              <div class="c-main-title__row">
                <span class="c-main-title__ja">施工実績</span>
                <span class="c-main-title__ja--sub">-建築事業-</span>

              </div>
            </h1>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="p-page-mvImg">
    <div class="l-inner">
      <figure class="p-page-mvImg__img">
        <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_archive_architecture.png" alt="施工実績" width="1700" height="500">
      </figure>
    </div>
  </section>
  <div class="p-category-anchor">
    <p class="p-category-anchor__title">Category</p>
    <div class="p-category-anchor__block-wrapper">

      <?php
      // ====== 土木事業（engineer / engineer_category） ======
      $engineer_archive = get_post_type_archive_link('engineer');
      $is_engineer_pta  = is_post_type_archive('engineer');
      $is_engineer_tax  = is_tax('engineer_category');
      $current_engineer_term_id = $is_engineer_tax ? get_queried_object_id() : 0;

      // すべてのターム取得（空タームも出したければ 'hide_empty' => 0 に）
      $engineer_terms = get_terms([
        'taxonomy'   => 'engineer_category',
        'hide_empty' => 1,
        'orderby'    => 'name',
        'order'      => 'ASC',
      ]);
      ?>
      <div class="p-category-anchor__block">
        <a href="<?php echo esc_url($engineer_archive); ?>"
          class="p-category-anchor__list-title<?php echo $is_engineer_pta ? ' is-current' : ''; ?>">
          土木事業ALL
        </a>
        <ul class="p-category-anchor__lists">
          <?php if (! is_wp_error($engineer_terms) && ! empty($engineer_terms)) : ?>
            <?php foreach ($engineer_terms as $term) :
              $url = get_term_link($term);
              if (is_wp_error($url)) continue;
              $active = ($is_engineer_tax && $current_engineer_term_id === $term->term_id) ? ' is-current' : '';
            ?>
              <li class="p-category-anchor__list">
                <a href="<?php echo esc_url($url); ?>"
                  class="p-category-anchor__link<?php echo $active; ?>"
                  <?php echo $active ? 'aria-current="page"' : ''; ?>>
                  - <?php echo esc_html($term->name); ?>
                </a>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>

      <?php
      // ====== 建築事業（architecture / architecture_category） ======
      $architecture_archive = get_post_type_archive_link('architecture');
      $is_arch_pta  = is_post_type_archive('architecture');
      $is_arch_tax  = is_tax('architecture_category');
      $current_arch_term_id = $is_arch_tax ? get_queried_object_id() : 0;

      $architecture_terms = get_terms([
        'taxonomy'   => 'architecture_category',
        'hide_empty' => 1,
        'orderby'    => 'name',
        'order'      => 'ASC',
      ]);
      ?>
      <div class="p-category-anchor__block">
        <a href="<?php echo esc_url($architecture_archive); ?>"
          class="p-category-anchor__list-title<?php echo $is_arch_pta ? ' is-current' : ''; ?>">
          建築事業ALL
        </a>
        <ul class="p-category-anchor__lists">
          <?php if (! is_wp_error($architecture_terms) && ! empty($architecture_terms)) : ?>
            <?php foreach ($architecture_terms as $term) :
              $url = get_term_link($term);
              if (is_wp_error($url)) continue;
              $active = ($is_arch_tax && $current_arch_term_id === $term->term_id) ? ' is-current' : '';
            ?>
              <li class="p-category-anchor__list">
                <a href="<?php echo esc_url($url); ?>"
                  class="p-category-anchor__link<?php echo $active; ?>"
                  <?php echo $active ? 'aria-current="page"' : ''; ?>>
                  - <?php echo esc_html($term->name); ?>
                </a>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>

    </div>
  </div>
  <!-- <section class="p-archive p-archive--green">
    <div class="l-inner">
      <div class="p-archive__content">
        <div class="p-archive__title">
          <h2 class="c-small-title c-small-title--white">
            施工中一覧
          </h2>
        </div>
        <ul class="p-archive__lists">
          <li class="p-archive__list">
            <a href="" class="p-archive__link js-modal-btn">
              <figure class="p-archive__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/archive_1.png" alt="<?php the_title(); ?>" width="420" height="280">
              </figure>
              <div class="p-archive__detail">
                <div class="p-archive__meta">
                  <time datetime="<?php the_time('Y.m.d'); ?>" class="p-archive__time">2025/07/31</time>
                  <span class="p-archive__category">道路</span>
                </div>
                <h3 class="p-archive__title">（仮称）出雲市新工業団地（斐川）造成工事</h3>
                <div class="p-archive__tag-wrapper">
                  <span class="p-archive__tag">#敷地造成工</span>
                  <span class="p-archive__tag">#掘削工</span>
                  <span class="p-archive__tag">#法面工</span>
                  <span class="p-archive__tag">#盛土補強工</span>
                  <span class="p-archive__tag">#河川改修工</span>
                  <span class="p-archive__tag">#排水施設工</span>
                </div>
              </div>
            </a>
          </li>
          <li class="p-archive__list">
            <a href="" class="p-archive__link js-modal-btn">
              <figure class="p-archive__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/archive_1.png" alt="<?php the_title(); ?>" width="420" height="280">
              </figure>
              <div class="p-archive__detail">
                <div class="p-archive__meta">
                  <time datetime="<?php the_time('Y.m.d'); ?>" class="p-archive__time">2025/07/31</time>
                  <span class="p-archive__category">道路</span>
                </div>
                <h3 class="p-archive__title">（仮称）出雲市新工業団地（斐川）造成工事</h3>
                <div class="p-archive__tag-wrapper">
                  <span class="p-archive__tag">#敷地造成工</span>
                  <span class="p-archive__tag">#掘削工</span>
                  <span class="p-archive__tag">#法面工</span>
                  <span class="p-archive__tag">#盛土補強工</span>
                  <span class="p-archive__tag">#河川改修工</span>
                  <span class="p-archive__tag">#排水施設工</span>
                </div>
              </div>
            </a>
          </li>
          <li class="p-archive__list">
            <a href="" class="p-archive__link js-modal-btn">
              <figure class="p-archive__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/archive_1.png" alt="<?php the_title(); ?>" width="420" height="280">
              </figure>
              <div class="p-archive__detail">
                <div class="p-archive__meta">
                  <time datetime="<?php the_time('Y.m.d'); ?>" class="p-archive__time">2025/07/31</time>
                  <span class="p-archive__category">道路</span>
                </div>
                <h3 class="p-archive__title">（仮称）出雲市新工業団地（斐川）造成工事</h3>
                <div class="p-archive__tag-wrapper">
                  <span class="p-archive__tag">#敷地造成工</span>
                  <span class="p-archive__tag">#掘削工</span>
                  <span class="p-archive__tag">#法面工</span>
                  <span class="p-archive__tag">#盛土補強工</span>
                  <span class="p-archive__tag">#河川改修工</span>
                  <span class="p-archive__tag">#排水施設工</span>
                </div>
              </div>
            </a>
          </li>
          <li class="p-archive__list">
            <a href="" class="p-archive__link js-modal-btn">
              <figure class="p-archive__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/archive_1.png" alt="<?php the_title(); ?>" width="420" height="280">
              </figure>
              <div class="p-archive__detail">
                <div class="p-archive__meta">
                  <time datetime="<?php the_time('Y.m.d'); ?>" class="p-archive__time">2025/07/31</time>
                  <span class="p-archive__category">道路</span>
                </div>
                <h3 class="p-archive__title">（仮称）出雲市新工業団地（斐川）造成工事</h3>
                <div class="p-archive__tag-wrapper">
                  <span class="p-archive__tag">#敷地造成工</span>
                  <span class="p-archive__tag">#掘削工</span>
                  <span class="p-archive__tag">#法面工</span>
                  <span class="p-archive__tag">#盛土補強工</span>
                  <span class="p-archive__tag">#河川改修工</span>
                  <span class="p-archive__tag">#排水施設工</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <section class="p-modal" id="modal">

          <div class="l-inner">
            <div class="p-modal__content">
              <div class="p-modal__close">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/modal_close.png" alt="" width="70" height="70">
              </div>
              <div class="p-modal__block">
                <div class="p-modal__title-wrapper">
                  <h2 class="p-modal__title">令和6年度湖陵多伎道路久村地区外整備工事（2025年2月28日 現在）</h2>
                </div>
                <ul class="p-modal__tag-wrapper">
                  <li class="p-modal__tag">道路</li>
                  <li class="p-modal__tag">道路改良工</li>
                  <li class="p-modal__tag">法面工</li>
                  <li class="p-modal__tag">排水構造物工</li>
                </ul>

                <div class="p-modal__slider">

                  <div class="p-splide splide" aria-labelledby="carousel-heading">
                    <div class="splide__track">
                      <ul class="splide__list">
                        <li class="splide__slide">
                          <figure class="p-splide__img">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/modal_swiper1.jpg" alt="" width="520" height="290">
                          </figure>
                        </li>
                        <li class="splide__slide">
                          <figure class="p-splide__img">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/modal_swiper1.jpg" alt="" width="520" height="290">
                          </figure>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
                <dl class="p-modal__dl">
                  <div class="p-modal__row">
                    <dt class="p-modal__dt">発注者</dt>
                    <dd class="p-modal__dd">松江国道事務</dd>
                  </div>
                  <div class="p-modal__row">
                    <dt class="p-modal__dt">工事場所</dt>
                    <dd class="p-modal__dd">島根県出雲市湖陵町地内</dd>
                  </div>
                  <div class="p-modal__row">
                    <dt class="p-modal__dt">工期</dt>
                    <dd class="p-modal__dd">令和6年4月～令和7年2月</dd>
                  </div>
                </dl>
              </div>

            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <div class="p-archive">
    <div class="l-inner">
      <div class="p-archive__content">

        <ul class="p-archive__lists">
          <li class="p-archive__list">
            <a href="" class="p-archive__link js-modal-btn">
              <figure class="p-archive__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/archive_1.png" alt="<?php the_title(); ?>" width="420" height="280">
              </figure>
              <div class="p-archive__detail">
                <div class="p-archive__meta">
                  <time datetime="<?php the_time('Y.m.d'); ?>" class="p-archive__time">2025/07/31</time>
                  <span class="p-archive__category">道路</span>
                </div>
                <h3 class="p-archive__title">（仮称）出雲市新工業団地（斐川）造成工事</h3>
                <div class="p-archive__tag-wrapper">
                  <span class="p-archive__tag">#敷地造成工</span>
                  <span class="p-archive__tag">#掘削工</span>
                  <span class="p-archive__tag">#法面工</span>
                  <span class="p-archive__tag">#盛土補強工</span>
                  <span class="p-archive__tag">#河川改修工</span>
                  <span class="p-archive__tag">#排水施設工</span>
                </div>
              </div>
            </a>
          </li>
          <li class="p-archive__list">
            <a href="" class="p-archive__link js-modal-btn">
              <figure class="p-archive__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/archive_1.png" alt="<?php the_title(); ?>" width="420" height="280">
              </figure>
              <div class="p-archive__detail">
                <div class="p-archive__meta">
                  <time datetime="<?php the_time('Y.m.d'); ?>" class="p-archive__time">2025/07/31</time>
                  <span class="p-archive__category">道路</span>
                </div>
                <h3 class="p-archive__title">（仮称）出雲市新工業団地（斐川）造成工事</h3>
                <div class="p-archive__tag-wrapper">
                  <span class="p-archive__tag">#敷地造成工</span>
                  <span class="p-archive__tag">#掘削工</span>
                  <span class="p-archive__tag">#法面工</span>
                  <span class="p-archive__tag">#盛土補強工</span>
                  <span class="p-archive__tag">#河川改修工</span>
                  <span class="p-archive__tag">#排水施設工</span>
                </div>
              </div>
            </a>
          </li>
          <li class="p-archive__list">
            <a href="" class="p-archive__link js-modal-btn">
              <figure class="p-archive__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/archive_1.png" alt="<?php the_title(); ?>" width="420" height="280">
              </figure>
              <div class="p-archive__detail">
                <div class="p-archive__meta">
                  <time datetime="<?php the_time('Y.m.d'); ?>" class="p-archive__time">2025/07/31</time>
                  <span class="p-archive__category">道路</span>
                </div>
                <h3 class="p-archive__title">（仮称）出雲市新工業団地（斐川）造成工事</h3>
                <div class="p-archive__tag-wrapper">
                  <span class="p-archive__tag">#敷地造成工</span>
                  <span class="p-archive__tag">#掘削工</span>
                  <span class="p-archive__tag">#法面工</span>
                  <span class="p-archive__tag">#盛土補強工</span>
                  <span class="p-archive__tag">#河川改修工</span>
                  <span class="p-archive__tag">#排水施設工</span>
                </div>
              </div>
            </a>
          </li>
          <li class="p-archive__list">
            <a href="" class="p-archive__link js-modal-btn">
              <figure class="p-archive__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/archive_1.png" alt="<?php the_title(); ?>" width="420" height="280">
              </figure>
              <div class="p-archive__detail">
                <div class="p-archive__meta">
                  <time datetime="<?php the_time('Y.m.d'); ?>" class="p-archive__time">2025/07/31</time>
                  <span class="p-archive__category">道路</span>
                </div>
                <h3 class="p-archive__title">（仮称）出雲市新工業団地（斐川）造成工事</h3>
                <div class="p-archive__tag-wrapper">
                  <span class="p-archive__tag">#敷地造成工</span>
                  <span class="p-archive__tag">#掘削工</span>
                  <span class="p-archive__tag">#法面工</span>
                  <span class="p-archive__tag">#盛土補強工</span>
                  <span class="p-archive__tag">#河川改修工</span>
                  <span class="p-archive__tag">#排水施設工</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <div class="p-news__pagination p-archive__pagination">
          <a href="#" class="p-news__pagination-link">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/news_pagination_arrow_prev.png" alt="" width="24" height="24">
          </a>
          <a href="#" class="p-news__pagination-link current">1</a>
          <a href="#" class="p-news__pagination-link">2</a>
          <a href="#" class="p-news__pagination-link">3</a>
          <a href="#" class="p-news__pagination-link">4</a>
          <a href="#" class="p-news__pagination-link">5</a>
          <a href="#" class="p-news__pagination-link">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/news_pagination_arrow_next.png" alt="" width="24" height="24">
          </a>
        </div>

      </div>
    </div>
  </div> -->
  <?php
  // ===== 設定 =====
  $post_type  = 'architecture';           // ← CPTスラッグ
  $flag_field = 'engineer_pick';      // ← ACF True/False フィールド名（例）
  $top_limit  = 3;                   // 上部に表示する件数（全件なら -1、3件だけなら 3）
  $bottom_ppp = 9;                    // 下部の1ページ表示件数

  $paged = max(1, get_query_var('paged'));

  // （任意）タクソノミーアーカイブ等で現在の絞り込みを引き継ぎたい場合
  $tax_query = array();
  if (is_tax()) {
    $qo = get_queried_object();
    if ($qo instanceof WP_Term) {
      $tax_query[] = array(
        'taxonomy' => $qo->taxonomy,
        'field'    => 'term_id',
        'terms'    => $qo->term_id,
      );
    }
  }

  // 1) 上に出す「チェック済み」全ID（下から除外するため、まず全IDを回収）
  $flagged_ids = get_posts(array(
    'post_type'      => $post_type,
    'posts_per_page' => -1,
    'fields'         => 'ids',
    'no_found_rows'  => true,
    'tax_query'      => $tax_query,
    'meta_query'     => array(
      array(
        'key'     => $flag_field,
        'value'   => '1',     // True/False型の「チェックあり」
        'compare' => '='
      ),
    ),
  ));

  // 2) 上：チェック済み表示用クエリ
  $top_query = new WP_Query(array(
    'post_type'      => $post_type,
    'posts_per_page' => $top_limit,
    'paged'          => 1, // 上はページングしない
    'orderby'        => 'date',
    'order'          => 'DESC',
    'no_found_rows'  => true,
    'tax_query'      => $tax_query,
    'meta_query'     => array(
      array(
        'key'     => $flag_field,
        'value'   => '1',
        'compare' => '='
      ),
    ),
  ));
  ?>

  <!-- ================= 上：チェック済みだけ ================= -->
  <section class="p-archive p-archive--green">
    <div class="l-inner">
      <div class="p-archive__content">
        <div class="p-archive__main-title">
          <h2 class="c-small-title c-small-title--white">施工中一覧</h2>
        </div>

        <ul class="p-archive__lists">
          <?php if ($top_query->have_posts()) : ?>
            <?php while ($top_query->have_posts()) : $top_query->the_post(); ?>
              <?php $mid = 'modal-' . get_the_ID(); ?>

              <!-- ★ここに “あなたの既存の <li class="p-archive__list">〜 モーダル</section> まで” を丸ごと貼り付け -->
              <!-- 例： -->
              <li class="p-archive__list">
                <a href="#<?php echo esc_attr($mid); ?>" class="p-archive__link js-modal-btn" data-modal-id="<?php echo esc_attr($mid); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <figure class="p-archive__img"><?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?></figure>
                  <?php else : ?>
                    <figure class="p-archive__img"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/noimage.jpg'); ?>" alt="画像なし"></figure>
                  <?php endif; ?>

                  <div class="p-archive__detail">
                    <div class="p-archive__meta">
                      <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>" class="p-archive__time"><?php echo esc_html(get_the_date('Y/m/d')); ?></time>
                      <?php
                      $cats = get_the_terms(get_the_ID(), 'architecture_category');
                      if (! empty($cats) && ! is_wp_error($cats)) {
                        foreach ($cats as $term) {
                          printf('<span class="p-archive__category p-archive__category--%1$s">%2$s</span>', esc_attr($term->slug), esc_html($term->name));
                        }
                      }
                      ?>
                    </div>
                    <h3 class="p-archive__title"><?php the_title(); ?></h3>
                    <?php $tags = get_the_terms(get_the_ID(), 'architecture_tag');
                    if (! empty($tags) && ! is_wp_error($tags)) : ?>
                      <div class="p-archive__tag-wrapper">
                        <?php foreach ($tags as $term) : ?>
                          <span class="p-archive__tag p-archive__tag--<?php echo esc_attr($term->slug); ?>">#<?php echo esc_html($term->name); ?></span>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </a>
              </li>

              <!-- モーダル（あなたの現行を踏襲） -->
              <section class="p-modal" id="<?php echo esc_attr($mid); ?>" aria-hidden="true" role="dialog" aria-modal="true">
                <div class="l-inner">
                  <div class="p-modal__content" role="document">
                    <div class="p-modal__close js-modal-close">
                      <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/images/common/modal_close.png'); ?>" alt="" width="70" height="70">
                    </div>

                    <div class="p-modal__block">
                      <div class="p-modal__title-wrapper">
                        <h2 class="p-modal__title"><?php the_title(); ?></h2>
                      </div>

                      <ul class="p-modal__tag-wrapper">
                        <?php
                        if (!empty($cats) && !is_wp_error($cats)) {
                          foreach ($cats as $term) echo '<li class="p-modal__tag">' . esc_html($term->name) . '</li>';
                        }
                        if (!empty($tags) && !is_wp_error($tags)) {
                          foreach ($tags as $term) echo '<li class="p-modal__tag">' . esc_html($term->name) . '</li>';
                        }
                        ?>
                      </ul>

                      <div class="p-modal__slider">
                        <div class="p-splide splide" aria-labelledby="carousel-heading">
                          <div class="splide__track">
                            <ul class="splide__list">
                              <?php if (have_rows('engineer_img')) : ?>
                                <?php while (have_rows('engineer_img')) : the_row(); ?>
                                  <li class="splide__slide">
                                    <figure class="p-splide__img">
                                      <?php if (has_post_thumbnail()) : ?>
                                        <img decoding="async" loading="lazy" src="<?php the_sub_field('engineer_image'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" width="520" height="290">
                                      <?php else : ?>
                                        <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/images/common/noimage.jpg'); ?>" alt="画像なし" width="520" height="290">
                                      <?php endif; ?>
                                    </figure>
                                  </li>
                                <?php endwhile; ?>
                              <?php endif; ?>
                            </ul>
                          </div>
                          <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev button prev">
                              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/splide_prev.png" alt="前" width="46" height="46">
                            </button>
                            <button class="splide__arrow splide__arrow--next button next">
                              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/splide_next.png" alt="次" width="46" height="46">
                            </button>
                          </div>
                        </div>
                      </div>

                      <dl class="p-modal__dl">
                        <div class="p-modal__row">
                          <dt class="p-modal__dt">発注者</dt>
                          <dd class="p-modal__dd"><?php the_field('engineer_person'); ?></dd>
                        </div>
                        <div class="p-modal__row">
                          <dt class="p-modal__dt">工事場所</dt>
                          <dd class="p-modal__dd"><?php the_field('engineer_place'); ?></dd>
                        </div>
                        <div class="p-modal__row">
                          <dt class="p-modal__dt">工期</dt>
                          <dd class="p-modal__dd"><?php the_field('engineer_year'); ?></dd>
                        </div>
                      </dl>
                    </div>
                  </div>
                </div>
              </section>
              <!-- ★ここまで貼り替え -->

            <?php endwhile;
            wp_reset_postdata(); ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </section>

  <?php
  // 3) 下：その他（チェックなし or 未設定）＋ページネーション
  $bottom_query = new WP_Query(array(
    'post_type'      => $post_type,
    'posts_per_page' => $bottom_ppp,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'tax_query'      => $tax_query,
    'post__not_in'   => $flagged_ids,  // ← 上で出したものを全除外
  ));
  ?>

  <!-- ================= 下：その他＋ページネーション ================= -->
  <div class="p-archive">
    <div class="l-inner">
      <div class="p-archive__content">

        <ul class="p-archive__lists">
          <?php if ($bottom_query->have_posts()) : ?>
            <?php while ($bottom_query->have_posts()) : $bottom_query->the_post(); ?>
              <?php $mid = 'modal-' . get_the_ID(); ?>

              <!-- ★ここに同じカード＋モーダルを貼る（上と同じ） -->
              <li class="p-archive__list">
                <a href="#<?php echo esc_attr($mid); ?>" class="p-archive__link js-modal-btn" data-modal-id="<?php echo esc_attr($mid); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <figure class="p-archive__img"><?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?></figure>
                  <?php else : ?>
                    <figure class="p-archive__img"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/noimage.jpg'); ?>" alt="画像なし"></figure>
                  <?php endif; ?>

                  <div class="p-archive__detail">
                    <div class="p-archive__meta">
                      <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>" class="p-archive__time"><?php echo esc_html(get_the_date('Y/m/d')); ?></time>
                      <?php
                      $cats = get_the_terms(get_the_ID(), 'architecture_category');
                      if (! empty($cats) && ! is_wp_error($cats)) {
                        foreach ($cats as $term) {
                          printf('<span class="p-archive__category p-archive__category--%1$s">%2$s</span>', esc_attr($term->slug), esc_html($term->name));
                        }
                      }
                      ?>
                    </div>
                    <h3 class="p-archive__title"><?php the_title(); ?></h3>
                    <?php $tags = get_the_terms(get_the_ID(), 'architecture_tag');
                    if (! empty($tags) && ! is_wp_error($tags)) : ?>
                      <div class="p-archive__tag-wrapper">
                        <?php foreach ($tags as $term) : ?>
                          <span class="p-archive__tag p-archive__tag--<?php echo esc_attr($term->slug); ?>">#<?php echo esc_html($term->name); ?></span>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </a>
              </li>

              <section class="p-modal" id="<?php echo esc_attr($mid); ?>" aria-hidden="true" role="dialog" aria-modal="true">
                <div class="l-inner">
                  <div class="p-modal__content" role="document">
                    <div class="p-modal__close js-modal-close">
                      <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/images/common/modal_close.png'); ?>" alt="" width="70" height="70">
                    </div>

                    <div class="p-modal__block">
                      <div class="p-modal__title-wrapper">
                        <h2 class="p-modal__title"><?php the_title(); ?></h2>
                      </div>

                      <ul class="p-modal__tag-wrapper">
                        <?php
                        if (!empty($cats) && !is_wp_error($cats)) {
                          foreach ($cats as $term) echo '<li class="p-modal__tag">' . esc_html($term->name) . '</li>';
                        }
                        if (!empty($tags) && !is_wp_error($tags)) {
                          foreach ($tags as $term) echo '<li class="p-modal__tag">' . esc_html($term->name) . '</li>';
                        }
                        ?>
                      </ul>

                      <div class="p-modal__slider">
                        <div class="p-splide splide" aria-labelledby="carousel-heading">
                          <div class="splide__track">
                            <ul class="splide__list">
                              <?php if (have_rows('engineer_img')) : ?>
                                <?php while (have_rows('engineer_img')) : the_row(); ?>
                                  <li class="splide__slide">
                                    <figure class="p-splide__img">
                                      <?php if (has_post_thumbnail()) : ?>
                                        <img decoding="async" loading="lazy" src="<?php the_sub_field('engineer_image'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" width="520" height="290">
                                      <?php else : ?>
                                        <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/images/common/noimage.jpg'); ?>" alt="画像なし" width="520" height="290">
                                      <?php endif; ?>
                                    </figure>
                                  </li>
                                <?php endwhile; ?>
                              <?php endif; ?>
                            </ul>
                          </div>
                          <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev button prev">
                              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/splide_prev.png" alt="前" width="46" height="46">
                            </button>
                            <button class="splide__arrow splide__arrow--next button next">
                              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/splide_next.png" alt="次" width="46" height="46">
                            </button>
                          </div>
                        </div>
                      </div>

                      <dl class="p-modal__dl">
                        <div class="p-modal__row">
                          <dt class="p-modal__dt">発注者</dt>
                          <dd class="p-modal__dd"><?php the_field('engineer_person'); ?></dd>
                        </div>
                        <div class="p-modal__row">
                          <dt class="p-modal__dt">工事場所</dt>
                          <dd class="p-modal__dd"><?php the_field('engineer_place'); ?></dd>
                        </div>
                        <div class="p-modal__row">
                          <dt class="p-modal__dt">工期</dt>
                          <dd class="p-modal__dd"><?php the_field('engineer_year'); ?></dd>
                        </div>
                      </dl>
                    </div>
                  </div>
                </div>
              </section>
            <?php endwhile;
            wp_reset_postdata(); ?>
          <?php else : ?>
            <li class="p-archive__list--empty">表示できる記事がありません。</li>
          <?php endif; ?>
        </ul>

        <?php
        // ===== 下のページネーション =====
        $total = (int) $bottom_query->max_num_pages;
        if ($total > 1) :
          $links = paginate_links(array(
            'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'format'    => '?paged=%#%',
            'current'   => $paged,
            'total'     => $total,
            'type'      => 'array',
            'end_size'  => 1,
            'mid_size'  => 2,
            'prev_next' => false,
          ));
        ?>
          <div class="p-news__pagination p-archive__pagination">
            <?php if ($paged > 1) : ?>
              <a href="<?php echo esc_url(get_pagenum_link($paged - 1)); ?>" class="p-news__pagination-link" aria-label="前のページ">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/news_pagination_arrow_prev.png'); ?>" alt="" width="24" height="24">
              </a>
            <?php else : ?>
              <span class="p-news__pagination-link is-disabled" aria-hidden="true">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/news_pagination_arrow_prev.png'); ?>" alt="" width="24" height="24">
              </span>
            <?php endif; ?>

            <?php
            if ($links) {
              foreach ($links as $link_html) {
                if (preg_match('/class=[\'"][^\'"]*current/', $link_html)) {
                  preg_match('/>(\d+)</', $link_html, $m);
                  $num = $m[1] ?? $paged;
                  echo '<a href="' . esc_url(get_pagenum_link($paged)) . '" class="p-news__pagination-link current">' . esc_html($num) . '</a>';
                } else {
                  preg_match('/href=[\'"]([^\'"]+)[\'"]/', $link_html, $href_m);
                  preg_match('/>(\d+)</', $link_html, $num_m);
                  $href = $href_m[1] ?? '#';
                  $num = $num_m[1] ?? '';
                  echo '<a href="' . esc_url($href) . '" class="p-news__pagination-link">' . esc_html($num) . '</a>';
                }
              }
            }
            ?>

            <?php if ($paged < $total) : ?>
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
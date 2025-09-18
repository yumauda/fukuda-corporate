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
                <span class="c-main-title__ja--sub">-土木事業-</span>

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
        <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_archive_civil.png" alt="施工実績" width="1700" height="500">
      </figure>
    </div>
  </section>
  <!-- <section class="p-archive p-archive--green">
    <div class="l-inner">
      <div class="p-archive__content">
        <div class="p-archive__main-title">
          <h2 class="c-small-title c-small-title--white">
            施工中一覧
          </h2>
        </div>
        <ul class="p-archive__lists">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>
              <li class="p-archive__list">
                <a href="" class="p-archive__link js-modal-btn">
                  <?php if (has_post_thumbnail()) : ?>
                    <figure class="p-archive__img">
                      <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                    </figure>
                  <?php else : ?>
                    <figure class="p-archive__img">
                      <img src="<?php echo get_template_directory_uri() ?>/images/common/noimage.jpg" alt="画像なし">
                    </figure>
                  <?php endif; ?>
                  <div class="p-archive__detail">
                    <div class="p-archive__meta">
                      <time datetime="<?php the_time('Y.m.d'); ?>" class="p-archive__time"><?php the_time('Y/m/d'); ?></time>
                      <?php

                      $terms = get_the_terms(get_the_ID(), 'engineer_category');

                      if (! empty($terms) && ! is_wp_error($terms)) :
                        foreach ($terms as $term) :
                          printf(
                            '<span class="p-archive__category p-archive__category--%1$s">%2$s</span>',
                            esc_attr($term->slug),
                            esc_html($term->name)
                          );
                        endforeach;
                      endif;
                      ?>
                    </div>
                    <h3 class="p-archive__title"><?php the_title(); ?></h3>
                    <?php

                    $terms = get_the_terms(get_the_ID(), 'engineer_tag');

                    if (! empty($terms) && ! is_wp_error($terms)) : ?>
                      <div class="p-archive__tag-wrapper">
                        <?php foreach ($terms as $term) : ?>
                          <span class="p-archive__tag p-archive__tag--<?php echo esc_attr($term->slug); ?>">
                            #<?php echo esc_html($term->name); ?>
                          </span>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>

                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
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
  </section> -->
  <section class="p-archive p-archive--green">
    <div class="l-inner">
      <div class="p-archive__content">
        <div class="p-archive__main-title">
          <h2 class="c-small-title c-small-title--white">施工中一覧</h2>
        </div>

        <ul class="p-archive__lists">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php $mid = 'modal-' . get_the_ID(); // ←ユニークID 
              ?>
              <li class="p-archive__list">
                <a href="#<?php echo esc_attr($mid); ?>" class="p-archive__link js-modal-btn" data-modal-id="<?php echo esc_attr($mid); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <figure class="p-archive__img">
                      <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                    </figure>
                  <?php else : ?>
                    <figure class="p-archive__img">
                      <img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/noimage.jpg'); ?>" alt="画像なし">
                    </figure>
                  <?php endif; ?>

                  <div class="p-archive__detail">
                    <div class="p-archive__meta">
                      <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>" class="p-archive__time"><?php echo esc_html(get_the_date('Y/m/d')); ?></time>
                      <?php
                      $cats = get_the_terms(get_the_ID(), 'engineer_category');
                      if (!empty($cats) && !is_wp_error($cats)) {
                        foreach ($cats as $term) {
                          printf('<span class="p-archive__category p-archive__category--%1$s">%2$s</span>', esc_attr($term->slug), esc_html($term->name));
                        }
                      }
                      ?>
                    </div>

                    <h3 class="p-archive__title"><?php the_title(); ?></h3>

                    <?php
                    $tags = get_the_terms(get_the_ID(), 'engineer_tag');
                    if (!empty($tags) && !is_wp_error($tags)) : ?>
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
                        <!-- Splide/画像は仮。ギャラリー未実装でも動くように1枚だけ出す -->
                        <div class="p-splide splide" aria-labelledby="carousel-heading">
                          <div class="splide__track">
                            <ul class="splide__list">
                              <li class="splide__slide">
                                <figure class="p-splide__img">
                                  <?php if (has_post_thumbnail()) : ?>
                                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" width="520" height="290">
                                  <?php else : ?>
                                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/images/common/noimage.jpg'); ?>" alt="画像なし" width="520" height="290">
                                  <?php endif; ?>
                                </figure>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <dl class="p-modal__dl">
                        <div class="p-modal__row">
                          <dt class="p-modal__dt">発注者</dt>
                          <dd class="p-modal__dd">（サンプル）</dd>
                        </div>
                        <div class="p-modal__row">
                          <dt class="p-modal__dt">工事場所</dt>
                          <dd class="p-modal__dd">（サンプル）</dd>
                        </div>
                        <div class="p-modal__row">
                          <dt class="p-modal__dt">工期</dt>
                          <dd class="p-modal__dd">（サンプル）</dd>
                        </div>
                      </dl>
                    </div>
                  </div>
                </div>
              </section>
          <?php endwhile;
          endif; ?>
        </ul>
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
  </div>

</main>
<?php get_footer() ?>
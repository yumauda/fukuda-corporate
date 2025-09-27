<?php get_header(); ?>
<main>
  <section class="p-mv">
    <div class="p-mv__inner">
      <div class="p-mv__content">
        <figure class="p-mv__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_pc.png" alt="人を想いまちを築く" width="1920" height="1080">
        </figure>
        <h1 class="p-mv__title">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/mv_title.png" alt="" width="800" height="600">
        </h1>
        <div class="p-mv__text">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/mv_vertical.png" alt="人を想いまちを築く" width="106" height="267">
        </div>
      </div>
    </div>
  </section>
  <section class="p-year">
    <div class="l-inner">
      <div class="p-year__content">
        <div class="p-year__detail">
          <h2 class="p-year__title">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/year_title.png" alt="100年先に想いを乗せて" width="380" height="130">
          </h2>
          <div class="p-year__text-wrapper">
            <p class="p-year__text">まちとともに、生きる。<br>
              土を耕し、道をつなぎ、暮らしを支える。<br>
              それは、土地の鼓動を感じ、<br class="u-mobile">呼吸を合わせること。<br>
              そして、いつか訪れる未来に、<br class="u-mobile">今の想いをそっと渡していく。<br>
              100年先のまちが、<br class="u-mobile">「ここにあってよかった」と思えるように。</p>
          </div>
        </div>
        <figure class="p-year__img">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/year_img.png" alt="" width="910" height="997">
        </figure>
      </div>
    </div>
  </section>
  <section class="p-top-works" id="works">
    <div class="l-inner">
      <div class="p-top-works__content">
        <div class="p-top-works__title-wrapper">
          <h2 class="c-main-title">
            <span class="c-main-title__en">Works</span>
            <span class="c-main-title__ja">施工実績</span>
          </h2>
        </div>
        <div class="p-top-works__slider-wrapper">
          <div class="p-top-works__slider-link">
            <a href="<?php echo esc_url(home_url('/engineer')); ?>" class="p-top-works__slider-page">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/works_engineer_link.png" alt="" width="360" height="360">
            </a>
          </div>
          <div class="p-top-works__slider js-works-engineer">
            <!-- Slider main container -->
            <div class="swiper swiper1">
              <div class="swiper-wrapper">
                <?php
                // すべてのタームを取得（投稿があるタームのみ表示したいので hide_empty=1）
                $terms = get_terms([
                  'taxonomy'   => 'engineer_category',
                  'hide_empty' => 1,
                  'orderby'    => 'name',
                  'order'      => 'ASC',
                ]);

                // 画像が無い場合のフォールバック
                $fallback = get_template_directory_uri() . '/images/common/slider_1.jpg';

                if (! is_wp_error($terms) && ! empty($terms)) :
                  foreach ($terms as $term) :
                    // --- ACFの画像を取得（返り値：URL/ID/配列 どれでもOKに処理）
                    // 推奨: ACF では $term をそのまま渡せます（互換で 'term_{id}' も試す）
                    $img = get_field('slider_img', $term);
                    if (! $img) $img = get_field('slider_img', 'term_' . $term->term_id);

                    $src = '';
                    if (is_array($img) && ! empty($img['url'])) {
                      // 返り値=配列 の場合
                      $src = isset($img['sizes']['large']) ? $img['sizes']['large'] : $img['url'];
                    } elseif (is_numeric($img)) {
                      // 返り値=ID の場合
                      $tmp = wp_get_attachment_image_src($img, 'large');
                      $src = $tmp ? $tmp[0] : '';
                    } elseif (is_string($img)) {
                      // 返り値=URL の場合
                      $src = $img;
                    }
                    if (! $src) $src = $fallback;

                    // タームアーカイブURL
                    $link = get_term_link($term);
                    if (is_wp_error($link)) $link = '#';
                ?>
                    <div class="swiper-slide">
                      <a href="<?php echo esc_url($link); ?>" class="p-top-works__detail">
                        <figure class="p-top-works__img">
                          <img decoding="async" loading="lazy"
                            src="<?php echo esc_url($src); ?>"
                            alt="<?php echo esc_attr($term->name); ?>"
                            width="420" height="280">
                        </figure>
                        <div class="p-top-works__detail-textWrapper">
                          <p class="p-top-works__detail-text"><?php echo esc_html($term->name); ?></p>
                        </div>
                      </a>
                    </div>
                <?php endforeach;
                endif; ?>
              </div>

              <div class="p-top-works__pagers">
                <div class="swiper-pagination"></div>
                <div class="p-top-works__pagers-buttons">
                  <div class="swiper-button-prev">
                    <div class="p-top-works__button-icon">
                      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/prev.png" alt="" width="15" height="12">
                    </div>
                  </div>
                  <div class="swiper-button-next">
                    <div class="p-top-works__button-icon">
                      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/next.png" alt="" width="15" height="12">
                    </div>
                  </div>
                </div>
                <div class="swiper-scrollbar"></div>
              </div>
            </div>

          </div>
        </div>
        <div class="p-top-works__slider-wrapper">
          <div class="p-top-works__slider-link">
            <a href="<?php echo esc_url(home_url('/architecture')); ?>" class="p-top-works__slider-page">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/works_architecture_link.png" alt="" width="360" height="360">
            </a>
          </div>
          <div class="p-top-works__slider js-works-architecture">
            <!-- Slider main container -->
            <div class="swiper swiper1">
              <div class="swiper-wrapper">
                <?php
                // すべてのタームを取得（投稿があるタームのみ表示したいので hide_empty=1）
                $terms = get_terms([
                  'taxonomy'   => 'architecture_category',
                  'hide_empty' => 1,
                  'orderby'    => 'name',
                  'order'      => 'ASC',
                ]);

                // 画像が無い場合のフォールバック
                $fallback = get_template_directory_uri() . '/images/common/noimage.jpg';

                if (! is_wp_error($terms) && ! empty($terms)) :
                  foreach ($terms as $term) :
                    // --- ACFの画像を取得（返り値：URL/ID/配列 どれでもOKに処理）
                    // 推奨: ACF では $term をそのまま渡せます（互換で 'term_{id}' も試す）
                    $img = get_field('slider_img', $term);
                    if (! $img) $img = get_field('slider_img', 'term_' . $term->term_id);

                    $src = '';
                    if (is_array($img) && ! empty($img['url'])) {
                      // 返り値=配列 の場合
                      $src = isset($img['sizes']['large']) ? $img['sizes']['large'] : $img['url'];
                    } elseif (is_numeric($img)) {
                      // 返り値=ID の場合
                      $tmp = wp_get_attachment_image_src($img, 'large');
                      $src = $tmp ? $tmp[0] : '';
                    } elseif (is_string($img)) {
                      // 返り値=URL の場合
                      $src = $img;
                    }
                    if (! $src) $src = $fallback;

                    // タームアーカイブURL
                    $link = get_term_link($term);
                    if (is_wp_error($link)) $link = '#';
                ?>
                    <div class="swiper-slide">
                      <a href="<?php echo esc_url($link); ?>" class="p-top-works__detail">
                        <figure class="p-top-works__img">
                          <img decoding="async" loading="lazy"
                            src="<?php echo esc_url($src); ?>"
                            alt="<?php echo esc_attr($term->name); ?>"
                            width="420" height="280">
                        </figure>
                        <div class="p-top-works__detail-textWrapper">
                          <p class="p-top-works__detail-text"><?php echo esc_html($term->name); ?></p>
                        </div>
                      </a>
                    </div>
                <?php endforeach;
                endif; ?>
              </div>

              <div class="p-top-works__pagers">
                <div class="swiper-pagination"></div>
                <div class="p-top-works__pagers-buttons">
                  <div class="swiper-button-prev">
                    <div class="p-top-works__button-icon">
                      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/prev.png" alt="" width="15" height="12">
                    </div>
                  </div>
                  <div class="swiper-button-next">
                    <div class="p-top-works__button-icon">
                      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/next.png" alt="" width="15" height="12">
                    </div>
                  </div>
                </div>
                <div class="swiper-scrollbar"></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <figure class="p-detail-img">
    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/detail_bg.png" alt="" width="1920" height="1080">
  </figure>
  <section class="p-detail">
    <div class="l-inner">
      <div class="p-detail__content">
        <div class="p-detail__detail">
          <figure class="p-detail__detail-img">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/detail_img.png" alt="" width="470" height="700">
          </figure>
          <div class="p-detail__block">
            <div class="p-detail__subTitle-wrapper">
              <p class="p-detail__subTitle">Company</p>
              <p class="p-detail__subTitle-ja">会社概要</p>
            </div>
            <h2 class="p-detail__title">地域とともに。<br>信頼の基礎にまごころを重ねて。</h2>
            <div class="p-detail__text-wrapper">
              <p class="p-detail__text">1954年の創業以来、地元に根ざした建設業として地域とともに歩み、まちの基盤を築いてきました。<br>
                個々の成長が組織の信頼と品質を生み、地域への真の貢献につながると信じ、お客様・地域の皆様に寄り添いながら、技術と誠意で豊かな郷土づくりに貢献してまいります。</p>
            </div>
            <div class="p-detail__btn-wrapper">
              <a href="<?php echo esc_url(home_url('/company')); ?>" class="p-detail__btn">
                <p class="p-detail__btn-text">さらに詳しく</p>
                <div class="p-detail__icon">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/btn_icon_arrow.png" alt="" width="15" height="12">
                </div>
              </a>
            </div>
            <div class="p-detail__shape">
              <a href="#" class="p-detail__link">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/detail_intro.png" alt="" width="600" height="200">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-us">
    <div class="l-inner">
      <div class="p-us__content">
        <a href="<?php echo esc_url(home_url('/sustainability')); ?>" class="p-us__link">
          <div class="p-us__detail">
            <div class="p-us__left">
              <div class="p-us__block">
                <h2 class="p-us__title">私たちの取り組み</h2>
                <p class="p-us__text">「まちの一員」としてできることを、誠実に、まじめに、続けていく。<br>
                  私たちの取り組みのひとつひとつが、未来のまちを支える力になると信じています。</p>
              </div>
              <div class="p-us__icon">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/us_icon.png" alt="" width="100" height="100">
              </div>
            </div>
            <figure class="p-us__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/us_img.png" alt="" width="470" height="327">
            </figure>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section class="p-recruit">
    <div class="l-inner">
      <div class="p-recruit__content">
        <figure class="p-recruit__bg">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/recruit_bg.png" alt="採用特設サイト" width="1920" height="750">
        </figure>
        <div class="p-recruit__detail">
          <h2 class="p-recruit__title">採用特設サイト</h2>
          <div class="p-recruit__btn-wrapper">
            <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="p-recruit__btn">一緒に町を作ってみる？</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-top-news">
    <div class="l-inner">
      <div class="p-top-news__content">
        <div class="p-top-news__left">
          <div class="p-top-news__title">
            <h2 class="c-main-title">
              <span class="c-main-title__en">News</span>
              <span class="c-main-title__ja c-main-title__ja--small">お知らせ</span>
            </h2>
          </div>
          <div class="p-top-news__btn-wrapper">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-top-new__btn">
              <p class="p-top-new__btn-text">さらに詳しく</p>
              <div class="p-top-new__btn-arrow">

                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/btn_icon.png" alt="" width="431" height="38">
              </div>
            </a>
          </div>
        </div>
        <div class="p-top-new__right">
          <ul class="p-top-news__lists">
            <?php
            // パラメータの設定
            $args = array(
              'posts_per_page' => 3,
              'post_status' => 'publish',
              'post_type' => 'post',
              'orderby' => 'date',
            );

            // WP_Queryインスタンスの生成
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
              while ($my_query->have_posts()) : $my_query->the_post();
            ?>

                <li class="p-top-news__list">
                  <a href="<?php the_permalink(); ?>" class="p-top-news__list-link">
                    <div class="p-top-news__meta">
                      <?php 
                        $categories = get_the_category();
                        if (!empty($categories)) {
                          echo '<span class="p-top-news__category">' . esc_html($categories[0]->name) . '</span>';
                        }
                      ?>
                      <time datetime="<?php the_time('Y.m.d'); ?>" class="p-top-news__time"><?php the_time('Y.m.d'); ?></time>
                    </div>
                    <p class="p-top-news__list-title">
                      <?php the_title(); ?>
                    </p>
                  </a>
                </li>

            <?php
              endwhile;
            endif;
            wp_reset_postdata();
            ?>

          </ul>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>
<?php get_header(); ?>
<main>
  <section class="p-top-works">
    <div class="l-inner">
      <div class="p-top-works__content">
        <div class="p-top-works__title-wrapper">
          <h2 class="c-main-title">
            <span class="c-main-title__en">Works</span>
            <span class="c-main-title__ja">施工実績</span>
          </h2>
        </div>
        <div class="p-top-works__slider-wrapper">
          <div class="p-top-works__slider">
            <!-- Slider main container -->
            <div class="swiper swiper1">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <figure class="p-top-works__img">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/slider_1.jpg" alt="" width="420" height="280">
                  </figure>
                </div>
                <div class="swiper-slide">
                  <figure class="p-top-works__img">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/slider_1.jpg" alt="" width="420" height="280">
                  </figure>
                </div>
                <div class="swiper-slide">
                  <figure class="p-top-works__img">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/slider_1.jpg" alt="" width="420" height="280">
                  </figure>
                </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>

              <!-- If we need scrollbar -->
              <div class="swiper-scrollbar"></div>
            </div>
          </div>
          <div class="p-top-works__slider">
            <!-- Slider main container -->
            <div class="swiper swiper1">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <figure class="p-top-works__img">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/slider_1.jpg" alt="" width="420" height="280">
                  </figure>
                </div>
                <div class="swiper-slide">
                  <figure class="p-top-works__img">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/slider_1.jpg" alt="" width="420" height="280">
                  </figure>
                </div>
                <div class="swiper-slide">
                  <figure class="p-top-works__img">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/slider_1.jpg" alt="" width="420" height="280">
                  </figure>
                </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>

              <!-- If we need scrollbar -->
              <div class="swiper-scrollbar"></div>
            </div>
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
            <a href="#" class="p-top-new__btn">
              <p class="p-top-new__btn-text">さらに詳しく</p>
              <div class="p-top-new__btn-arrow">
                
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/btn_icon.png" alt="" width="431" height="38">
              </div>
            </a>
          </div>
        </div>
        <div class="p-top-new__right">
          <ul class="p-top-news__lists">
            <li class="p-top-news__list">
              <a href="#" class="p-top-news__list-link">
                <div class="p-top-news__meta">
                  <span class="p-top-news__category">TOPICS</span>
                  <time datetime="2025.00.00" class="p-top-news__time">2025.00.00</time>
                </div>
                <p class="p-top-news__list-title">
                  お知らせタイトルが入ります。ダミーテキストダミーテキストダミーテキストダミーテキスト
                </p>
              </a>
            </li>
            <li class="p-top-news__list">
              <a href="#" class="p-top-news__list-link">
                <div class="p-top-news__meta">
                  <span class="p-top-news__category">TOPICS</span>
                  <time datetime="2025.00.00" class="p-top-news__time">2025.00.00</time>
                </div>
                <p class="p-top-news__list-title">
                  お知らせタイトルが入ります。ダミーテキストダミーテキストダミーテキストダミーテキスト
                </p>
              </a>
            </li>
            <li class="p-top-news__list">
              <a href="#" class="p-top-news__list-link">
                <div class="p-top-news__meta">
                  <span class="p-top-news__category">TOPICS</span>
                  <time datetime="2025.00.00" class="p-top-news__time">2025.00.00</time>
                </div>
                <p class="p-top-news__list-title">
                  お知らせタイトルが入ります。ダミーテキストダミーテキストダミーテキストダミーテキスト
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>
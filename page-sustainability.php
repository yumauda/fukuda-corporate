<?php get_header(); ?>
<main class="sustainability">
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <div class="p-page-mv__detail">
          <div class="p-page-mv__title">
            <h1 class="c-main-title">
              <span class="c-main-title__en c-main-title__en--white">Sustainability</span>
              <span class="c-main-title__ja c-main-title__ja--white">私たちの取り組み</span>
            </h1>
          </div>
          <ul class="p-page-mv__lists">
            <li class="p-page-mv__list">
              <a href="<?php echo esc_url(home_url('/civil')); ?>" class="p-page-mv__link">
                <p class="p-page-mv__link-text p-page-mv__link-text--white">フクダ共創サイクル</p>
                <div class="p-page-mv__icon">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/page_mv_icon_white.png" alt="" width="30" height="30">
                </div>
              </a>
            </li>
            <li class="p-page-mv__list">
              <a href="<?php echo esc_url(home_url('/architecture')); ?>" class="p-page-mv__link">
                <p class="p-page-mv__link-text p-page-mv__link-text--white">SDGs</p>
                <div class="p-page-mv__icon">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/page_mv_icon_white.png" alt="" width="30" height="30">
                </div>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </section>
  <section class="p-page-mvImg">
    <div class="l-inner">
      <figure class="p-page-mvImg__img">
        <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_sustainability.png" alt="私たちの取り組み" width="1700" height="500">
      </figure>
    </div>
  </section>
  <section class="p-cycle">
    <div class="l-inner">
      <div class="p-cycle__content">
        <div class="p-cycle__title">
          <h2 class="c-intro-title">
            <span class="c-intro-title__en c-intro-title__en--white">Co-creation cycle</span>
            <span class="c-intro-title__ja c-intro-title__ja--white">フクダ共創サイクル</span>
          </h2>
        </div>
        <div class="p-cycle__text-wrapper">
          <p class="p-cycle__text">"フクダ"と関わる全ての人と、喜び合える関係でありたい！</p>
        </div>
        <figure class="p-cycle__img">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/cycle_img.png" alt=""フクダ"と関わる全ての人と、喜び合える関係でありたい！" width="1400" height="1400">
        </figure>
      </div>
    </div>
  </section>
  

</main>
<?php get_footer() ?>
<?php get_header(); ?>
<main>
  <div class="p-single-topics">
    <div class="l-inner">
      <div class="p-single-topics__content">

        <div class="p-single-topics__meta">
          <div class="p-single-topics__meta-inner">
            <div class="p-single-topics__meta-content">
              <?php
              $categories = get_the_category();
              if (! empty($categories)) {
                $cat_names = array_map(function ($cat) {
                  return esc_html($cat->name);
                }, $categories);
                echo '<span class="p-single-topics__meta-category">' . implode(', ', $cat_names) . '</span>';
              }
              ?>
              <p class="p-single-topics__meta-text"><?php the_time('Y.m.d'); ?></p>

            </div>
          </div>
          <h1 class="p-single-topics__title"><?php the_title(); ?></h1>
        </div>
        <div class="p-single-topics__main-content">
          <?php the_content(); ?>
        </div>
        
      </div>
      <div class="p-single-topics__btn-wrapper">
          <a href="<?php echo esc_url(home_url('/topics')); ?>" class="p-single-topics__btn">

            <p class="p-single-topics__btn-text">一覧へ戻る</p>
            <span class="p-single-topics__icon">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/single_btn_icon.png" alt="" width="46" height="46">
            </span>
          </a>
        </div>
    </div>
  </div>
</main>
<?php get_footer() ?>
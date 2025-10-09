<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <?php if (is_home() || is_front_page()) : ?>
        <title>フクダ｜コーポレートサイト</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php elseif (is_page('')) : ?>
        <title>フクダ｜コーポレートサイト</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php elseif (is_page((array('contact', 'confirm')))) : ?>
        <title>フクダ｜コーポレートサイト</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php elseif (is_page('thanks')) : ?>
        <title>フクダ｜コーポレートサイト</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php elseif (is_single()) : ?>
        <title>フクダ｜コーポレートサイト</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg">
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />

    <!-- ogp -->
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/common/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/common/apple-touch-icon.png">
    <!-- css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Serif+JP:wght@200..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("/")); ?>">
    <?php endif; ?>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="p-header">
        <div class="p-header__inner">
            <div class="p-header__content">
                <div class="p-header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__home">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/header_logo.png" alt="株式会社フクダ" width="150" height="150">
                    </a>
                </div>
                <nav class="p-header__nav">
                    <ul class="p-header__lists">
                        <li class="p-header__list p-header__list--none">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__link p-header__link--none">
                                <span class="p-header__link-text">事業内容</span>
                            </a>
                            <ul class="p-header__mega">
                                <li class="p-header__mega-list">
                                    <a href="<?php echo esc_url(home_url('/civil')); ?>" class="p-header__mega-link">土木事業</a>
                                </li>
                                <li class="p-header__mega-list">
                                    <a href="<?php echo esc_url(home_url('/arch')); ?>" class="p-header__mega-link">建築事業</a>
                                </li>
                                <li class="p-header__mega-list">
                                    <a href="<?php echo esc_url(home_url('/agri')); ?>" class="p-header__mega-link">アグリ事業</a>
                                </li>
                                <li class="p-header__mega-list">
                                    <a href="<?php echo esc_url(home_url('/solar')); ?>" class="p-header__mega-link">ソーラー発電事業</a>
                                </li>
                                <li class="p-header__mega-list">
                                    <a href="<?php echo esc_url(home_url('/estate')); ?>" class="p-header__mega-link">不動産事業</a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-header__list p-header__list--none">
                            <a href="<?php echo esc_url(home_url('/#works')); ?>" class="p-header__link">
                                <span class="p-header__link-text">施工実績</span>
                            </a>
                            <ul class="p-header__mega p-header__mega--flex">
                                <li class="p-header__mega-list">
                                    <a href="<?php echo esc_url(home_url('/engineer')); ?>" class="p-header__mega-link">土木事業</a>
                                    <ul class="p-header__small-lists">
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/engineer_category/road/')); ?>" class="p-header__small-link">道路</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/engineer_category/bridge/')); ?>" class="p-header__small-link">橋梁</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/engineer_category/river/')); ?>" class="p-header__small-link">河川</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/engineer_category/tunnel/')); ?>" class="p-header__small-link">トンネル</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/engineer_category/railway/')); ?>" class="p-header__small-link">鉄道</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/engineer_category/harbor/')); ?>" class="p-header__small-link">湾港</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-header__mega-list p-header__mega-list--mtnone">
                                    <a href="<?php echo esc_url(home_url('/architecture')); ?>" class="p-header__mega-link">建築事業</a>
                                    <ul class="p-header__small-lists">
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/architecture_category/commercial/')); ?>" class="p-header__small-link">商業施設</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/architecture_category/education/')); ?>" class="p-header__small-link">教育施設</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/architecture_category/medical/')); ?>" class="p-header__small-link">医療・福祉施設</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/architecture_category/facility/')); ?>" class="p-header__small-link">工場</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/architecture_category/office/')); ?>" class="p-header__small-link">オフィス</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/architecture_category/house/')); ?>" class="p-header__small-link">住宅</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/architecture_category/local/')); ?>" class="p-header__small-link">地域開発</a>
                                        </li>
                                        <li class="p-header__small-list">
                                            <a href="<?php echo esc_url(home_url('/architecture_category/tradition/')); ?>" class="p-header__small-link">伝統建造物</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/company#company')); ?>" class="p-header__link">
                                <span class="p-header__link-text">会社概要</span>
                            </a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/sustainability')); ?>" class="p-header__link">
                                <span class="p-header__link-text">私たちの取り組み</span>
                            </a>
                        </li>

                    </ul>
                    <div class="p-header__btn-wrapper">
                        <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="p-header__recruit-btn">
                            <div class="p-header__recruit-icon">
                                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/header_recruit_icon.png" alt="採用情報" width="150" height="150">
                            </div>
                            <p class="p-header__btn-text">採用情報</p>
                        </a>
                        <a href="#" class="p-header__contact-btn">
                            <div class="p-header__contact-icon">
                                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/header_contact_icon.png" alt="お問い合わせ" width="150" height="150">
                            </div>
                            <p class="p-header__btn-text">お問い合わせ</p>
                        </a>
                    </div>
                    <button class="p-header__drawer p-drawer-icon">
                        <span class="p-drawer-icon__bars">
                            <span class="p-drawer-icon__bar1"></span>
                            <span class="p-drawer-icon__bar3"></span>
                        </span>
                    </button>

                </nav>
                <div class="p-header__drawer-content p-drawer-content">
                    <div class="p-drawer-content__items">
                        <ul class="p-drawer-content__lists">
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer-content__link">トップ</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/civil')); ?>" class="p-drawer-content__link">土木事業</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/arch')); ?>" class="p-drawer-content__link">建築事業</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/agri')); ?>" class="p-drawer-content__link">アグリ事業</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/solar')); ?>" class="p-drawer-content__link">ソーラー発電事業</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/estate')); ?>" class="p-drawer-content__link">不動産事業</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/engineer')); ?>" class="p-drawer-content__link">土木事業一覧</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/architecture')); ?>" class="p-drawer-content__link">建築事業一覧</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/company')); ?>" class="p-drawer-content__link">会社概要</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-drawer-content__link">お問い合わせ</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
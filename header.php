<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <meta name="description" content="株式会社LABwelは福井県敦賀市にある、お仕事を通して自分の存在価値・やる気・新たな能力の発見など、利用者さんの成長に繋がる自立を支援をする会社です。">
    <meta name="keywords" content="labwel, ラボウェル, ラボエル, Labwel, fukui, 福井県, turuga, 敦賀市, 就労継続支援">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_deregister_script('jquery'); ?>

</head>
<body <?php body_class(); ?> ontouchstart="">
<?php wp_head(); ?>

    <div class="wrapper"><!-- wrapper start -->
        <header id="header" class="header">
           <h1 class="logo">
               <span><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="LABwel"></a></span>
           </h1>
            <img src="<?php echo esc_url(get_theme_file_uri('images/main-image-n.jpg')); ?>" alt="メインイメージ">
            <h1 class="">地域社会への貢献</h1>
            <div class="arrow-wrap">
                <div class="arrow"></div>
                <span>page top</span>
            </div>
        </header>
        <nav id="nav" class="nav">
            <div class="nav-box flex-box">
            <div class="flex-item flex-item1">
                <a href="<?php echo esc_url( home_url('/') ); ?>">トップページ</a>
            </div>
            <div class="flex-item flex-item2">
                <a href="<?php echo esc_url(home_url('/about')) ?>">会社情報</a>
            </div>
            <div class="flex-item flex-item3">
                <a href="#">各施設案内</a>
                <div class="nav-box flex-box">
                    <div class="flex-item flex-item6"><a href="<?php echo esc_url(home_url('/service')) ?>">就労継続支援について</a></div>
                    <div class="flex-item flex-item7"><a href="<?php echo esc_url(home_url('/local')) ?>">地域社会への取り組み</a></div>
                </div>
            </div>
            <div class="flex-item flex-item4">
                <a href="https://www.facebook.com/labwel.co.jp/">Facebook</a>
            </div>
            <div class="flex-item flex-item5">
                <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
            </div>
            </div>
        </nav>
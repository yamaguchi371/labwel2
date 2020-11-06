<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_deregister_script('jquery'); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_head(); ?>

    <div class="wrapper"><!-- wrapper start -->
        <header id="header" class="header">
            <img src="<?php echo esc_url(get_theme_file_uri('images/main-image-l.jpg')); ?>" alt="">
        </header>
        <nav id="nav" class="nav">
            <div class="nav-box flex-box">
            <div class="flex-item flex-item1">
                <a href="<?php echo esc_url( home_url('/') ); ?>">トップページ</a>
            </div>
            <div class="flex-item flex-item2">
                <a href="#">会社情報</a>
            </div>
            <div class="flex-item flex-item3">
                <a href="#">各施設情報</a>
            </div>
            <div class="flex-item flex-item4">
                <a href="#">Facebook</a>
            </div>
            <div class="flex-item flex-item5">
                <a href="#">お問い合わせ</a>
            </div>
            </div>
        </nav>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <!-- Bootstrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    
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
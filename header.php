<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php // ページ毎にタイトルをタグ上部に出力する
global $page, $paged;
if(is_front_page()) : //トップページ
	bloginfo('name');
elseif(is_home()) : //ブログページ（ブログサイトの場合はトップページ）
	wp_title('|', true, 'right');
	bloginfo('name');
elseif(is_single()) : //記事ページ
	wp_title('');
elseif(is_page()) : //固定ページ
	wp_title('|', true, 'right');
	bloginfo('name');
elseif(is_author()): //著者ページ
	wp_title('|', true, 'right');
	bloginfo('name');
elseif(is_archive()) : //アーカイブページ（カテゴリーページなど）
	wp_title('|', true, 'right');
	bloginfo('name');
elseif(is_search()) : //検索結果ページ
	wp_title('');
elseif(is_404()): //404ページ
	echo '404|';
	bloginfo('name');
endif;
if($paged >= 2 || $page >= 2) : //２ページ目以降の場合
	echo '-' . sprintf('%sページ',
	max($paged,$page));
endif;
?></title>
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
            <h1 class="policy">株式会社LABwelはお仕事を通して<br>自分の存在価値・やる気・新たな能力の発見など、<br>利用者さんの成長に繋がる自立を支援をする会社です！</h1>
<!--
            <div class="arrow-wrap">
                <div class="arrow"></div>
                <span>page top</span>
            </div>
-->
        </header>
        <nav id="nav" class="nav">
            <div class="nav-box flex-box">
            <div class="flex-item flex-item1">
                <a href="<?php echo esc_url( home_url('/') ); ?>">トップページ</a>
            </div>
            <div class="flex-item flex-item2">
                <a href="<?php echo esc_url(home_url('/about')); ?>">会社情報</a>
            </div>
            <div class="flex-item flex-item3">
                <p>事業所のご案内</p>
                <div class="nav-box flex-box">
                    <div class="flex-item flex-item6"><a href="<?php echo esc_url(home_url('/service')); ?>">事業所のご案内</a></div>
                    <div class="flex-item flex-item7"><a href="<?php echo esc_url(home_url('/local')); ?>">お仕事の内容</a></div>
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
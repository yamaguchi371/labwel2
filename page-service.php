
<?php
/* Template Name: 就労継続支援について */
get_header(); ?>
        <div class="l-wrapper grid-box"><!-- l-wrapper start -->
        <aside class="sidebar sidebar1"></aside>
        <main class="main"><!-- main start -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article <?php body_class(); ?>>
                <h1 class="article-title"><?php the_title(); ?></h1>
                <div class="content page">
                    <h2>サービス利用までの流れ</h2>
                    <h2 id="typea">就労継続支援A型事業所</h2>
                    <h3>やりがいの見つかるA型</h3>
                    <div class="row mb70">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/coast2.jpg')); ?>" alt="海岸清掃">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/trash2.jpg')); ?>" alt="戸別収集">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/kelpslice.jpg')); ?>" alt="昆布かき">
                        </div>
                    </div>
                    <h2 id="typeb">就労継続支援B型事業所</h2>
                    <h3>自分の居場所が見つかるB型</h3>
                    <div class="row mb70">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/clean3.jpg')); ?>" alt="寺院清掃">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/clean4.jpg')); ?>" alt="清掃">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/clean5.jpg')); ?>" alt="寺院清掃">
                        </div>
                    </div>
                </div>
            
            </article>
            <?php endwhile; ?>
            <?php else: //投稿する表示が無い時 ?>
            <p>まだ投稿されていません。</p>
            <?php endif; ?>
        </main><!-- main end -->
        <aside class="sidebar sidebar2"></aside>
        </div><!-- l-wrapper end -->
<?php get_footer(); ?>


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

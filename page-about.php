<?php
/* Template Name: 企業情報 */
get_header(); ?>
<div class="l-wrapper grid-box">
    <!-- l-wrapper start -->
    <aside class="sidebar sidebar1"></aside>
    <main class="main">
        <!-- main start -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php body_class(); ?>>
            <h2 class="page-title">
                INFOMATION
                <p>INFOMATION</p>
            </h2>
            
            <h3 title="タイトル">会社概要</h3>
            
            <div class="content">
                <section class="section mb-5">
                    <p class="motto">株式会社LABwelは、お仕事を通して自分の存在価値・やる気・新たな能力の
                        発見など、利用者さんの“成長に繋がる自立”を支援をする会社です。</p>

                    <div class="about-image">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/warking.jpg')); ?>" alt="" loading="lazy">
                    </div>
                    
                    <div class="flex-box company-info">
                        <dl>
                            <dd>会社名</dd>
                            <dt>株式会社LABwel</dt>
                            <dd>代表者名</dd>
                            <dt>津田一彦</dt>
                            <dd>所在地</dd>
                            <dt>福井県敦賀市公文名54-10-1</dt>
                        </dl>
                        <dl>
                            <dd>TEL</dd>
                            <dt>0770-47-6526</dt>
                            <dd>FAX</dd>
                            <dt>0770-47-6526</dt>
                            <dd>創業</dd>
                            <dt>平成27年7月21日</dt>
                        </dl>
                    </div>

                </section>
                <h3 title="タイトル">経営理念</h3>
                <section class="section mb-5">
                    <p class="motto">お客様の満足に貢献し、障がい者の満足を追求し、地域社会に貢献する。</p>
                    
                    <div class="about-image">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/gather.jpg')); ?>" alt="">
                    </div>
                    
                    <div class="flex-box company-info">
                        <dl>
                            <dt>お客様の満足の追及</dt>
                            <dt>障がい者の満足の追及</dt>
                        </dl>
                        <dl>
                            <dt>地域社会への貢献</dt>
                        </dl>
                    </div>

                </section>
                <h3 title="タイトル">沿革</h3>
                <section class="section">
                   
                   <div class="flex-box company-info">
                       <dl>
                          <dd>平成28年７月</dd>
                          <dt>株式会社LABwel　設立</dt>
                          <dd>同年</dd>
                          <dt>事業所　+ipppo　設立</dt>
                       </dl>
                       <dl>
                           <dd>令和元年</dd>
                           <dt>事業所　+ipppoにてB型事業所開始</dt>
                       </dl>
                   </div>
                   
                   
                </section>
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

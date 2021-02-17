
<?php
/* Template Name: 企業情報 */
get_header(); ?>
        <div class="l-wrapper grid-box"><!-- l-wrapper start -->
        <aside class="sidebar sidebar1"></aside>
        <main class="main"><!-- main start -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article <?php body_class(); ?>>
                <h2 class="section-title"><?php the_title(); ?></h2>
                <div class="content">
                  <h3 title="タイトル">会社概要</h3>
                   <section class="section mb-5">
                   <p>株式会社LABwelは、お仕事を通して自分の存在価値・やる気・新たな能力の
発見など、利用者さんの成長に繋がる自立を支援をする会社です。</p>
                  <section class="section-left mr-3">
                      <ul>
                          <li class="list-item list-item1">
                              <span class="list-left">会社名</span>
                              <span>株式会社LABwel</span>
                          </li>
                          <li class="list-item list-item2">
                              <span class="list-left">代表者名</span>
                              <span>津田一彦</span>
                          </li>
                          <li class="list-item list-item3">
                              <span class="list-left">所在地</span>
                              <span>福井県敦賀市公文名54-10-1</span>
                          </li>
                          <li class="list-item list-item4">
                              <span class="list-left">TEL</span>
                              <span>0770-47-6526</span>
                          </li>
                          <li class="list-item list-item5">
                              <span class="list-left">FAX</span>
                              <span>0770-47-6527</span>
                          </li>
                          <li class="list-item list-item6">
                              <span class="list-left">創業</span>
                              <span>平成27年7月21日</span>
                          </li>
                      </ul>
                  </section>
                  <section class="section-right">
                      <img src="<?php echo esc_url(get_theme_file_uri('images/warking.jpg')); ?>" alt="">
                  </section>
                  <div class="clearfix"></div>
                   </section>
                   <h3 title="タイトル">経営理念</h3>
                   <section class="section mb-5">
                       <p>お客様の満足に貢献し、障がい者の満足を追求し、地域社会に貢献する。</p>
                       <div class="section-left mr-3">
                           <ul>
                               <li class="list-item list-item1">
                                   お客様の満足の追及
                               </li>
                               <li class="list-item list-item2">
                                   障がい者の満足の追及
                               </li>
                               <li class="list-item list-item3">
                                   地域社会への貢献
                               </li>
                           </ul>
                       </div>
                       <div class="section-right">
                           <img src="<?php echo esc_url(get_theme_file_uri('images/gather.jpg')); ?>" alt="">
                       </div>
                       <div class="clearfix"></div>
                   </section>
                   <h3 title="タイトル">沿革</h3>
                   <section class="section">
                       <p>平成28年7月　株式会社LABwel</p>
                       <p>同年　事業所　+ipppo　設立</p>
                       <p>令和元年　事業所　+ipppoにてB型事業開始</p>
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

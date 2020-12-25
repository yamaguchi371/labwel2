
<?php
/* Template Name: 地域社会への取り組み */
get_header(); ?>
        <div class="l-wrapper grid-box"><!-- l-wrapper start -->
        <aside class="sidebar sidebar1"></aside>
        <main class="main"><!-- main start -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article <?php body_class(); ?>>
                <h1 class="article-title"><?php the_title(); ?></h1>
                <div class="content page">
                    <h2>Index</h2>
                    <ul>
                        <li class="list-item list-item1"><a href="#coast__clean">海岸清掃</a></li>
                        <li class="list-item list-item2"><a href="#">戸別収集</a></li>
                        <li class="list-item list-item3"><a href="#">高齢者生活支援</a></li>
                        <li class="list-item list-item4"><a href="#">寺院清掃</a></li>
                        <li class="list-item list-item5"><a href="#">清掃・クリーニング</a></li>
                        <li class="list-item list-item6"><a href="#">おぼろ昆布・加工販売</a></li>
                        <li class="list-item list-item7"><a href="#">ケータリング</a></li>
                        <li class="list-item list-item8"><a href="#">特殊清掃</a></li>
                    </ul>
                    <h2 id="coast__clean">海岸清掃</h2>
                    <section class="section01">
                       <h3 class="description">
                           敦賀市認可のもと年間を通して車浦地田を中心に海岸清掃をしております。廃プラスチックなどの海外からの漂着物を回収し、武生環境清掃センターへ搬出しております。
                       </h3>
                        <h3 class="description">
                            ＮＨＫ取材を受けました 2020.3.26
                        </h3>
                        <p>２０１９年、大阪市２０サミット。安倍首相の２０５０年までにプラスチックゴミによる追加汚染ゼロ種目目指すLABwelの海岸清掃活動が国からも注目され取材されました。</p>
                        <div class="row mb70">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
                        </div>
                        <h3 class="description">
                            水島・特別海岸清掃へ行ってきました　2020.6
                        </h3>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
                    </section>
                    <h2 id="">戸別収集</h2>
                    <section class="section01">
                        <h3 class="description">
                            「一般廃棄物収集運搬許可業者　敦賀市指令環□498」を敦賀市より許可いただき一般家庭の不用品や、粗大ゴミの分別、回収を行っています
                        </h3>
                    </section>
                    <h2 id="">高齢者生活支援</h2>
                    <section class="section01">
                       <h3 class="description">高齢者の生活支援として、お家のお掃除、お庭の草むしり、朝のゴミ出し（回収）を行っております</h3>
                        
                    </section>
                    <!-- 何かイメージ入れたいなぁ......(*´ω｀*) -->
                    <h2 id="">寺院清掃</h2>
                    <section class="section01">
                        <h3 class="description">
                            国指定重要文化財「西福寺」や１３９５年開創の由緒と歴史的伝統ある「永　寺」の寺内外の定期清掃を行っております。
                        </h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/clean4.jpg')); ?>" alt="">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
                        </div>
                    </section>
                    <h2 id="">洗濯・クリーニング</h2>
                    <section class="section01">
                        <h3 class="description">敦賀市の病院で働く、医師看護士さんのタオルを回収し、洗濯・クリーニングしております。</h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
                        </div>
                    </section>
                    <h2 id="">おぼろ昆布・加工販売</h2>
                    
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

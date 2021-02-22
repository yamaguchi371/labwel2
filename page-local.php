<?php
/* Template Name: お仕事の内容 */
get_header(); ?>
<div class="l-wrapper grid-box">
    <!-- l-wrapper start -->
    <aside class="sidebar sidebar1"></aside>
    <main class="main">
        <!-- main start -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php body_class(); ?>>
            <h1 class="article-title"><?php the_title(); ?></h1>
            <div class="content page">
                <ul>
                    <li class="list-item list-item1"><a href="#coast__clean">海岸清掃</a></li>
                    <li class="list-item list-item2"><a href="#garbage">戸別収集</a></li>
                    <li class="list-item list-item3"><a href="#old__help">高齢者生活支援</a></li>
                    <li class="list-item list-item4"><a href="#temple__clean">寺院清掃</a></li>
                    <li class="list-item list-item5"><a href="#cleaning">清掃・クリーニング</a></li>
                    <li class="list-item list-item6"><a href="#kelp__process">おぼろ昆布・加工販売</a></li>
                    <li class="list-item list-item7"><a href="#catering">ケータリング</a></li>
                    <li class="list-item list-item8"><a href="#s__clean">特殊清掃</a></li>
                </ul>
                <h2 id="coast__clean">海岸清掃</h2>
                <section class="section01">
                    <h3 class="description">
                        敦賀市認可のもと年間を通して車浦地田を中心に海岸清掃をしております。廃プラスチックなどの海外からの漂着物を回収し、武生環境清掃センターへ搬出しております。
                    </h3>
                    <div class="row mb70">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/coast2.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/coast3.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/clean9.jpg')); ?>" alt="">
                        </div>
                    </div>
<!--
                    <div class="bg-gray">
                    <h3 class="description">
                       <span class="green-line">
                           ＮＨＫ取材を受けました 2020.3.26
                       </span>
                    </h3>
                    <p><span class="green-line">２０１９年、大阪市２０サミット。安倍首相の２０５０年までにプラスチックゴミによる追加汚染ゼロ種目目指すLABwelの海岸清掃活動が国からも注目され取材されました。</span></p>
                    <div class="row mb70">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="">
                        </div>
                    </div>
                    <h3 class="description">
                        <span class="green-line">水島・特別海岸清掃へ行ってきました　2020.6</span>
                    </h3>
                    <div class="row mb70">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="">
                        </div>
                    </div>
                    </div>
-->
                </section>
                <h2 id="garbage">戸別収集</h2>
                <section class="section01">
                    <h3 class="description">
                        一般廃棄物収集・運搬許可を敦賀市よりいただき一般家庭の不用品や、粗大ゴミの分別、<br>回収を行っています
                    </h3>
                    <div class="row mb70">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/trash2.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/trash3.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/trash4.jpg')); ?>" alt="">
                        </div>
                    </div>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/flyer.JPG')); ?>" alt="戸別収集広告">
                </section>
                <h2 id="old__help">高齢者生活支援</h2>
                <section class="section01">
                    <h3 class="description">高齢者の生活支援として、お家のお掃除、お庭の草むしり、朝のゴミ出し（回収）を行っております</h3>
                    <div class="row mb70">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/care4.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/care2.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/care3.jpg')); ?>" alt="">
                        </div>
                    </div>

                </section>
                <h2 id="temple__clean">寺院清掃</h2>
                <section class="section01">
                    <h3 class="description">
                        国指定重要文化財「西福寺」や１３９５年開創の由緒と歴史的伝統ある「永　寺」の寺内外の定期清掃を行っております。
                    </h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/clean4.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/clean10.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/clean11.jpg')); ?>" alt="">
                        </div>
                    </div>
                </section>
                <h2 id="cleaning">洗濯・クリーニング</h2>
                <section class="section01">
                    <h3 class="description">敦賀市の病院で働く、医師看護士さんのタオルを回収し、洗濯・クリーニングしております。</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/wash2.jpg')); ?>" alt="洗濯">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/clean6.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/clean7.jpg')); ?>" alt="">
                        </div>
                    </div>
                </section>
                <h2 id="kelp__process">おぼろ昆布・加工販売</h2>
                <section class="section01">
                    <h3 class="description">北前船で知られる北海道の真昆布をLABwelの昆布かき職人が真心を込めて加工し、販売しています。</h3>
                    <!-- ここに映像を入れる -->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/kelp2.jpg')); ?>" alt="昆布かき">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/kelp3.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/kelp4.jpg')); ?>" alt="">
                        </div>
                    </div>
                </section>
                <h2 id="bento">お弁当・調理販売</h2>
                <section class="section01">
                    <h3 class="description">LABwelの調理のプロがお客様のご要望に合わせてお弁当を調理、販売しております。お弁当の内容や価格などもご相談承ります。</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/cook2.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/cook3.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/catering3.jpg')); ?>" alt="">
                        </div>
                    </div>
                </section>
                <h2 id="catering">ケータリング</h2>
                <section class="section01">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="">
                        </div>
                    </div>
                </section>
                <h2 id="s__clean">特別清掃</h2>
                <section class="section01">
                    <h3 class="description">会社の駐車場の除草作業、一般家庭のお庭の除草・剪定作業など特殊な清掃も行っております。</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/clean5.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/trash2.jpg')); ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/trash3.jpg')); ?>" alt="">
                        </div>
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

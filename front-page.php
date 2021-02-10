<?php get_header(); ?>
<div class="l-wrapper grid-box">
    <!-- l-wrapper start -->
    <aside class="sidebar sidebar1"></aside>
    <main id="main" class="main">
        <!-- main start -->
        <section class="section">
            <h2 class="section-title">就労継続支援サービス利用希望の方</h2>
            <div class="flex-box">
                <div class="flex-item flex-item1">
                    <h3>
                        就労継続支援A型事業所<span class="ipppo-logo"><img src="<?php echo esc_url(get_theme_file_uri('images/ipppo.jpg')); ?>" alt="ipppo"></span><span class="ipppo-logo"><img src="<?php echo esc_url(get_theme_file_uri('images/ipppo+.jpg')); ?>" alt="+ipppo"></span>
                    </h3>
                    <p>やりがいの見つかる『A型』<br>バリエーション豊富なお仕事内容だから<br>自分のやりがいにつながる得意なお仕事が<br>きっと見つかります。</p>
                    <span class="underline"><a href="<?php echo esc_url(home_url('/service#typea')) ?>">詳細</a></span>
                </div>
                <div class="flex-item flex-item2">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/coast2.jpg')); ?>" alt="海岸清掃">
                </div>
                <div class="flex-item flex-item3">
                    <h3>
                        就労継続支援B型事業所
                        <span class="ipppo-logo">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/ipppo+.jpg')); ?>" alt="+ipppo">
                        </span>
                    </h3>
                    <p>自分の居場所が見つかる『B型』<br>みんなとお仕事するのが楽しくなる。<br>そんな働きやすい環境と<br>楽しい人間関係づくりにこだわりました。</p>
                    <span class="underline"><a href="<?php echo esc_url(home_url('/service#typeb')) ?>">詳細</a></span>
                </div>
                <div class="flex-item flex-item4">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/clean3.jpg')); ?>" alt="寺院清掃">
                </div>
                <div class="flex-item flex-item5">
                    <h3>
                        共同生活援助（グループホーム）<br>LIFE Ipppo!和久野
                    </h3>
                    <p>夜間でも支援員が常在しているので<br>安心して入居できます！</p>
                    <span class="underline"><a href="<?php echo esc_url(home_url('/service#group')) ?>">詳細</a></span>
                </div>
                <div class="flex-item flex-item6">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/life_ipppo.jpg')); ?>" alt="ライフいっぽ和久野">
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2 class="section-title">
                地域社会への取り組み
            </h2>
            <div class="grid-box works">
                <div class="box-item box-item1">
                    <a href="<?php echo esc_url(home_url('/local#coast__clean')) ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/corst-clean.jpg')); ?>" alt="海岸清掃"></a>
                    <p>海岸清掃</p>
                </div>
                <div class="box-item box-item2">
                    <a href="<?php echo esc_url(home_url('/local#garbage')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/trash.jpg')); ?>" alt="個別収集"></a>
                    <p>個別収集</p>
                </div>
                <div class="box-item box-item3">
                    <a href="<?php echo esc_url(home_url('/local#old__help')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/care.jpg')); ?>" alt="高齢者生活支援"></a>
                    <p>高齢者生活支援</p>
                </div>
                <div class="box-item box-item4">
                    <a href="<?php echo esc_url(home_url('/local#temple__clean')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/clean.jpg')); ?>" alt="寺院清掃"></a>
                    <p>寺院清掃</p>
                </div>
                <div class="box-item box-item5">
                    <a href="<?php echo esc_url(home_url('/local#cleaning')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/wash.jpg')); ?>" alt="洗濯・クリーニング"></a>
                    <p>洗濯・クリーニング</p>
                </div>
                <div class="box-item box-item6">
                    <a href="<?php echo esc_url(home_url('/local#kelp__process')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/kelp.jpg')); ?>" alt="おぼろ昆布・加工販売"></a>
                    <p>おぼろ昆布・加工販売</p>
                </div>
                <div class="box-item box-item7">
                    <a href="<?php echo esc_url(home_url('/local#bento')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/cook.jpg')); ?>" alt="お弁当・調理販売"></a>
                    <p>お弁当・調理販売</p>
                </div>
                <div class="box-item box-item8">
                    <a href="<?php echo esc_url(home_url('/local#catering')); ?>">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/catering.jpg')); ?>" alt="ケータリング">
                    </a>
                    <p>ケータリング</p>
                </div>
                <div class="box-item box-item9">
                    <a href="<?php echo esc_url(home_url('/local#s__clean')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/clean2.jpg')); ?>" alt="特別清掃"></a>
                    <p>特別清掃</p>
                </div>
            </div>
        </section>

    </main><!-- main end -->
    <aside class="sidebar sidebar2"></aside>
</div><!-- l-wrapper end -->
<?php get_footer(); ?>

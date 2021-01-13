<?php get_header(); ?>
<div class="l-wrapper grid-box">
    <!-- l-wrapper start -->
    <aside class="sidebar sidebar1"></aside>
    <main id="main" class="main">
        <!-- main start -->
        
        <a href="<?php echo esc_url(home_url('/service')) ?>" target="_blank" rel="noreferrer noopener">
            <h2 class="service-guide">
                <span>就労継続支援サービス利用希望の方</span>
                <span class="click">ここを<br>クリック!!</span>
            </h2>
        </a>
        
        <section class="f-section">
            <div class="flex-box office-info">
               <div class="flex-item flex-item1">
                   <h3 class="office-category1">グループホーム「和久野」</h3>
                   <h4 class="mt-3 font-weight-bold">入居者募集中</h4>
                   <div class="flex-box grouphome">
                       <div class="flex-item">
                           敦賀市和久野2号東河原17-3<br>
                           近くのコンビニまで徒歩5分
                       </div>
                       <div class="flex-item">
                          サービス提供時間24時間365日<br>
                          <div class="text-right"><a href="#">詳細</a></div>
                       </div>
                   </div>
                   
               </div>
                <div class="flex-item flex-item2">
                    <h3 class="office-category">就労継続支援A型事業所
                        <span class="ipppo-logo">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/ipppo.jpg')); ?>" alt="">
                        </span>
                        <span class="ipppo-logo">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/ipppo+.jpg')); ?>" alt="">
                        </span>
                    </h3>
                    <p class="office-desc">
                        やりがいの見つかる『A型』<br>バリエーション豊富なお仕事内容だから<br>自分のやりがいにつながる得意なお仕事が<br>きっと見つかります。
                        <br>
                        <br>
                        <br>
                        <span><a href="<?php echo esc_url(home_url('/service#typea')) ?>">詳細</a></span>
                    </p>
                </div>
                <div class="flex-item flex-item3">
                    <h3 class="office-category">
                        就労継続支援B型事業所
                        <span class="ipppo-logo">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/ipppo+.jpg')); ?>" alt="">
                        </span>
                    </h3>
                    <p class="office-desc">
                        自分の居場所が見つかる『B型』<br>みんなとお仕事するのが楽しくなる。<br>そんな働きやすい環境と<br>楽しい人間関係づくりにこだわりました。
                        <br>
                        <br>
                        <br>
                        <span><a href="<?php echo esc_url(home_url('/service#typeb')); ?>">詳細</a></span>
                    </p>
                </div>
            </div>
        </section><!-- f-section end -->
        <section class="f-section">
            <h2 class="social-work-title">
               お仕事の内容
            </h2>
            <div class="grid-box social-work">
                <div class="card box-item1">
                    <header class="card-header">海岸清掃</header>
                    <a href="<?php echo esc_url(home_url('/local#coast__clean')) ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/corst-clean.jpg')); ?>" alt="海岸清掃"></a>
                </div>
                <div class="card box-item2">
                    <header class="card-header">個別収集</header>
                    <a href="<?php echo esc_url(home_url('/local#garbage')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/trash.jpg')); ?>" alt="個別収集"></a>
                </div>
                <div class="card box-item3">
                    <header class="card-header">高齢者生活支援</header>
                    <a href="<?php echo esc_url(home_url('/local#old__help')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/care.jpg')); ?>" alt="高齢者生活支援"></a>
                </div>
                <div class="card box-item4">
                    <header class="card-header">寺院清掃</header>
                    <a href="<?php echo esc_url(home_url('/local#temple__clean')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/clean.jpg')); ?>" alt="寺院清掃"></a>
                </div>
                <div class="card box-item5">
                    <header class="card-header">洗濯・クリーニング</header>
                    <a href="<?php echo esc_url(home_url('/local#cleaning')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/wash.jpg')); ?>" alt="洗濯・クリーニング"></a>
                </div>
                <div class="card box-item6">
                    <header class="card-header">おぼろ昆布・加工販売</header>
                    <a href="<?php echo esc_url(home_url('/local#kelp__process')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/kelp.jpg')); ?>" alt="おぼろ昆布・加工販売"></a>
                </div>
                <div class="card box-item7">
                    <header class="card-header">お弁当・調理販売</header>
                    <a href="<?php echo esc_url(home_url('/local#bento')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/cook.jpg')); ?>" alt="お弁当・調理販売"></a>
                </div>
                <div class="card box-item8">
                    <header class="card-header">ケータリング</header>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/catering.jpg')); ?>" alt="ケータリング">
                </div>
                <div class="card box-item9">
                    <header class="card-header">特別清掃</header>
                    <a href="<?php echo esc_url(home_url('/local#s__clean')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/clean2.jpg')); ?>" alt="特別清掃"></a>
                </div>
            </div>
        </section>
    </main><!-- main end -->
    <aside class="sidebar sidebar2"></aside>
</div><!-- l-wrapper end -->
<?php get_footer(); ?>

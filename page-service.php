
<?php
/* Template Name: 事業所のご案内 */
get_header(); ?>
        <div class="l-wrapper grid-box"><!-- l-wrapper start -->
        <aside class="sidebar sidebar1"></aside>
        <main class="main"><!-- main start -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article <?php body_class(); ?>>
                <h1 class="article-title"><?php the_title(); ?></h1>
                <div class="content page">
                    <h2 id="typea">就労継続支援A型事業所 
                        <span class="ipppo-logo">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/ipppo.jpg')); ?>" alt="">
                        </span>
                        <span class="ipppo-logo">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/ipppo+.jpg')); ?>" alt="">
                        </span>
                    </h2>
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
                    <h2>サービス利用開始までの流れ</h2>
                    <div class="grid-box flowchart1">
                       <div class="box-item">見学体験利用</div>
                       <div class="box-item">計画相談</div>
                       <div class="box-item">申請</div>
                       <div class="box-item row-span2">サービスなど利用の計画案提出</div>
                       <div class="box-item">認定調査</div>
                       <div class="box-item">受給者証発行</div>
                       <div class="box-item">サービス利用</div>
                    </div>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="" class="mb70">
                    <h2 id="typeb">就労継続支援B型事業所
                        <span class="ipppo-logo">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/ipppo+.jpg')); ?>" alt="">
                        </span>
                    </h2>
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
                    <h2>サービス利用開始までの流れ</h2>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="" class="mb70">
                    
                    <h2 id="grope">グループホーム（共同生活援助）</h2>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/gropehome.jpg')); ?>" alt="ライフいっぽ和久野" class="img__home mb70">
                    <h2>サービス利用開始までの流れ</h2>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/noimage.jpg')); ?>" alt="" class="mb70">
                    
                    <h2>施設</h2>
                    
                    <ul>
                        <li class="list-item list-item1">
                            本社/ipppo!　　　　福井県敦賀市公文名54-10-1
                        </li>
                        <li class="list-item list-item2">
                            +ipppo!　　　　　　福井県敦賀市野神2-34-2
                        </li>
                        <li class="list-item list-item3">
                            Be ipppo!　　　　　福井県敦賀市野神15-4-13
                        </li>
                        <li class="list-item list-item4">
                            ライフいっぽ和久野&nbsp;福井県敦賀市和久野2号東河原17-3
                        </li>
                    </ul>
                    
                    <div class="page-column flex-box">
                        <div class="flex-item flex-item1">
                            <h3>本社/ipppo!</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.5471168521503!2d136.05110441525704!3d35.614236480209975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001e55444fbdf73%3A0xe95b2cb616ba3505!2z44CSOTE0LTAxMzEg56aP5LqV55yM5pWm6LOA5biC5YWs5paH5ZCN77yV77yU!5e0!3m2!1sja!2sjp!4v1609910204826!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="flex-item flex-item2">
                            <h3>+ipppo</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.729710679572!2d136.05291601525752!3d35.63438928020527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001e5335f98bff7%3A0x1b4a37e74ad48a02!2z44CSOTE0LTAxMjEg56aP5LqV55yM5pWm6LOA5biC6YeO56We77yS!5e0!3m2!1sja!2sjp!4v1609911135242!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="flex-item flex-item3">
                            <h3>Be ipppo!</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.694787329481!2d136.05560401525747!3d35.635250080205005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001facb6eccd6fb%3A0xb400c77583c41e2a!2z44CSOTE0LTAxMjEg56aP5LqV55yM5pWm6LOA5biC6YeO56We77yR77yV4oiS77yU4oiS77yR77yT!5e0!3m2!1sja!2sjp!4v1610424775522!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="flex-item flex-item4">
                            <h3>ライフいっぽ和久野</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.107495745236!2d136.06029611510985!3d35.625076380207446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001fab1e87425fd%3A0x23b2a51bd662539c!2z44CSOTE0LTAxMjMg56aP5LqV55yM5pWm6LOA5biC5ZKM5LmF6YeO77yS!5e0!3m2!1sja!2sjp!4v1610670983353!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

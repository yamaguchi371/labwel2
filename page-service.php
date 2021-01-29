<?php
/* Template Name: 事業所のご案内 */
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
                    <div class="box-item grid-center">
                        ハローワーク
                    </div>
                    <div class="box-item row-span2">
                        ハローワークで紹介状をもらって<br>面接の日程を調整してもらいます。<br><span class="green-line">※面接の前に見学して頂くことも可能です。</span>
                    </div>
                    <div class="box-item grid-center">
                        <div class="angle"></div>
                    </div>
                    <div class="box-item grid-center">
                        面接
                    </div>
                    <div class="box-item row-span2">
                        面接を行います。アセスメントの日程調整も行います。<span class="green-line">持ち物として履歴書、紹介状、医師の診断書が必要となります。</span>
                    </div>
                    <div class="box-item grid-center">
                        <div class="angle"></div>
                    </div>
                    <div class="box-item grid-center">
                        アセスメント
                    </div>
                    <div class="box-item row-span3">
                        職場を体験して頂きます。なお、<span class="green-line">この期間は賃金は発生いたしません。</span>
                    </div>
                    <div class="box-item grid-center">
                        <div class="angle"></div>
                    </div>
                    <div class="box-item grid-center">
                        採用通知
                    </div>
                    <div class="box-item grid-center">
                        <div class="angle"></div>
                    </div>
                    <div class="box-item">
                        
                    </div>
                    <div class="box-item grid-center">
                        ご利用手続き
                    </div>
                    <div class="box-item row-span2">
                        採用通知が届いた場合、各市町や、相談支援事業者などと連絡を取り、<span class="green-line">受給者証発行の手続きを行います。</span>
                    </div>
                    <div class="box-item grid-center">
                        <div class="angle"></div>
                    </div>
                    <div class="box-item grid-center">
                        利用開始
                    </div>
                </div>


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
                
                <div class="grid-box flowchart1">
                    
                    <div class="box-item grid-center">
                        見学
                    </div>
                    <div class="box-item row-span2">
                        <span class="green-line">事業所に連絡を頂いて、ご都合の良い日時に見学</span>に来て頂くことができます。
                    </div>
                    <div class="box-item grid-center">
                        <div class="angle"></div>
                    </div>
                    <div class="box-item grid-center">
                        体験
                    </div>
                    <div class="box-item row-span2">
                        見学をして頂いた後、実際に事業所で体験して頂き<span class="green-line">事業所の雰囲気などを知って利用するかどうかを決め、</span>利用申し込みを行います。
                    </div>
                    <div class="box-item grid-center">
                        <div class="angle"></div>
                    </div>
                    <div class="box-item grid-center">
                        ご利用手続き
                    </div>
                    <div class="box-item row-span2">
                        採用通知が届いた場合、各市町や、相談支援事業者などと連絡を取り、<span class="green-line">受給者証発行の手続きを行います。</span>
                    </div>
                    <div class="box-item grid-center">
                        <div class="angle"></div>
                    </div>
                    <div class="box-item grid-center">
                        利用開始
                    </div>
                    <div class="box-item">
                        利用申し込みを行い、<span class="green-line">サービスを受けるための受給者証が発行されることで利用することが出来ます。</span>
                    </div>
                    
                </div>

                <h2 id="grope">共同生活援助 LIFE Ipppo! 和久野</h2>
                
                <img src="<?php echo esc_url(get_theme_file_uri('images/life_ipppo.jpg')); ?>" alt="ライフいっぽ和久野" class="mb70">
                
                <div class="flex-box life_ipppo_desc">
                    <div class="flex-item flex-item1">
                        <h3>１F、家賃１ヵ月25,000円　１０部屋限定</h3>
                    </div>
                    <div class="flex-item flex-item2">
                        <ul>
                            <li class="list-item list-item1">
                                完全個室
                            </li>
                            <li class="list-item list-item2">
                                Wi-Fi無料
                            </li>
                            <li class="list-item list-item3">
                                １F個室はiPad設置（TV電話が出来ます）
                            </li>
                            <li class="list-item list-item4">
                                男女別浴室（男性は１F、女性は２F）
                            </li>
                            <li class="list-item list-item5">
                                エレベーター完備
                            </li>
                        </ul>
                    </div>
                    <div class="flex-item flex-item3">
                        <h3>２F、家賃１ヵ月45,000円　０５部屋限定</h3>
                    </div>
                    <div class="flex-item flex-item4"></div>
                </div>
                
                <h2>サービス利用開始までの流れ</h2>
                
                <div class="grid-box flowchart1">
                    <div class="box-item grid-center">
                        見学
                    </div>
                    <div class="box-item row-span2">
                        窓口に連絡を入れてもらい、<span class="green-line">ご都合の良い日時に見学に来て頂くことが出来ます。</span>
                    </div>
                    <div class="box-item grid-center">
                        <div class="angle"></div>
                    </div>
                    <div class="box-item grid-center">
                        面談
                    </div>
                    <div class="box-item row-span2">
                        面談を通して<span class="green-line">サービスを受けられるか決定します。</span>
                    </div>
                    <div class="box-item grid-center">
                        <div class="angle"></div>
                    </div>
                    <div class="box-item grid-center">
                        ご利用手続き
                    </div>
                    <div class="box-item row-span2">
                        各市町や、事業者などと連絡を取り<span class="green-line">受給者証発行の手続きを行います。</span>
                    </div>
                    <div class="box-item grid-center">
                        <div class="angle"></div>
                    </div>
                    <div class="box-item grid-center">
                        利用開始
                    </div>
                </div>
                

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
                        LIFE Ipppo!　　　　福井県敦賀市和久野2号東河原17-3
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
                        <h3>LIFE Ipppo!</h3>
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

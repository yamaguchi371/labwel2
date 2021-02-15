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
            <h2 class="section-title"><?php the_title(); ?></h2>
            <section class="section">
                <h3 id="typea" class="mb-2">
                    就労継続支援A型事業所
                    <span class="ipppo-logo"><img src="<?php echo esc_url(get_theme_file_uri('images/ipppo.jpg')); ?>" alt="ipppo"></span><span class="ipppo-logo"><img src="<?php echo esc_url(get_theme_file_uri('images/ipppo+.jpg')); ?>" alt="+ipppo"></span>
                </h3>
                <p>やりがいの見つかるA型</p>
                <p>バリエーション豊富なお仕事内容だから<br>自分のやりがいにつながる得意なお仕事が<br>きっと見つかります。</p>
                <div class="grid-box service__gallery mb-5">
                    <div class="box-item row-span2">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/service-gallery1.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/service-gallery2.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/service-gallery3.jpg')); ?>" alt="">
                    </div>
                </div>

                <div class="flex-box service__flow">
                    <p title="タイトル">サービス利用開始までの流れ</p>
                </div>
                <div class="flowchart1">
                    <div class="box-item box-item1">
                        <p desc="施設">ハローワーク</p>
                        <p text>ハローワークで紹介状をもらって、面接の日程を調整してもらいます。</p>
                        <p text>※面接の前に見学して頂くことも可能です。</p>
                    </div>
                    <div class="box-item box-item2">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/arrow.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item box-item3">
                        <p desc="施設">面 接</p>
                        <p text>面接を行ないます。アセスメントの日程調整も行ないます。<br>持ち物として履歴書、紹介状、医師の診断書が必要となります。</p>
                    </div>
                    <div class="box-item box-item4">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/arrow.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item box-item5">
                        <p desc="施設">アセスメント</p>
                        <p text="">職場を体験して頂きます。<br>なお、この期間は賃金は発生いたしません。</p>
                    </div>
                    <div class="box-item box-item6">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/arrow.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item box-item7 nobackground">
                        <p center>採用通知</p>
                    </div>
                    <div class="box-item box-item8">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/arrow.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item box-item9">
                        <p desc="施設">ご利用手続き</p>
                        <p text>採用通知が届いた場合、各市町や、相談支援事業所などと連絡を取り、受給者証発行の
                            手続きを行ないます。</p>
                    </div>
                </div>
            </section>

            <section class="section">
                <h3 id="typeb" class="mb-2">
                    就労継続支援B型事業所
                    <span class="ipppo-logo"><img src="<?php echo esc_url(get_theme_file_uri('images/ipppo+.jpg')); ?>" alt="+ipppo"></span>
                </h3>
                <p>自分の居場所が見つかるB型</p>
                <p>みんなと働くのが楽しくなる。<br>そんな働きやすい環境と楽しい<br>人間関係づくりにこだわりました。</p>
                <div class="grid-box service__gallery mb-5">
                    <div class="box-item row-span2">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/service-gallery4.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/service-gallery5.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/service-gallery6.jpg')); ?>" alt="">
                    </div>
                </div>

                <div class="flex-box service__flow">
                    <p title="タイトル">サービス利用開始までの流れ</p>
                </div>

                <div class="flowchart1">
                    <div class="box-item box-item1">
                        <p desc="施設">見 学</p>
                        <p text>事業所の仕事の内容や雰囲気を知ってもらいます。</p>
                    </div>
                    <div class="box-item box-item2">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/arrow.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item box-item3">
                        <p desc="施設">体 験</p>
                        <p text>見学をして頂いた後、実際に事業所で体験して頂き事業所の雰囲気などを知って利用するかどうかを決め、利用申込みを行ないます</p>
                    </div>
                    <div class="box-item box-item4">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/arrow.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item box-item5">
                        <p desc="施設">ご利用手続き</p>
                        <p text>利用しようと決めた場合、各市町や、相談支援事業者などと連絡を取り、受給者証発行の手続きを行ないます。</p>
                    </div>
                    <div class="box-item box-item6">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/arrow.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item box-item7 nobackground">
                        <p center>利用開始</p>
                    </div>
                </div>

            </section>

            <section class="section">
                <div class="float-left">
                    <h3 id="group" class="mb-2">共同生活援助（グループホーム）<br>LIFE Ipppo!和久野</h3>
                    <p>夜間でも支援員が常在しているので<br>安心して入居できます！</p>
                </div>
                <div class="float-right">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/house.jpg')); ?>" alt="" class="mt-5" style="width: 329px;">
                </div>
                <div class="clearfix mb-5"></div>
                <div class="flex-box service__flow">
                    <p title="タイトル">サービス利用開始までの流れ</p>
                </div>
                
                <div class="flowchart1">
                    <div class="box-item box-item1">
                        <p desc="施設">見 学</p>
                        <p text>窓口に連絡を入れてもらい、ご都合の良い日時に見学または、入居相談に来て頂くことが出来ます。</p>
                    </div>
                    <div class="box-item box-item2">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/arrow.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item box-item3">
                        <p desc="施設">入居相談</p>
                        <p text>入居相談を通して入居するための要件や入居後の生活設計を一緒に考えていきます。</p>
                    </div>
                    <div class="box-item box-item4">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/arrow.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item box-item5">
                        <p desc="施設">ご利用手続き</p>
                        <p text>各市町や、相談支援事業者などと連絡を取り受給者証発行の手続きを行います。</p>
                    </div>
                    <div class="box-item box-item6">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/arrow.jpg')); ?>" alt="">
                    </div>
                    <div class="box-item box-item7 nobackground">
                        <p center>利用開始</p>
                    </div>
                </div>
                
            </section>


            <div class="content page">

                <h2>所在地</h2>

                <ul>
                    <li class="list-item list-item1">
                        本社/ipppo!　　　　　　　福井県敦賀市公文名54-10-1
                    </li>
                    <li class="list-item list-item2">
                        +ipppo!　　　　　　　　　福井県敦賀市野神2-34-2
                    </li>
                    <li class="list-item list-item3">
                        Be ipppo!　　　　　　　　福井県敦賀市野神15-4-13
                    </li>
                    <li class="list-item list-item4">
                        LIFE Ipppo!和久野　　　　福井県敦賀市和久野2号東河原17-3
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
                        <h3>LIFE Ipppo!和久野</h3>
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

    <!-- header -->
    <?php get_header(); ?>
    <main <?php body_class('orignal_class'); ?>>
    <div class="profile1 inner">
            <img src="<?php echo esc_url(get_theme_file_uri('./images/myprofile.svg')); ?>">
            <div class="group">
                <div class="profile2">
                    <p>kenta</p>
                </div>
                <div class="profile2">
                    <p>ライブに行くことが生きがいです。</p>
                    <p>フロントエンド・マークアップエンジニア志望</p>
                    <nav>
                    <ul class="iconbox">
                        <li class="iconitem"><a href="https://twitter.com/kenta_tnpr"><img class="iconimg" src="<?php echo esc_url(get_theme_file_uri('./images/twitter.svg')); ?>"></a></li>
                        <li class="iconitem"><a href="https://github.com/kenta66448284"><img class="iconimg" src="<?php echo esc_url(get_theme_file_uri('./images/github.svg')); ?>"></a>
                        </li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
        <div class="grouplist">
            <div class="groupitem">
                <a class="grouplink" href="https://kentalog.work/portfolio/">
                <img src="<?php echo esc_url(get_theme_file_uri('./images/workgray.svg')); ?>">
                <p class="grouptext">works</p>
                </a>
            </div>
            <div class="groupitem">
                <a class="grouplink" href="https://kentalog.work/portfolio/blog/">
                <img src="<?php echo esc_url(get_theme_file_uri('./images/bloggray.svg')); ?>">
                <p class="grouptext">blog</p>
                </a>
            </div>
            <div class="groupitem groupline">
                <a class="grouplink" href="https://kentalog.work/portfolio/profile/">
                <img src="<?php echo esc_url(get_theme_file_uri('./images/aboutcolor.svg')); ?>">
                <p class="grouptext groupcolor">about</p>
                </a>
            </div>
        </div>
        <div class="inner pro">

            <div class="colum2 profilepage">
                <section>
                    <?php if (have_posts() ): ?>
                    <!-- もし、記事が1件以上あったら-->
                    <?php while (have_posts()):the_post(); ?>
                    <!-- 記事の表示条件で繰り返す（※個別投稿ページの場合は、1回）-->
                    <article <?php post_class("entry"); ?>> <!-- 特別なclassを付随させる -->
                    <div class="single profilebox">
                        <h1><div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    
                    </div></h1>
                    
                        <p class="entry-title"><?php the_title(); ?></p>
                        
                        <div class="pagearticle profileblock">
                            <article id="post-<?php the_ID(); ?>" <?php post_class("entry"); ?>class="entry">
                    
                            <div class="entry-content profile__deta">
                            <?php the_content( ); ?><!-- 記事の内容 -->
                        </div>
                        </div>
                    </div>
                    </article>
                    <?php endwhile; ?>
                    <!-- 繰り返し終了 -->

                    <?php endif; ?>
                    <!-- if文終了。-->


                </section>
                
            </div>
            
        </div>
    </main>
    <!-- footer -->
    <?php get_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- <script src="./js/java.js"></script> -->
    <?php wp_footer(); ?>
</body>

</html>
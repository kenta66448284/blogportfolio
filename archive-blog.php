    <!-- header -->
    <?php get_header(); ?>
    <main>
        <div class="profile1">
            <img src="<?php echo esc_url(get_theme_file_uri('./images/profilefoto.png')); ?>">
            <div class="group">
                <div class="profile2">
                    <p>kenta</p>
                </div>
                <div class="profile2">
                    <p>ライブに行くことが生きがいです。</p>
                    <p>フロントエンド・マークアップエンジニア志望</p>
                    <nav>
                    <ul class="iconbox">
                        <li class="iconitem"><a href="https://twitter.com/kenta_tnpr"><img class="iconimg" src="<?php echo esc_url(get_theme_file_uri('./images/iconmonstr-twitter-1 1.png')); ?>"></a></li>
                        <li class="iconitem"><a href="https://github.com/kenta66448284"><img class="iconimg" src="<?php echo esc_url(get_theme_file_uri('./images/iconmonstr-github-1 1.png')); ?>"></a>
                        </li>
                    </ul>
                </nav>
                </div>
            </div>
        </div><div class="profile1">
            <img src="<?php echo esc_url(get_theme_file_uri('./images/myprofile.png')); ?>">
            <div class="group">
                <div class="profile2">
                    <p>kenta</p>
                </div>
                <div class="profile2">
                    <p>ライブに行くことが生きがいです。</p>
                    <p>フロントエンド・マークアップエンジニア志望</p>
                    <nav>
                    <ul class="iconbox">
                        <li class="iconitem"><a href="https://twitter.com/kenta_tnpr"><img class="iconimg" src="<?php echo esc_url(get_theme_file_uri('./images/iconmonstr-twitter-1 1.png')); ?>"></a></li>
                        <li class="iconitem"><a href="https://github.com/kenta66448284"><img class="iconimg" src="<?php echo esc_url(get_theme_file_uri('./images/iconmonstr-github-1 1.png')); ?>"></a>
                        </li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
        <div class="grouplist">
            <div class="groupitem groupnotline">
                <a class="grouplink" href="https://kentalog.work/portfolio/">
                <img src="<?php echo esc_url(get_theme_file_uri('./images/workgary.png')); ?>">
                <p class="grouptext">works</p>
                </a>
            </div>
            <div class="groupitem groupline">
                <a class="grouplink" href="https://kentalog.work/portfolio/blog/">
                <img src="<?php echo esc_url(get_theme_file_uri('./images/notes 1.png')); ?>">
                <p class="grouptext groupcolor">blog</p>
                </a>
            </div>
            <div class="groupitem groupnotline">
                <a class="grouplink" href="https://kentalog.work/portfolio/profile/">
                <img src="<?php echo esc_url(get_theme_file_uri('./images/aboutgray.png')); ?>">
                <p class="grouptext">about</p>
                </a>
            </div>
        </div>
       
        <section class="naiyou">
            <h2 class="workstitle"><?php the_archive_title(); ?></h2>
            <div class="inner">
                <div class="blogitem">
                    <?php if (have_posts()): //もし1件以上記事があったら ?>
                    <?php while (have_posts()): //記事がある間は繰り返す
                    the_post(); //次の記事のデータをセットする?>
                    <!--1記事め開始-->
                    <article id="post-<?php the_ID(); ?>" <?php post_class("entry"); ?>class="entry">
                        
                        <h3>
                            <div class="tititle">
                                
                                <a href="<?php the_permalink(); ?>">
                                <?php //制限文字以上の時省略記号をつける
                                    if(mb_strlen($post->post_title)>30) {
                                    $title= mb_substr($post->post_title,0,30);
                                    echo $title . '...';
                                    } else {
                                    echo $post->post_title;
                                    }
                                    ?>
                                </a>
                            </div>
                        </h3>
                        <?php the_excerpt(); ?>
                        <p class="btiem"><?php the_time('Y年n月j日'); ?>  <?php the_time('g:i A'); ?><!-- 記事の投稿日 --></p>
                        <div class="blogcategory">
                            <?php echo get_the_term_list($post->ID, 'blogcat'); ?>
                        </div>
                    </article>
                    <!-- end entry -->
                    <!--1記事め終了-->
                    <?php endwhile; //ループ終了?>
                    <?php else: //もし、表示すべき記事がなかったら ?>
                    <p>まだ記事はありません。</p>
                    <?php endif; //条件分岐終了 ?>
                </div>
                <div class="blogedhiter">
                <?php get_sidebar(); ?>
                </div>
            </div>
            
            <!--ページネーション開始-->
                <?php the_posts_pagination( array(
	                'mid_size' => 1,
	                'prev_text' => __( '<', 'textdomain' ),
	                'next_text' => __( '>', 'textdomain' ),
                ) ); ?>
                <!--ページネーション終了-->
                <!-- <nav>
                <ul>
                    <li><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('./images/nav1.png')); ?>"></a></li>
                    <li><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('./images/nav2.png')); ?>"></a></li>
                    <li><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('./images/nav3.png')); ?>"></a></li>
                </ul>
            </nav> -->

        </section>
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
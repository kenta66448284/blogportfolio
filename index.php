    <!-- header -->
    <?php get_header(); ?>
    <main>
        <div class="profile1">
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
            <div class="groupitem groupline">
                <a class="grouplink" href="https://kentalog.work/portfolio/">
                <img src="<?php echo esc_url(get_theme_file_uri('./images/coding 1.png')); ?>">
                <p class="grouptext groupcolor">works</p>
                </a>
            </div>
            <div class="groupitem groupnotline">
                <a class="grouplink" href="https://kentalog.work/portfolio/blog/">
                <img src="<?php echo esc_url(get_theme_file_uri('./images/Frame.png')); ?>">
                <p class="grouptext">blog</p>
                </a>
            </div>
            <div class="groupitem groupnotline">
                <a class="grouplink" href="https://kentalog.work/portfolio/profile/">
                <img src="<?php echo esc_url(get_theme_file_uri('./images/aboutgray.png')); ?>">
                <p class="grouptext">about</p>
                </a>
            </div>
        </div>
        <h2 class="workstitle"><?php the_archive_title(); ?></h2>
        <section class="naiyou">
        <div class="inner worksflex">
                <div class="blogitem">
                    <?php if (have_posts()): //もし1件以上記事があったら ?>
                    <?php while (have_posts()): //記事がある間は繰り返す
                    the_post(); //次の記事のデータをセットする?>
                    <!--1記事め開始-->
                    <article id="post-<?php the_ID(); ?>" <?php post_class("entry"); ?>class="entry">
                    <a href="<?php the_permalink(); ?>">
                        <div class="article-image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
                            <?php if(has_post_thumbnail()): ?> <!-- もしアイキャッチ画像があるのであれば、 -->
                            <img src="<?php echo esc_url(get_theme_file_uri('./images/toumeikun.png'));?>">
                            <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
                        <?php endif; ?>
                        </div>
                    </a>
                    <div class="works__category">
                    <?php the_category(' '); ?>
                    </div>
                        <h3 class="wrokstitle">
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
                    </article>
                    <!-- end entry -->
                    <!--1記事め終了-->
                    <?php endwhile; //ループ終了?>
                    <?php else: //もし、表示すべき記事がなかったら ?>
                    <p>まだ記事はありません。</p>
                    <?php endif; //条件分岐終了 ?>
                </div>
                
            </div>
            
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
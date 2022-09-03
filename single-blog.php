    <!-- header -->
    <?php get_header(); ?>
    <main <?php body_class('orignal_class'); ?>>
        <div class="inner">

            <div class="colum2">
                <section>
                    <?php if (have_posts() ): ?>
                    <!-- もし、記事が1件以上あったら-->
                    <?php while (have_posts()):the_post(); ?>
                    <!-- 記事の表示条件で繰り返す（※個別投稿ページの場合は、1回）-->
                    <article <?php post_class("entry"); ?>> <!-- 特別なclassを付随させる -->
                    <div class="single">
                        <h1><div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display'))
                            { bcn_display();}
                        ?>
                    </div></h1>
                    
                    
                    <div class="article-image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
                        <?php if(has_post_thumbnail()): ?> <!-- もしアイキャッチ画像があるのであれば、 -->
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/toumeisingle.png'));?>">
                        <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
                    <?php endif; ?>
                        </div>
                        <p class="entry-title"><?php the_title(); ?></p>
                        
                        <div class="time">
                            <p>投稿日: <?php the_time('Y年n月j日'); ?>  <?php the_time('g:i A'); ?><!-- 記事の投稿日 --></p>
                            <p>更新日: <?php the_modified_date(); ?>  <?php the_modified_time(); ?></p>
                        </div>
                        <div class="pagearticle">
                        <?php the_category(', ') ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class("entry"); ?>class="entry">
                    
                            <div class="entry-content">
                                <?php the_content( ); ?><!-- 記事の内容 -->     
                            </div>
                            <div class="singlepage">
                            <!-- 前後のナビゲーション開始-->
                            <?php the_post_navigation( array( 'prev_text' => '前の記事へ', 'next_text' => '次の記事へ' ) ); ?>
                            <!-- 前後のナビゲーション終了 -->
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
            <div class="singleslider">
                <?php get_sidebar(); ?>
                </div>
        </div>
    </main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>


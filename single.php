    <!-- header -->
    <?php get_header(); ?>
    <main <?php body_class('orignal_class'); ?>>
        <div class="inner">

            <div class="page">
                <section>
                    <?php if (have_posts() ): ?>
                    <!-- もし、記事が1件以上あったら-->
                    <?php while (have_posts()):the_post(); ?>
                    <!-- 記事の表示条件で繰り返す（※個別投稿ページの場合は、1回）-->
                    <article <?php post_class("entry"); ?>> <!-- 特別なclassを付随させる -->
                    <div class="single workssingle">
                        <h1><div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    
                    </div></h1>
                    <p class="entry-title"><?php the_title(); ?></p>
                    <div class="article-image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
                        <?php if(has_post_thumbnail()): ?> <!-- もしアイキャッチ画像があるのであれば、 -->
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/toumeisingle.png'));?>">
                        <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
                    <?php endif; ?>
                        </div>
                        
                        
                        <div class="pagearticle">
                        
                            <article id="post-<?php the_ID(); ?>" <?php post_class("entry"); ?>class="entry">
                    
                            <div class="entry-content">
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
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>


<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php
global $page, $paged;
  if (is_front_page()) : //トップページ
  echo 'トップページ｜';
  bloginfo('name');
elseif(is_home()) : //ブログページ（ブログサイトの場合はトップページ）
  wp_title('｜',true,'right');
  bloginfo('name');
elseif(is_page()) : //固定ページ
  wp_title('｜',true,'right');
  bloginfo('name');
elseif(is_single()) : //投稿ページ
  wp_title('｜',true,'right');
  bloginfo('name');
elseif(is_category()) : //カテゴリーページ
  single_term_title();
  echo'｜カテゴリー';
elseif(is_tag()) : //タグページ
  single_term_title();
  echo'｜タグ';
elseif(is_archive()) : //アーカイブページ
  wp_title('');
  echo'｜works';
elseif(is_search()) : //検索結果ページ
  wp_title('');
  echo'｜検索結果';
elseif(is_404()): //404ページ
  echo '404｜';
  bloginfo('name');
endif;
  if($paged >= 2 || $page >= 2) : //２ページ目以降の場合
  echo '｜' . sprintf('%sページ',
  max($paged,$page));
endif;
?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/./css/ress.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_theme_file_uri()); ?>/https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/6-1-7.css"> -->
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/./css/style.css">
    <?php wp_head(); ?>
    <?php if ( is_single()): ?>
<?php if ($post->post_excerpt){ ?>
    <meta name="description" content="<? echo $post->post_excerpt; ?>" />
    <?php } else {
        $summary = strip_tags($post->post_content);
        $summary = str_replace("\n", "", $summary);
        $summary = mb_substr($summary, 0, 120). "…"; ?>
        <meta name="description" content="<?php echo $summary; ?>" />
        <?php } ?>
<?php elseif ( is_home() || is_front_page() ): ?>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php else: ?>
<meta name="description" content="<?php the_excerpt();?>" />
<?php endif; ?>
</head>

<body <?php body_class('orignal_class'); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part('ogp') ?>

<header>

        <div class="headerbg">
            <div class="inner">
                <h1><a class="headertitle" href="https://kentalog.work/portfolio/">masuda portfolio & blog</a></h1>
            </div>
        </div>
        
</header>

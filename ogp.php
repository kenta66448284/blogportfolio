<!-- OGP -->
<meta property="og:title" content="<?php
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
  echo'｜アーカイブ';
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
?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="kentalog.work" />
<meta property="og:image" content="images/ogp.jpg" />
<meta property="og:description" content="<?php if ( is_single()): ?>
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

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@kenta_tnpr" />
<?php
function move_jquery(){
   //headerで出力されるjQueryとjQuery-Migrateを外す
   wp_deregister_script('jquery');
   wp_deregister_script('jquery-migrate');

   //改めて閉じbodyの上に読み込む
   wp_enqueue_script('jquery', includes_url('/js/jquery/jquery.min.js'), false, NULL, true);
}

add_action('wp_enqueue_scripts','move_jquery');

function add_my_scripts() {

//main.js の読み込み※WordPress内蔵jQueryも一緒に。
wp_enqueue_script('js',get_theme_file_uri( '/js/java.js' ),
array('jquery'),'',true);
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

//抜粋の文字数調整
function my_excerpt_length($length){
  return 60;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);

//抜粋の省略記号
function my_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'my_excerpt_more');


add_filter('excerpt_more', 'my_excerpt_more');
function my_theme_setup() {
  //アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(320, 320, false);
}
add_action('after_setup_theme', 'my_theme_setup');
//heade内にフィードリンクを出力
add_theme_support('automatic-feed-links');

//sidebar widgit
function side_widgets(){
  register_sidebar(array(
    'name'=>'サイドバー',
    'id'=>'main-sidebar',
    'before_widget'=>'<div class="colum">',
    'after_widget'=>'</div>',
    'before_title' => '<h3 class="sidebar-title">',
    'after_title' => '</h3>',
  ));
  //footer widgit
  register_sidebar(array(
    'name'=>'フッターエリア',
    'id'=>'footer-widget',
    'before_widget'=>'<div class="category">',
    'after_widget'=>'</div>',
    'before_title' => '<h3 class="footer-title">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'side_widgets');



/* ---------- カスタム投稿タイプを追加 ---------- */
add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type(
    'blog',
    array(
      'label' => 'ブログ',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'blogcat',
    'blog',
    array(
      'label' => '作品カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'blogtag',
    'blog',
    array(
      'label' => '作品タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );

}
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  if ( $query->is_archive('blog') ) { //カスタム投稿タイプを指定
      $query->set( 'posts_per_page', '6' ); //表示件数を指定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


//わざと閉じていない
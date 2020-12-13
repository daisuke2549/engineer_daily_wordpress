<?php
/**
* テーマのセットアップ
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
**/
function my_setup()
{
add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
add_theme_support('title-tag'); // タイトルタグ自動生成
add_theme_support(
'html5',
array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}
function my_widget_init() {
    register_sidebar(
    array(
    'name' => 'サイドバー', //表示するエリア名
    'id' => 'sidebar', //id
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title">',
    'after_title' => '</div>',
    )
    );
    }
    add_action( 'widgets_init', 'my_widget_init' );

add_action('after_setup_theme', 'my_setup');
register_sidebar();

/**
* カスタムフィールドを使ってアクセス数を取得する（特定記事のアクセス数確認用）
*
* @param integer $id 投稿id.
* @return void
*/
//アクセス数を取得
function get_post_views( $id = 0 ){
    global $post;
    //引数が渡されなければ投稿IDを見るように設定
    if ( 0 === $id ) {
    $id = $post->ID;
    }
    $count_key = 'view_counter';
    $count = get_post_meta($id, $count_key, true);
    
    if($count === ''){
    delete_post_meta($id, $count_key);
    add_post_meta($id, $count_key, '0');
    }
    return $count;
    }
    
    /**
    * アクセスカウンター
    *
    * @return void
    */
    function set_post_views() {
    global $post;
    $count = 0;
    $count_key = 'view_counter';
    
    if($post){
    $id = $post->ID;
    $count = get_post_meta($id, $count_key, true);
    }
    
    if($count === ''){
    delete_post_meta($id, $count_key);
    add_post_meta($id, $count_key, '1');
    }elseif( $count > 0 ){
    if(!is_user_logged_in()){ //管理者（自分）の閲覧を除外
    $count++;
    update_post_meta($id, $count_key, $count);
    }
    }
    //$countが0のままの場合（404や該当記事の検索結果が0件の場合）は何もしない。
    }
    add_action( 'template_redirect', 'set_post_views', 10 );
    

function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);

if( is_single() ){
    wp_enqueue_script('sns', get_template_directory_uri() . '/js/sns.js', array( 'jquery' ), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'my_script_init');
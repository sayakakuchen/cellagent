<?php

// function enqueue_name(){
//     // スタイルシート
//     wp_enqueue_style('style_name', get_template_directory_uri() . './assets/css/styles.css', array(), '1.0.0');
//     // スクリプトファイル
//     wp_enqueue_script('script_jquery', get_template_directory_uri() . './assets/js/script.js', array('jquery'), '1.0.0', true);
// }
// add_action('wp_enqueue_scripts','enqueue_name');


function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

// Google Fontsのpreconnectリンクを追加する
function add_google_fonts_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'add_google_fonts_preconnect', 0 );

// css読み込み
function my_css() {
    wp_enqueue_style( 'google-fonts-noto-sans-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap', false );
	wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'slick-theme-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_css' );

// JS読み込み
function my_script() {
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.js', "", "1.1.1");
	wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', "", "1.1.1");
	wp_enqueue_script( 'assets', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.1');
}
add_action( 'wp_enqueue_scripts', 'my_script' );

// サイドメニューを非表示
function remove_menus() {
	remove_menu_page( 'edit.php' ); // 投稿
}
add_action( 'admin_menu', 'remove_menus', 999 );

// worksタイトル変更
function change_works_title_placeholder( $title ) {
    $screen = get_current_screen();
    
    if ( 'works' == $screen->post_type ) {
        $title = '会社名を入力してください';
    }
    
    return $title;
}
add_filter( 'enter_title_here', 'change_works_title_placeholder' );

// Contact form 7 タグ削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}
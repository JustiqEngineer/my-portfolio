
<?php
// ナビゲーションメニューを登録
function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu')
        )
    );
}
add_action('init', 'register_my_menus');

// CSSとJavaScriptを読み込み
function enqueue_my_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');

// サムネイルを有効化
add_theme_support('post-thumbnails');
?>

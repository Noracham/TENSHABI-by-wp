<?php
//スタイルシートの読み込み
function load_my_styles()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array("style"));

    wp_enqueue_script("jquery");
    wp_enqueue_script('script', get_template_directory_uri() . '/js/index.js', array("jquery"));
}
add_action('wp_enqueue_scripts', 'load_my_styles');
//スクリプトファイル読み込み

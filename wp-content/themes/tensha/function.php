<?php
//スタイルシートの読み込み
function load_my_styles()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('vegas_style', get_template_directory_uri() . '/css/vegas.min.css');
}
add_action('wp_print_styles', 'load_my_styles()');
//スクリプトファイル読み込み
function load_my_scripts()
{
    wp_enqueue_script('script', get_template_directory_uri() . '/js/index.js');
    wp_enqueue_script('vegas_script', get_template_directory_uri() . '/js/vegas.min.js');
}
add_action('wp_enqueue_scrips', 'load_my_scripts');

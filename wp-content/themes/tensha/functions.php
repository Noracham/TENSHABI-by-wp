<?php
//スタイルシートの読み込み
function load_my_styles()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array("style"));

    wp_enqueue_script("jquery");
    wp_enqueue_script('script', get_template_directory_uri() . '/js/index.js', array("jquery"));
    wp_enqueue_script('inview', 'https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js');
}
add_action('wp_enqueue_scripts', 'load_my_styles');

add_theme_support('post-thumbnails');

//pagination
function pagination($pages = '', $range = 2)
{
    $showitems = $range * 2 + 1;

    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo '<div class="pagination">';
        echo '<ul>';

        if ($paged > 1) {
            echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">前のページ</a></li>';
        }
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                if ($paged == $i) {
                    echo '<li class="active">' . $i . '</li>';
                } else {
                    echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a></li>';
                }
            }
        }

        if ($paged < $pages) {
            echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">次のページ</a>';
            echo '</ul>';
            echo '</div>';
        }
    }
}
//widgets
function my_widgets_init()
{
    register_sidebar([
        'name' => 'サイドバー',
        'id' => 'sidebar',
    ]);
}
add_action('widgets_init', 'my_widgets_init');

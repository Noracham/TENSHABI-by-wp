<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <script>
        (function(d) {
            var config = {
                    kitId: 'wwd7vsw',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <?php
        //現ページのスラッグを取得
        global $post;
        $slug = $post->post_name;

        //フロントページ以外はスラッグからimgパスを指定
        if (!is_home() || !is_front_page() ? $heropath = get_the_post_thumbnail_url() : $heropath = get_theme_file_uri('img/')); ?>
        <section class="main_visu" style="background-image: url(<?php echo $heropath ?>);">
            <ul class="menu">
                <li class="newsli"><a href="<?php echo esc_url(home_url('/category/news')) ?>"></a>お知らせ<span>NEWS</span></li>
                <li><a href="<?php echo esc_url(home_url('')) ?>#shops"></a>お店一覧<span>SHOPS</span></li>
                <li><a href="<?php echo esc_url(home_url('/contact')) ?>"></a>お問い合わせ<span>CONTACT</span></li>
            </ul>
            <?php if (is_home() || is_front_page()) {; ?>
                <div class="link_icon"><img src="<?php echo esc_url(get_theme_file_uri('img/Icon awesome-instagram.png')) ?>" alt=""></div>
                <div class="link_icon"><img src="<?php echo esc_url(get_theme_file_uri('img/Icon_map.png')) ?>" alt=""></div>
            <?php } elseif (is_category('news') || in_category('news')) {; ?>
                <div class="hero_title">
                    <h1>お知らせ<br /><span>NEWS</span></h1>
                </div>
            <?php } elseif (in_category('shops')) {; ?>
                <div class="hero_title">
                    <h1><?php the_title(); ?><br /><span><?php the_tags(''); ?></span></h1>
                </div>
            <?php } elseif (home_url('/contact')) {; ?>
                <div class="hero_title">
                    <h1>お問い合わせ<br /><span>CONTACT</span></h1>
                </div>

            <?php }; ?>
        </section>

        <div class="logo_visu">
            <a href="<?php echo esc_url(home_url()) ?>"></a>
        </div>
        </section>
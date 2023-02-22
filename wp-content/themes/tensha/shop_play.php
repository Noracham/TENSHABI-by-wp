<section class="info">
    <?php //the_content(); 
    ?>
    <p class="info_txt">
        <?php the_field('shop_info'); ?>
    </p>
    <div class="genre">
        <div class="genre_in" style="opacity:0.5">
            <img src="http://localhost:8888/wordpress/wp-content/themes/tensha/img/drink_list_white.png" alt=""><span>飲む</span>
        </div>
        <div class="genre_in" style="opacity:0.5">
            <img src="http://localhost:8888/wordpress/wp-content/themes/tensha/img/food_list_white.png" alt=""><span>食べる</span>
        </div>
        <div class="genre_in" style="opacity:1">
            <img src="http://localhost:8888/wordpress/wp-content/themes/tensha/img/play.png" alt=""><span>遊ぶ</span>
        </div>
    </div>
    <p class="info_times">
        <?php the_field('shop_date'); ?>
    </p>
</section>
<section class="shop_play shop_menu sec_padding">
    <h1 class="subtitle">できること<br /><span>PLAYLIST</span></h1>
    <div class="shop_play_main">
        <div class="shop_play_img"><img src="<?php echo get_theme_file_uri('img/syateki.png') ?>" alt=""></div>
        <div class="shop_play_img"><img src="<?php echo get_theme_file_uri('img/arrow.png') ?>" alt=""></div>
    </div>
</section>
<?php get_template_part('access'); ?>
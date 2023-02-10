<?php get_header(); ?>
<section class="appeal">
    <div class="appeal_txt">
        <h1>犬山城下町で食と遊びを届ける</h1>
        <p>犬山城下町にて全５店舗を構える屋台のお店「てんしゃ」<br>
            食べるもよし、飲むもよし、遊ぶもよし。<br>
            <br>
            犬山城下町を訪れた際にはぜひお立ち寄りください<br>
            ロゴマークのついたお店、スタッフが目印です！
        </p>
    </div>
    <div class="appeal_img">
        <div class="ap_i"></div>
        <div class="ap_i"></div>
    </div>
</section>
<section class="shops" id="shops">
    <h1 class="subtitle">お店一覧<br><span>SHOPS</span></h1>
    <?php
    $args = ['category_name' => 'shops'];
    $post_data = get_posts($args);
    ?>
    <?php foreach ($post_data as $post) : setup_postdata($post); ?>
        <?php if (($wp_query->current_post + 1) % 2 !== 0) { ?>
            <div class="shop">
                <div class="shop_info">
                    <h2><?php the_title() ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <div class="shop_fl">
                        <div class="icons"><img src="img/food_list.png" alt=""><img src="img/drink_list.png" alt=""></div>
                        <a href="<?php the_permalink() ?>">お店を見る</a>
                    </div>
                </div>
                <div class="shop_frame">
                    <?php
                    if (has_post_thumbnail()) {
                        $img_url = wp_get_attachment_url(get_post_thumbnail_id());
                        $bg_style = 'style="background-image:url(' . $img_url . ')"';
                    }; ?>
                    <div class="shop_img" <?php echo $bg_style; ?>></div>
                </div>
            </div>
        <?php } else { ?>
            <div class="shop">
                <div class="shop_frame">
                    <?php
                    if (has_post_thumbnail()) {
                        $img_url = wp_get_attachment_url(get_post_thumbnail_id());
                        $bg_style = 'style="background-image:url(' . $img_url . ')"';
                    }; ?>
                    <div class="shop_img" <?php echo $bg_style; ?>></div>
                </div>
                <div class="shop_info">
                    <h2><?php the_title() ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <div class="shop_fl">
                        <div class="icons"><img src="img/food_list.png" alt=""><img src="img/drink_list.png" alt=""></div>
                        <a href="<?php the_permalink() ?>">お店を見る</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php endforeach; ?>
</section>
<section class="news sec_padding" id="news">
    <h1 class="subtitle news_title">お知らせ<br><span>NEWS</span></h1>
    <dl class="news_list">
        <?php
        $args_news = ['category_name' => 'news'];
        $the_query = new WP_Query($args_news);
        ?>
        <?php if ($the_query->have_posts()) :; ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <dl>
                    <dt><?php the_date('Y.m.d'); ?></dt>
                    <dd><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></dd>
                </dl>
            <?php endwhile; ?>
        <?php endif; ?>
        <a class="news_link" href="<?php esc_url(home_url('/category/news/')) ?> ">お知らせを見る</a>
    </dl>
</section>
<?php get_template_part('access'); ?>



<?php get_footer(); ?>
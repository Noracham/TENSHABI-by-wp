<article class="article_wrapper">
    <h1 class="page_title"><span><?php the_time('Y/m/d'); ?></span><br><?php the_title(); ?></h1>
    <div class="news_page_thumbnail"><?php the_post_thumbnail(); ?></div>
    <div class="page_content"><?php the_content(); ?></div>

    <?php if (have_posts()) :; ?>
        <div class="prev_next">
            <p class="prev"><?php previous_post_link('%link', '< 前の記事へ', true); ?></p>
            <p class="back_page"><a href="<?php echo esc_url(home_url('/category/news')); ?>">記事一覧へ</a></p>
            <p class="next"><?php next_post_link('%link', '次の記事へ >', true); ?></p>
        </div>
    <?php endif; ?>
</article>
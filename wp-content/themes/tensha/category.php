<?php get_header(); ?>
<main>
    <?php
    $cat = get_the_category();
    $catname = $cat[0]->cat_name; ?>
    <h1 class="subtitle"><?php echo $catname; ?><br><span>NEWS</span></h1>

    <ul class="news_page_list">
        <?php query_posts('category_name=news'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li>
                    <h2><span><?php the_date('Y/m/d'); ?></span><br><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="news_page_thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></div>
                </li>
        <?php endwhile;
        endif; ?>
    </ul>
    <?php if (function_exists('pagination')) {
        pagination($wp_query->max_num_pages);
    }; ?>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>
<main>
    <?php
    //$cat = get_the_category();
    //$catname = $cat[0]->cat_name; 
    ?>
    <!-- <h1 class="subtitle"><?php //echo $catname; 
                                ?><br><span>NEWS</span></h1> -->

    <ul class="article_wrapper news_page_list">
        <?php //query_posts('category_name=news'); 
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li>
                    <h2><span><?php the_date('Y/m/d'); ?></span><br><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <p><?php
                        if (mb_strlen(strip_tags(get_the_content()), 'UTF-8') > 60) {
                            $content = mb_substr(strip_tags(get_the_content()), 0, 60, 'UTF-8');
                            echo $content . '...';
                        } else {
                            echo strip_tags(get_the_content());
                        }; ?></p>
                    <div class="news_link_btn">
                        <a href="<?php the_permalink() ?>"></a>
                        記事を読む
                    </div>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>

    <?php if (function_exists('pagination')) {
        pagination($wp_query->max_num_pages);
    };
    ?>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>
<main <?php if (in_category('shops')) : ?>style="padding-bottom:0" <?php endif; ?>>
    <?php if (in_category('news')) :; ?>
        <?php get_template_part('news'); ?>
    <?php elseif (in_category('food_drink')) :; ?>
        <?php get_template_part('shop'); ?>
    <?php elseif (in_category('play')) :; ?>
        <?php get_template_part('shop_play'); ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
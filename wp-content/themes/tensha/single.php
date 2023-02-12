<?php get_header(); ?>
<main>
    <?php if (in_category('news')) :; ?>
        <?php get_template_part('news'); ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
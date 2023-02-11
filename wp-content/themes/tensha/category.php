<?php get_header(); ?>
<main>
    <?php
    $cat = get_the_category();
    $catname = $cat[0]->cat_name; ?>
    <h1><?php echo $catname; ?></h1>
</main>

<?php get_footer(); ?>
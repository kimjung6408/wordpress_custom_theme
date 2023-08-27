<?php get_header(); ?>

<section class="wooz_post_section">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
            <?php
        }
    }
    ?>
</section>

<?php get_footer(); ?>
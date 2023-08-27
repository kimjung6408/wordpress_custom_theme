<?php get_header(); ?>

<section class="wooz_main_section">

<?php
    if(have_posts())
    {
        while(have_posts())
        {
            the_post();
?>
            <div class="wooz_main_post_link">
                <a href="<?php echo get_permalink(); ?>">
            
                    <h2 class="wooz_main_post_title"><?php esc_html(the_title()); ?></h2>
                    <div><?php the_content(); ?></div>
                    <div>게시글 보기</div>
                </a>
            </div>
        <?php
        }
    }

    ?>
    
    

</section>



<?php get_footer(); ?>
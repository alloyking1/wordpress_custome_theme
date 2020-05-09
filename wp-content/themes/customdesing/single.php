<?php 
    get_header(); 

    while(have_posts()){
        the_post(); //post
        ?>

        <h2><?php the_title(); ?></h2>
        Posted by <?php the_author(); ?>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID); ?>" />
        <?php the_content();
            // comment_form();
    }


    get_footer(); 
?>

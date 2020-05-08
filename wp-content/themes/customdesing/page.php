<?php 
    get_header(); 
    
    $args = array(
        'post_type' => 'work',
    );

    $workposts = new WP_Query($args);
    if($workposts->have_posts()):
        while($workposts->have_posts()):$workposts->the_post(); ?>

        <article>
            <a href="<?php $workposts->the_parmalink(); ?>">

                <h2><?php the_title(); ?></h2>
            </a>
            <?php the_content(); ?>
        </article>
    <?php endwhile;
    else:

    endif;


    get_footer(); 
?>


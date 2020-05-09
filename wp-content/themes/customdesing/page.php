<?php 
    get_header(); 

    $args = array(
        'post_type' => 'post ',
        'posts_per_page' => 2,
    );

    $workposts = new WP_Query($args);
    if($workposts->have_posts()):
        while($workposts->have_posts()){
            $workposts->the_post(); ?>
            
            <article>
                <a href="<?php the_permalink() ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
                <?php the_content(); ?>
            </article>
        <?php };
    else:

    endif;


    get_footer(); 
?>

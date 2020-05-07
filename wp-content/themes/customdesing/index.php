<?php 
    get_header(); 
    
    if(have_posts()):
        while(have_posts()):the_post(); ?>

        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile;
    else:

    endif;


    get_footer(); 
?>

<!-- <main>
        <section class="section section-lg">
            <div class="container">
                <div class="row row-grid align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="../assets/img/theme/promo-1.png" class="img-fluid floating" alt="image">
                </div>
                <div class="col-md-10 order-md-1">
                    <div class="pr-md-5">
                    <h1 class="display-1">We create original content that engages and connects with people</h1>
                    <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                    
                    </div>
                </div>
                </div>
            </div>
        </section>
    </main> -->
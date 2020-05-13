<?php get_header(); ?>

<main>
    <div class="position-relative">
      <section class="section section-lg pb-300 pt-200">
        <div style="padding:2.5rem">
          <blockquote class="blockquote text-center mt-5">
            <h3 class="display-1 mb-0 animate__animated animate__bounce">We create a reliable product</h3>
            <p class="mb-0 animate__heartBeat">We create a reliable product that sells your goods and services and is also the face of your company on the Internet.</p>
            <footer class="blockquote-footer">We can also be the <cite title="Source Title">face of your company on the Internet.</cite></footer>
          </blockquote>
        </div>
      </section>
    </div>
    
    <section class="">
      <div class="container">
        <div class="row pb-100">
          <div class="col">
            <h1 class="display-1">Works</h1>
          </div>
        </div>
        <div class="row pb-100 animate__animated scroll-animations">
          <?php 
            $args = array(
              'post_type' => 'post ',
              'posts_per_page' => 2,
            );
          ?>
            <?php
              $workposts = new WP_Query($args);
              if($workposts->have_posts()):
                  while($workposts->have_posts()){
                      $workposts->the_post(); ?>
                        <div class="col-md-6">
                          <div class="card card-profile shadow mt--20">
                            <div class="px-4">
                              <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                  <div class="card-profile-image">
                                    <a href="#">
                                      <img src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle" alt="image">
                                    </a>
                                  </div>
                                </div>
                                <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                                  <div class="card-profile-actions py-4 mt-lg-0">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-info mr-4">More</a>
                                  </div>
                                </div>
                                <!-- cathegories -->
                                <div class="col-lg-4 order-lg-1">
                                  <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                      <span class="heading">22</span>
                                      <span class="description">Friends</span>
                                    </div>
                                    <div>
                                      <span class="heading">10</span>
                                      <span class="description">Photos</span>
                                    </div>
                                    <div>
                                      <span class="heading">89</span>
                                      <span class="description">Comments</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="text-center mt-5">
                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?><span class="font-weight-light"></span></h3></a>
                                <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i><?php //the_cathegory(); ?></div>
                                <!-- <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer</div> -->
                                <!-- <div><i class="ni education_hat mr-2"></i>University of Computer Science</div> -->
                              </div>
                              <div class="mt-5 py-5 border-top text-center">
                                <div class="row justify-content-center">
                                  <div class="col-lg-9">
                                    <?php //the_featured_image() ?>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        <br/>
                      </div>
                  <?php };
              else:

              endif;
            ?>

          </div>
        </div>
      </div>
    </section>

    <section class="section section-lg pb-300 pt-100 pb-100">
      <div class="container">
        <div>
          <blockquote class="blockquote text-center mt-5">
            <h1 class="display-1 animate__animated animate__bounce">What We Do</h1>
            <p class="mb-0">We create original contents that engages and connects with people</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
          </blockquote>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6 text-center">
            <div class="card card-profile shadow ">
              <h1 class="" style="padding-top:2rem">Websites</h1>
              <hr>
                <p class="mb-0">Feel free to reach out whether you're interested in working together, have coffee, talk about movies or just want to say hi</p>
                <!-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>  -->
              <hr>
              <div class="container" style="padding-bottom:2rem">
                <a href="<?php echo site_url('/works') ?>" type="button" class="btn btn-default" style="border-radius:50px">View all works</a>
              </div>
            </div>
            <br>
          </div>
          
          <div class="col-md-6 text-center">
            <div class="card card-profile shadow">
              <h1 class="" style="padding-top:2rem">Mobile apps</h1>
              <hr>
                <p class="mb-0">Feel free to reach out whether you're interested in working together, have coffee, talk about movies or just want to say hi</p>
                <!-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>  -->
              <hr>
              <div class="container" style="padding-bottom:2rem">
                <a href="<?php echo site_url('/works') ?>" type="button" class="btn btn-default" style="border-radius:50px">View all works</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </main>
<?php get_footer(); ?>

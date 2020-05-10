<?php get_header() ?>

<section>
    <div class="container">
        <div class="row pb-100">
          <div class="col">
            <h1 class="display-1">Works</h1>
          </div>
        </div>
        <div class="row pb-100">
          <?php 
            $args = array(
              'post_type' => 'post ',
            //   'posts_per_page' => 2,
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
                      </div>
                  <?php };
              else:

              endif;
            ?>

          </div>
        </div>
      </div>
</section>

<?php get_footer() ?>
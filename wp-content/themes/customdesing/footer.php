
  <section>
    <div class="container">
      <div class="row pb-100">
        <div class="col">
          <h1 class="display-1">SAY HI</h1>
          <p class="mb-0">We create original contents that engages and connects with people</p>
          <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
          <div class="container pb-100 pt-100" style="padding-top:2rem">
            <a href="mailto: abc@example.com" type="button" class="btn btn-default btn-outline-primary" style="border-radius:50px; padding:17px">Talk to us!</a >
          </div>
        </div>
      </div>
      <!-- <div class="row pb-100">
        
      </div> -->
    </div>
  </section>
  <footer class="footer has-cards">
    <div class="container container-lg">
      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <div class="card card-lift--hover shadow border-0">
            <a href="./examples/landing.html" title="Landing Page">
              <!-- <img alt="image" src="<?php bloginfo('template_directory') ?>/theme/assets/img/theme/landing.jpg" class="card-img"> -->
            </a>
          </div>
        </div>
        <div class="col-md-6 mb-5 mb-lg-0">
          <div class="card card-lift--hover shadow border-0">
            <a href="./examples/profile.html" title="Profile Page">
              <!-- <img alt="image" src="<?php bloginfo('template_directory') ?>/theme/assets/img/theme/profile.jpg" class="card-img"> -->
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row row-grid align-items-center my-md">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">company you can rely on</h3>
          <h4 class="mb-0 font-weight-light">Let's get in touch</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <!-- <h4>Any custom features</h4> -->
          <!-- <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-dribbble"></i>
          </a>
          <a target="_blank" href="https://github.com/creativetimofficial" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
            <i class="fa fa-github"></i>
          </a> -->
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2019 <a href="https://www.creative-tim.com" target="_blank">Whatsup studio </a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="<?php echo site_url('/') ?>" class="nav-link" target="_blank">Whatsup studio</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <!-- <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a> -->
            </li>
            <li class="nav-item">
              <!-- <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a> -->
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- <canvas class="background"></canvas> -->
  <?php wp_footer(); ?>
  <script>
    document.documentElement.style.setProperty('--animate-duration', '2s');

    function myFunction(){
      // var element = document.getElementByClassName('scroll-animations');
      // element.classList.add('animate__fadeInUpBig');
      alert('hi');

    }

    // jQuery(document).ready(function($) {
    //   // Check if element is scrolled into view
    //   function isScrolledIntoView(elem) {
    //     var docViewTop = $(window).scrollTop();
    //     var docViewBottom = docViewTop + $(window).height();

    //     var elemTop = $(elem).offset().top;
    //     var elemBottom = elemTop + $(elem).height();

    //     return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    //   }
    //   // If element is scrolled into view, fade it in
    //   $(window).scroll(function() {
    //     $('.scroll-animations .animated').each(function() {
    //       if (isScrolledIntoView('this') === true) {
    //         $(this).addClass('animate__bounce');
    //       }
    //     });
    //   });

    // });
  </script>
</body>

</html>

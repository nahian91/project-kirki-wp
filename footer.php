  <!-- Copyright Section Start -->
  <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-3 col-xs-12">
            <div class="footer-logo">
              <img src="<?php echo esc_url(get_theme_mod('footer_image'));?>" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12">     
            <div class="social-icon text-center">
              <?php
                if(get_theme_mod('footer_facebook')) {
              ?>
                <a class="facebook" href="<?php echo esc_url(get_theme_mod('footer_facebook'));?>"><i class="lni-facebook-filled"></i></a>
              <?php
                }
              ?>

              
              <?php
                if(get_theme_mod('footer_twitter')) {
              ?>
                <a class="twitter" href="<?php echo esc_url(get_theme_mod('footer_twitter'));?>"><i class="lni-twitter-filled"></i></a>
              <?php
                }
              ?>

              
              <?php
                if(get_theme_mod('footer_instagram')) {
              ?>
                <a class="instagram" href="<?php echo esc_url(get_theme_mod('footer_instagram'));?>"><i class="lni-instagram-filled"></i></a>
              <?php
                }
              ?>

              
              <?php
                if(get_theme_mod('footer_linkedin')) {
              ?>
                <a class="linkedin" href="<?php echo esc_url(get_theme_mod('footer_linkedin'));?>"><i class="lni-linkedin-filled"></i></a>
              <?php
                }
              ?>            
              
            </div>
          </div>
          <div class="col-lg-4 col-md-5 col-xs-12">
            <p><?php echo esc_html(get_theme_mod('footer_copy'));?></p>
          </div> 
        </div>
      </div>
    </div>
    <!-- Copyright Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    <?php wp_footer();?>
  </body>
</html>

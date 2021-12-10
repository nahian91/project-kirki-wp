<!-- Team Section Start -->

<?php if ( true == get_theme_mod( 'team_show', true ) ) { ?>
  
<section id="team" class="section-padding text-center">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html(get_theme_mod('team_heading'));?></h2>
          <p><?php echo esc_html(get_theme_mod('team_desc'));?></p>
        </div>
        <div class="row">

        <?php
          $teams = get_theme_mod('team_repeater');
          foreach($teams as $team) {          
        ?>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
              <div class="team-img">

                <?php 
                  $img_url = wp_get_attachment_image_src($team['team_image']);
                ?>
                <img class="img-fluid" src="<?php echo esc_url($img_url[0]);?>" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <?php
                          if($team['team_facebook']) {
                      ?>
                          <li><a href="<?php echo esc_url($team['team_facebook']);?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <?php
                          }
                      ?>
                      <?php
                          if($team['team_twitter']) {
                      ?>
                          <li><a href="<?php echo esc_url($team['team_twitter']);?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <?php
                          }
                      ?>
                      <?php
                          if($team['team_instagram']) {
                      ?>
                          <li><a href="<?php echo esc_url($team['team_instagram']);?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                      <?php
                          }
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#"><?php echo esc_html($team['team_title']);?></a></h3>
                <p><?php echo esc_html($team['team_desg']);?></p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
        <?php
          }
        ?>
          
          
        </div>
      </div>
    </section>
    <!-- Team Section End -->

<?php } ?>
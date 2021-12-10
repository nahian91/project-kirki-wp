<div class="skill-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <img class="img-fluid" src="<?php echo esc_url(get_theme_mod('skill_image'));?>" alt="" >
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
            <div class="site-heading">
              <h2 class="section-title"><?php echo esc_html(get_theme_mod('skill_title'));?></h2>
              <p><?php echo esc_html(get_theme_mod('skill_desc'));?></p>
            </div>
            <div class="skills-section">

            <?php
                $skills = get_theme_mod('skill_repeater');
                foreach($skills as $skill) {
            ?>
                <!-- Progress Bar Start -->
              <div class="progress-box">
                <h5><?php echo esc_html($skill['skill_item_title']);?> <span class="pull-right"><?php echo esc_html( $skill['skill_item_number']);?>%</span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="87" style="width: <?php echo esc_html( $skill['skill_item_number']);?>%;"></div>
                </div>
              </div>
              <!-- End Progressbar -->
            <?php
                }
            ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
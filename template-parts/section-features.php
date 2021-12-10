<!-- Feature Section Start -->
<div id="feature">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-wrapper">
              <div>
                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s"><?php echo esc_html(get_theme_mod('about_heading'));?></h2>
                <p class="mb-4"><?php echo esc_html(get_theme_mod('about_desc'));?></p>
                <a href="<?php echo esc_url(get_theme_mod('about_btn_link'));?>" class="btn btn-common"><?php echo esc_html(get_theme_mod('about_btn_text'));?></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">

          <div class="feature-thumb">

            <?php
              $settings = get_theme_mod('about_repeater');
              foreach($settings as $item) {
            ?>
              <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">                
                <div class="icon">
                  <i class="<?php echo esc_attr($item['about_item_icon']);?>"></i>
                  
                </div>
                <div class="feature-content">
                  <h3><?php echo esc_html($item['about_item_title']);?></h3>
                  <p><?php echo esc_html($item['about_item_desc']);?></p>
                </div>
              </div>
            <?php
              }
            ?>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->
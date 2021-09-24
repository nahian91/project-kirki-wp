<!-- Testimonial Section Start -->
<section id="testimonial" class="testimonial section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <?php
                $testimonials = get_theme_mod('testimonial_repeater');
                foreach($testimonials as $item) {
              ?>
                <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <?php
                      $img_url = wp_get_attachment_image_src($item['testimonial_item_image']);
                    ?>  
                    <img src="<?php echo $img_url[0];?>" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#"><?php echo $item['testimonial_item_name'];?></a></h2>
                    <h3><a href="#"><?php echo $item['testimonial_item_desg'];?></a></h3>
                  </div>
                  <div class="content">
                    <p class="description"><?php echo $item['testimonial_item_desc'];?></p>
                  </div>
                </div>
              </div>
              <?php
                }
              ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->  
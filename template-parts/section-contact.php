<!-- Contact Section Start -->
<section id="contact" class="section-padding">    
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <?php echo do_shortcode('[contact-form-7 id="230" title="Untitled"]');?>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <div class="contact-title">
                <h1><?php echo get_theme_mod('contact_title');?></h1>
                <p><?php echo get_theme_mod('contact_desc');?></p>
              </div>
              <h2><?php echo get_theme_mod('contact_subtitle');?></h2>
              <div class="contact-right">
                <?php
                  $contacts = get_theme_mod('contact_repeater');
                  foreach($contacts as $item) {
                ?>
                    <div class="single-contact">
                      <div class="contact-icon">
                        <i class="<?php echo $item['contact_icon'];?>"></i>
                      </div>
                      <p><?php echo $item['contact_name'];?></p>
                    </div>
                <?php
                  }
                ?>
                
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->
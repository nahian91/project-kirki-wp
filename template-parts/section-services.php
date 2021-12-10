<?php
        if(get_theme_mod('services_show', true) == true ) {
    ?>
    <!-- Services Section Start -->
    <section id="services" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html('Our Services', 'stack');?></h2>
          <p><?php echo esc_html('A desire to help and empower others between community contributors in technology <br> began to grow in 2020.', 'stack');?></p>
        </div>
        <div class="row">

        <?php
          $services = get_theme_mod('services_repeater');
          foreach($services as $service) {
        ?>  
          <!-- Services item -->
          <div class="<?php echo esc_html(get_theme_mod('services_item_number'));?>">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="<?php echo esc_attr($service['service_item_icon']);?>"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"><?php echo esc_html($service['service_item_title']);?></a></h3>
                <p><?php echo esc_html($service['service_item_desc']);?></p>
              </div>
            </div>
          </div>
        <?php
          }
        ?>
        </div>
      </div>
    </section>
    <!-- Services Section End -->
    <?php
      }
    ?>
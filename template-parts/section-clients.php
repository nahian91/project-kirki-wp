<!-- Clients Section Start -->
<div id="clients" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('client_title');?></h2>
          <p><?php echo get_theme_mod('client_desc');?></p>
        </div>
        <div class="row text-align-">

        <?php
          $clients = get_theme_mod('client_repeater');
          foreach($clients as $client) {
        ?>
            <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
            <div class="client-item-wrapper">
              <?php
                $img_url = wp_get_attachment_image_src($client['client_item_image']);
              ?>
              <img class="img-fluid" src="<?php echo $img_url[0];?>" alt="">
            </div>
          </div>
        <?php
          }
        ?>
          
        </div>
      </div>
    </div>
    <!-- Clients Section End -->
<?php
    if(get_theme_mod('work_show', true) == true) { ?>

<!-- Portfolio Section -->
<section id="portfolios" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('work_title');?></h2>
          <p><?php echo get_theme_mod('work_desc');?></p>
        </div>

      
    <!-- Portfolio Recent Projects -->
    <div id="portfolio" class="row">

        <?php
          $works = get_theme_mod('work_repeater');
          foreach($works as $work) {
        ?>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
            <div class="portfolio-item">
              <div class="shot-item">

              <?php 
                  $img_small_url = wp_get_attachment_image_src($work['work_item_small_image']);
                  $img_big_url = wp_get_attachment_image_src($work['work_item_big_image']);
              ?>

                <img src="<?php echo $img_small_url[0];?>" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="<?php echo $img_big_url[0];?>"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#"><?php echo $work['work_item_title'];?></a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
        <?php
          }
        ?>
        </div>
        
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 
<?php } ?>
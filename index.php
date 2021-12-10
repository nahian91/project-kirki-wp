<?php

/*
Template Name: Home
*/
if(is_front_page()) {
  get_header();
}
else{
  get_header('blog');
}
?>

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp"><?php echo esc_html(get_theme_mod('bannar_heading'));?></h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <a href="<?php echo esc_url(get_theme_mod('bannar_btn_link'));?>" class="btn btn-common"><?php echo esc_html(get_theme_mod('bannar_btn_text'));?></a>
                </div>
              </div>
              <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                <img class="img-fluid" src="<?php echo esc_url(get_theme_mod('bannar_image'));?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->
    </header>
    <!-- Header Area wrapper End -->

    <!-- Features Section -->
    <?php get_template_part('template-parts/section', 'features');?>

    <!-- Services Section -->
    <?php get_template_part('template-parts/section', 'services');?>

    <!-- Video Section -->
    <?php get_template_part('template-parts/section', 'video');?>

    <!-- Team Section -->
    <?php get_template_part('template-parts/section', 'team');?>

    <!-- Counter Section -->
    <?php get_template_part('template-parts/section', 'counter');?>

    <!-- Pricing Section -->
    <?php get_template_part('template-parts/section', 'pricing');?>

    <!-- Skills Section -->
    <?php get_template_part('template-parts/section', 'skills');?>

    <!-- Portfolio Section -->
    <?php get_template_part('template-parts/section', 'portfolio');?>

    <!-- Testimoials Section -->
    <?php get_template_part('template-parts/section', 'testimonials');?>

    <!-- Blog Section -->
    <?php get_template_part('template-parts/section', 'blog');?>

    <!-- Clients Section -->
    <?php get_template_part('template-parts/section', 'clients');?>
    
    <!-- Contact Section -->
    <?php get_template_part('template-parts/section', 'contact');?>
    
<?php get_footer();?>
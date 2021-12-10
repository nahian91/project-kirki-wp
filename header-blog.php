<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
  <?php wp_body_open(); ?>
    <!-- Header Section Start -->
    <header id="hero-area">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="<?php echo esc_url(site_url());?>" class="navbar-brand"><?php the_custom_logo(); ?></a>        
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse menu-white" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url(site_url());?>"><?php echo esc_html('home', 'stack');?></a>
              </li>  
            </ul>
          </div>
        </div>
      </nav>               
    </header>
    <!-- Header Section End --> 
<!-- Slideshow Start -->
<header>
  <?php if(get_theme_mod('terrene-theme-slideshow-display') == "Yes") { ?>
    <div class="slideshow-container">
      <div class="mySlides fade">
        

      <!-- Home Page -->
        <?php 
          if( is_page( 'Home' )) { ?>
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-home-image1')) ?>" alt="" class="slide-cover">
            </div>
            <div class="mySlides fade">
              <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-home-image2')) ?>" alt="" class="slide-cover">
              <div class="caption"><?php echo get_theme_mod('terrene-theme-slideshow-caption') ?></div>
            </div>
            <div class="mySlides fade">
              <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-home-image3')) ?>" alt="" class="slide-cover">
            </div>
        <?php  } ?>
      <!-- About Us -->
        <?php 
          if( is_page( 'about-us' ) ) { ?>
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-about-image1')) ?>" alt="" class="slide-cover">
            </div>
            <div class="mySlides fade">
              <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-about-image2')) ?>" alt="" class="slide-cover">
              <div class="caption"><?php echo get_theme_mod('terrene-theme-slideshow-caption') ?></div>
            </div>
            <div class="mySlides fade">
              <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-about-image3')) ?>" alt="" class="slide-cover">
            </div>
        <?php  } ?>

      <!-- Services -->
      <?php 
          if( is_page( 'services' ) ) { ?>
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-services-image1')) ?>" alt="" class="slide-cover">
            </div>
            <div class="mySlides fade">
              <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-services-image2')) ?>" alt="" class="slide-cover">
              <div class="caption"><?php echo get_theme_mod('terrene-theme-slideshow-caption') ?></div>
            </div>
            <div class="mySlides fade">
              <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-services-image3')) ?>" alt="" class="slide-cover">
            </div>
        <?php  } ?>

        <!-- Contact Us -->

        <?php 
          if( is_page( 'contact-us' ) ) { ?>
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-contact-image1')) ?>" alt="" class="slide-cover">
            </div>
            <div class="mySlides fade">
              <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-contact-image2')) ?>" alt="" class="slide-cover">
              <div class="caption"><?php echo get_theme_mod('terrene-theme-slideshow-caption') ?></div>
            </div>
            <div class="mySlides fade">
              <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-slideshow-contact-image3')) ?>" alt="" class="slide-cover">
            </div>
        <?php  } ?>

        
    </div>
    <?php } ?>
</header>
<!-- Slideshow End -->
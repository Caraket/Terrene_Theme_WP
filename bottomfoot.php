<!-- Footer Start -->
<footer class="bg-light text-center text-lg-start">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Contact Us</h5>

            <div>
              <p>Phone: <a href="tel:218-256-3108"><?php echo get_theme_mod( 'terrene-theme-footer-phone-number'); ?></a></p>
              <p>Accounts: <a href="tel:218-398-4177"><?php echo get_theme_mod( 'terrene-theme-footer-accounts-number'); ?></p>
              <p>Text: <a href="sms:218-256-3108"><?php echo get_theme_mod( 'terrene-theme-footer-text-message'); ?></a></p>
              <p>Address:<?php echo get_theme_mod( 'terrene-theme-footer-address'); ?></p>
              <p>Email: <a href="mailto:justin@terrenedevelopment.com"><?php echo get_theme_mod( 'terrene-theme-footer-email'); ?></a></p>  
            </div>
          </div>
          <!--Grid column-->

          <!-- Empty Grid column -->

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          </div>

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            

            <?php
                wp_nav_menu( [
                    'menu'           => 'footer',
                    'theme_location' => 'menu-2',
                    'container'      => 'div',
                    'container-class'=> 'bottom-nav',
                    'menu-id'        => false,
                    'menu-class'     => 'navbar-nav mr-auto',
                    'depth'          => 0,
                    'fallback_cb'    => 'bs4navwalker::fallback',
                    'walker'         => new bs4Navwalker() 
                ] );
            ?>

          </div>
          <!--Grid column-->

          <!-- Facebook link -->
          <div class="socialmedia">
            <a href="<?php echo get_theme_mod( 'terrene-theme-footer-facebook-link' ); ?>" class="socialmedia-link">
              <img src="<?php echo wp_get_attachment_url(get_theme_mod('terrene-theme-footer-facebook-logo')); ?>" alt="Facebook Logo">
            </a>
          </div>
          
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        ?? 2021 Copyright: Terrene Development
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer End -->
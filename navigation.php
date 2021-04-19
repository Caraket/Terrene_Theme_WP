<!-- Navigation Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">
            <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                if( has_custom_logo() ) {
                  echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                } else {
                  echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
                }
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php 
          wp_nav_menu([
            'menu'           => 'primary',
            'theme_location' => 'menu-1',
            'container'      => 'div',
            'container_id'   => 'navbarCollapse',
            'container_class'=> 'collapse navbar-collapse top-nav',
            'menu_id'        => false,
            'menu_class'     => 'navbar-nav mr-auto',
            'depth'          => 0,
            'fallback_cb'    => 'bs4navwalker::fallback',
            'walker'         => new bs4Navwalker()
          ]);
        
          ?>
      </div>
    </nav>
    <!-- Navigation End -->
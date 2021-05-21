<?php require_once('bs4navwalker.php'); ?>

<?php register_nav_menus( array(
    'menu-1' => __( 'Primary Menu', 'terrene-theme' ),
    'footer-menu' => __('Footer Menu', 'terrene-theme'),
)); ?>

<?php 
    function terrene_theme_sidebar() {
        register_sidebar( array(
            'name' => __( 'Primary Sidebar', 'terrene-theme'),
            'id'   => 'sidebar-1',
        ) );
    }
    add_action('widgets_init', 'terrene_theme_sidebar');
?>

<?php add_theme_support( 'post-thumbnails' ); ?>




<?php add_image_size( 'my-custom-image-size' , 640, 999 ); ?>

<?php function terrene_theme_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'terrene-theme', get_stylesheet_uri() );
} 
add_action('wp_enqueue_scripts', 'terrene_theme_enqueue_styles' );

function terrene_theme_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array( 'jquery' ), true);
    wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/js/slideshow.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'terrene_theme_enqueue_scripts' );

?>
<?php 
    add_theme_support('title-tag' );
?>

<?php 
    // Add custom logo support
    function terrene_theme_custom_logo_setup() {
        $defaults = array(
            'height'               => 256,
            'width'                => 256, 
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true,
        );

        add_theme_support( 'custom-logo', $defaults );
    }

    add_action( 'after_setup_theme', 'terrene_theme_custom_logo_setup' );
?>

<?php 
    // Add Footer Contact section to admin appearence customize screen
    function terrene_theme_footer_callout($wp_customize) {
        $wp_customize->add_section('terrene-theme-footer-callout-section', array(
            'title'    => 'Footer Links',
            'priority' => 30,
        ));

        $wp_customize->add_setting('terrene-theme-footer-phone-number', array(
            'default'      => '555-555-5555'
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'terrene-theme-footer-phone-number-control', array(
            'label'     => 'Phone',
            'section'   => 'terrene-theme-footer-callout-section',
            'settings'  => 'terrene-theme-footer-phone-number'
        )));

        $wp_customize->add_setting('terrene-theme-footer-text-message', array(
            'default'   => '555-555-5555'
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'terrene-theme-footer-text-message-control', array(
            'label'     => 'Text',
            'section'   => 'terrene-theme-footer-callout-section',
            'settings'  => 'terrene-theme-footer-text-message'
        )));

        $wp_customize->add_setting('terrene-theme-footer-address', array(
            'default'      => '123 mulberry lane'
        ));       
        
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'terrene-theme-footer-address-control', array(
            'label'     => 'Address',
            'section'   => 'terrene-theme-footer-callout-section',
            'settings'  => 'terrene-theme-footer-address'
        )));

        $wp_customize->add_setting('terrene-theme-footer-email', array(
            'default'      => 'example@example.com'
        ));       
        
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'terrene-theme-footer-email-control', array(
            'label'     => 'Email',
            'section'   => 'terrene-theme-footer-callout-section',
            'settings'  => 'terrene-theme-footer-email'
        )));
        
        $wp_customize->add_setting('terrene-theme-footer-facebook-link', array(
            'default'      => 'https://www.facebook.com'
        ));       
        
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'terrene-theme-footer-facebook-link-control', array(
            'label'     => 'Facebook Link',
            'section'   => 'terrene-theme-footer-callout-section',
            'settings'  => 'terrene-theme-footer-facebook-link'
        )));

        $wp_customize->add_setting('terrene-theme-footer-facebook-logo');       
        
        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-footer-facebook-logo-control', array(
            'label'     => 'Facebook Logo Image',
            'section'   => 'terrene-theme-footer-callout-section',
            'settings'  => 'terrene-theme-footer-facebook-logo', 
            'width'     => 256,
            'height'    => 256
        )));
        
    }

    add_action('customize_register', 'terrene_theme_footer_callout');


?>

<?php 
    // Add Slideshow section to admin appearence customize screen
    function terrene_theme_slideshow_callout($wp_customize) {
        $wp_customize->add_section('terrene-theme-slideshow-section', array(
            'title' => 'Slideshow Callout'
        ));

        $wp_customize->add_setting('terrene-theme-slideshow-display', array(
            'default' => 'No'
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'terrene-theme-slideshow-display-control', array(
            'label' => 'Display this Section?',
            'section' => 'terrene-theme-slideshow-section', 
            'settings' => 'terrene-theme-slideshow-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes') 
        )));


        $wp_customize->add_setting('terrene-theme-slideshow-headline', array(
            'default' => 'Example caption text'
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'terrene-theme-slideshow-caption-control', array(
            'label' => 'Caption',
            'section' => 'terrene-theme-slideshow-section', 
            'settings' => 'terrene-theme-slideshow-caption'
        )));


        // Home Page Images
        $wp_customize->add_setting('terrene-theme-slideshow-home-image1');

        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-home-image1-control', array(
            'label' => 'Home Image 1',
            'section' => 'terrene-theme-slideshow-section',
            'settings' => 'terrene-theme-slideshow-home-image1', 
            'width' => 750,
            'height' => 700
        )));
        $wp_customize->add_setting('terrene-theme-slideshow-home-image2');

        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-home-image2-control', array(
            'label' => 'Home Image 2',
            'section' => 'terrene-theme-slideshow-section',
            'settings' => 'terrene-theme-slideshow-home-image2', 
            'width' => 750,
            'height' => 700
        )));
        $wp_customize->add_setting('terrene-theme-slideshow-home-image3');

        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-home-image3-control', array(
            'label' => 'Home Image 3',
            'section' => 'terrene-theme-slideshow-section',
            'settings' => 'terrene-theme-slideshow-home-image3', 
            'width' => 750,
            'height' => 700
        )));

        // End Home page images

        // // About Us Images
        // $wp_customize->add_setting('terrene-theme-slideshow-about-image1');

        // $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-about-image1-control', array(
        //     'label' => 'About Us Image 1',
        //     'section' => 'terrene-theme-slideshow-section',
        //     'settings' => 'terrene-theme-slideshow-about-image1', 
        //     'width' => 750,
        //     'height' => 700
        // )));
        // $wp_customize->add_setting('terrene-theme-slideshow-about-image2');

        // $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-about-image2-control', array(
        //     'label' => 'About Us Image 2',
        //     'section' => 'terrene-theme-slideshow-section',
        //     'settings' => 'terrene-theme-slideshow-about-image2', 
        //     'width' => 750,
        //     'height' => 700
        // )));
        // $wp_customize->add_setting('terrene-theme-slideshow-about-image3');

        // $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-about-image3-control', array(
        //     'label' => 'About Us Image 3',
        //     'section' => 'terrene-theme-slideshow-section',
        //     'settings' => 'terrene-theme-slideshow-about-image3', 
        //     'width' => 750,
        //     'height' => 700
        // )));

        // // End About Us Images

        // // Start Services Images

        // $wp_customize->add_setting('terrene-theme-slideshow-services-image1');

        // $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-services-image1-control', array(
        //     'label' => 'Services Us Image 1',
        //     'section' => 'terrene-theme-slideshow-section',
        //     'settings' => 'terrene-theme-slideshow-services-image1', 
        //     'width' => 750,
        //     'height' => 700
        // )));
        // $wp_customize->add_setting('terrene-theme-slideshow-services-image2');

        // $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-services-image2-control', array(
        //     'label' => 'Services Us Image 2',
        //     'section' => 'terrene-theme-slideshow-section',
        //     'settings' => 'terrene-theme-slideshow-services-image2', 
        //     'width' => 750,
        //     'height' => 700
        // )));
        // $wp_customize->add_setting('terrene-theme-slideshow-services-image3');

        // $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-services-image3-control', array(
        //     'label' => 'Services Image 3',
        //     'section' => 'terrene-theme-slideshow-section',
        //     'settings' => 'terrene-theme-slideshow-services-image3', 
        //     'width' => 750,
        //     'height' => 700
        // )));

        // // End Services Images

        // // Start Contact Us Images

        // $wp_customize->add_setting('terrene-theme-slideshow-contact-image1');

        // $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-contact-image1-control', array(
        //     'label' => 'Contact Us Image 1',
        //     'section' => 'terrene-theme-slideshow-section',
        //     'settings' => 'terrene-theme-slideshow-contact-image1', 
        //     'width' => 750,
        //     'height' => 700
        // )));
        // $wp_customize->add_setting('terrene-theme-slideshow-contact-image2');

        // $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-contact-image2-control', array(
        //     'label' => 'Contact Us Image 2',
        //     'section' => 'terrene-theme-slideshow-section',
        //     'settings' => 'terrene-theme-slideshow-contact-image2', 
        //     'width' => 750,
        //     'height' => 700
        // )));
        // $wp_customize->add_setting('terrene-theme-slideshow-contact-image3');

        // $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'terrene-theme-slideshow-callout-contact-image3-control', array(
        //     'label' => 'Contact Us Image 3',
        //     'section' => 'terrene-theme-slideshow-section',
        //     'settings' => 'terrene-theme-slideshow-contact-image3', 
        //     'width' => 750,
        //     'height' => 700
        // )));

        // End Contact Us Images




    }

    add_action('customize_register', 'terrene_theme_slideshow_callout');
?>
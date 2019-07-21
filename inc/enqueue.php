<?php 
/**
 * Enqueue scripts and styles.
 */
function wp_champagne_scripts() {
   
    /* Register Styles */
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap', array(), '1.0.0');
    wp_register_style('boostrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.3');
    wp_register_style('animate-style', get_template_directory_uri() . '/css/animate.min.css', array(), '3.7.0');
    wp_register_style('lightslider-style', get_template_directory_uri() . '/css/lightslider.min.css', array(), '1.0.0');

    /* Enqueue Styles */
    wp_enqueue_style('google-fonts');
    wp_enqueue_style('boostrap-style');
    wp_enqueue_style('animate-style');
    wp_enqueue_style('lightslider-style');
    wp_enqueue_style( 'wp_champagne-style', get_stylesheet_uri() );


    /* Register scripts */
    wp_register_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', array(), '1.14.3', true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.4', true);
    wp_register_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '1.3.0', true );
    wp_register_script( 'lightslider-js', get_template_directory_uri() . '/js/lightslider.min.js', array(), '1.0.0', true );
    wp_register_script( 'font-awesome-js', 'https://kit.fontawesome.com/a2d8c9e1b2.js', array(), '5.0', true );
    wp_register_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', false );


   
    /* Enqueue Scripts */
    wp_enqueue_script( 'wp_champagne-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '3.0.6', true );
    wp_enqueue_script( 'wp_champagne-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
   
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('wow-js');
    wp_enqueue_script('lightslider-js');
    wp_enqueue_script('font-awesome-js');
    wp_enqueue_script('jquery-ui-core'); // enqueue jQuery UI Core
    wp_enqueue_script('jquery-ui-tabs'); // enqueue jQuery UI Tabs
    wp_enqueue_script('custom-js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


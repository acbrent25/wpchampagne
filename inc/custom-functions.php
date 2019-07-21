<?php 

/**
 * Hide Gravity Form field labels when using placeholders.
 */
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

/************************
	Dashicons in frontend
*************************/
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}

/************************
	Woocommerce
*************************/
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10, 0);


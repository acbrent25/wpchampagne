<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Champagne
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ac' ); ?></a> -->

	<header id="masthead" class="site-header fixed-top">

    <!-- Top Bar -->
    <div class="container-fluid contact-bar">
      <div class="container">
          <div class="row">
          <div class="col-md-6 ml-auto">
            <ul>
              <li> <a href="#" target="_blank"><span class="dashicons dashicons-facebook-alt"></span></a></li>
              <li> <a href="#" target="_blank"><span class="dashicons dashicons-instagram"></span></a></li>
              <li> <a href="#" data-toggle="modal" data-target="#footerModal"><span class="dashicons dashicons-email-alt"></span></a></li>
              <li> <a href="<?php echo get_home_url(); ?>/#"><span class="dashicons dashicons-cart"></span></a></li>
              <li> | <a href="tel:#">(555) 555-5555</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/ Top Bar -->

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
            <div class="container">
                <a href="<?php echo get_home_url(); ?>" class="custom-logo-link" rel="home" itemprop="url"><img width="300" height="75" src="https://via.placeholder.com/300x75

C/O https://placeholder.com/" class="custom-logo" alt="company logo" itemprop="logo"></a>
                 <!-- Brand and toggle get grouped for better mobile display -->
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="hamburger hamburger--spin">
                       <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                   </span>
                 </button>

                <?php
                wp_nav_menu( array(
                   'theme_location'    => 'menu-1',
                   'depth'             => 2,
                   'container'         => 'div',
                   'container_class'   => 'collapse navbar-collapse',
                   'container_id'      => 'main-nav',
                   'menu_class'        => 'nav navbar-nav ml-auto',
                   'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                   'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
      </nav>
	</header><!-- #masthead -->
	<div id="content" class="site-content">

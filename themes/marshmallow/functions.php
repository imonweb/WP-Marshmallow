<?php
 
function marshmallow_functions()
{ 
  /*  Stylesheet */
  wp_enqueue_style('materialdesignicons', get_template_directory_uri(). '/assets/vendors/mdi/css/materialdesignicons.min.css');
  wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/vendors/owl.carousel/css/owl.carousel.css');
  wp_enqueue_style('carousel_default', get_template_directory_uri() . '/assets/vendors/owl.carousel/css/owl.theme.default.min.css');
  wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendors/aos/css/aos.css');
  wp_enqueue_style('flipster_css', get_template_directory_uri() . '/assets/vendors/jquery-flipster/css/jquery.flipster.css');
  wp_enqueue_style('style_css', get_template_directory_uri() . '/assets/css/style.css');

  /*  Scripts */
  wp_enqueue_script( 'bundle_js', get_template_directory_uri(), '/assets/vendors/base/vendor.bundle.base.js', array('jquery'), false, true );
  wp_enqueue_script( 'owl_carousel_js', get_template_directory_uri(), '/assets/vendors/owl.carousel/js/owl.carousel.js', array('jquery'), false, true );
  wp_enqueue_script( 'aos_js', get_template_directory_uri(), '/assets/vendors/aos/js/aos.js', array('jquery'), false, true );
  wp_enqueue_script( 'flipster_js', get_template_directory_uri(), '/assets/vendors/jquery-flipster/js/jquery.flipster.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'template_js', get_template_directory_uri(), '/assets/js/template.js', array('jquery'), false, true );
}
 

add_action('wp_enqueue_scripts','marshmallow_functions');


/* ====== Nav walker ====== */

// Register Custom Navigation Walker
require_once get_template_directory() . '/include/class-wp-bootstrap-navwalker.php';
 
if ( ! file_exists( get_template_directory() . '/include/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/include/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
	'bootstrap' => __( 'Bootstrap Menu', 'THEMENAME' ),
) );
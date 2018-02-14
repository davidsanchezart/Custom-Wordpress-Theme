<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap.min.js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	wp_register_script( 'bootstrap.bundle.min.js', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ) );
		wp_register_script( 'jquery-3.2.1.min.js', get_template_directory_uri() . '/bootstrap/js/jquery-3.2.1.min.js', array( 'jquery' ) );
			wp_register_script( 'ScrollMagic.min.js', get_template_directory_uri() . '/scrollmagic/minified/ScrollMagic.min.js', array( 'jquery' ) );
			wp_register_script( 'animation.velocity.min.js', get_template_directory_uri() . '/scrollmagic/minified/plugins/animation.velocity.min.js', array( 'jquery' ) );
			wp_register_script( 'animation.gsap.min.js', get_template_directory_uri() . '/scrollmagic/minified/plugins/animation.gsap.min.js', array( 'jquery' ) );
			wp_register_script( 'debug.addIndicators', get_template_directory_uri() . '/scrollmagic/minified/plugins/debug.addIndicators.min.js', array( 'jquery' ) );
			wp_register_script( 'jquery.ScrollMagic.js', get_template_directory_uri() . '/scrollmagic/minified/plugins/jquery.ScrollMagic.min.js', array( 'jquery' ) );







	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap.min.js' );
	wp_enqueue_script( 'bootstrap.bundle.min.js' );
	wp_enqueue_script( 'jquery-3.2.1.min.js' );
	wp_enqueue_script( 'ScrollMagic.min.js' );
	wp_enqueue_script( 'animation.velocity.min.js' );
	wp_enqueue_script( 'animation.gsap.min.js' );
	wp_enqueue_script( 'debug.addIndicators' );
	wp_enqueue_script( 'jquery.ScrollMagic.js' );



}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));



function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'themename', get_template_directory_uri() . '/bootstrap/css/bootstrap-grid.css' );
    wp_enqueue_style( 'themename', get_template_directory_uri() . '/bootstrap/css/bootstrap-reboot.css' );
    wp_enqueue_style( 'themename', get_template_directory_uri() . '/bootstrap/css/bootstrap-responsive.css' );


}

add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');





?>
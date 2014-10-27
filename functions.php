<?php
/*  Child theme actions to overwrite main theme
------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_theme_actions', 2 );
function tally_child_theme_actions(){
	
	//add_filter( 'tally614ba1c62845593400f9fa8ea1517faa', '__return_true' );
	
	add_filter( 'tallykit_logoa960064244af68fdda5c8dff6ed56710', '__return_true');
	add_filter( 'tallykit_people543023146d784d67c921609b1825ec38', '__return_true');
	add_filter( 'tallykit_portfolio28a5cbad70e7a1cbffe1b4a9d6b6594c', '__return_true');
	add_filter( 'tallykit_shortcodesa6a879a475bf2e0abaf4c4b77cc5a8e5', '__return_true');
	add_filter( 'tallykit_slideshow58cfb02f8e8273e2b1e6bd49d6329ab1', '__return_true');
	add_filter( 'tallykit_testimonialf2456c67473ec153a9ab5e30bf4c5e57', '__return_true');
	add_filter( 'tallykit_galleryae6f1f6116e418c0d988800ca5f95c17', '__return_true');
	add_filter( 'tallykit_buddypress50cf7ce0ada06e45fd7a7ccf46ed5340', '__return_true');
	add_filter( 'tallykit_FrontPagea6ad00a15774817903738705afbefdef', '__return_true');
	
	define('TALLY_THEME_STORE_URL', 'http://tallythemes.com/');
	
	if ( ! isset( $content_width ) ) $content_width = 1170;
	
	add_filter( 'bbpresstallyc_custom_css', '__return_true');
	add_filter( 'buddypresstallyc_custom_css', '__return_true');
	add_filter( 'wootallyc_custom_css', '__return_true');
	
	load_theme_textdomain( 'tally_child_textdomain', get_stylesheet_directory().'/languages' );
	
	add_filter( 'tally_recommended_plugins', 'tally_child_recommended_plugins');
	
	//echo tally_get_serialize_option_data();
	//echo tally_check_see();
}



function tally_child_recommended_plugins($plugins){
	
	$plugins[] = array(
		'name'      => 'TallyKit',
		'slug'      => 'tallykit',
		'required'  => true,
	);
	$plugins[] = array(
		'name'      => 'WP Retina 2x',
		'slug'      => 'wp-retina-2x',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'WooCommerce',
		'slug'      => 'woocommerce',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'Woocommerce Connect For Tally Framework',
		'slug'      => 'woocommerce-connect-for-tally-framework',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'WordPress SEO by Yoast',
		'slug'      => 'wordpress-seo',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'bbPress',
		'slug'      => 'bbpress',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'bbPress Connect For Tally Framework',
		'slug'      => 'bbpress-connect-for-tally-framework',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'BuddyPress',
		'slug'      => 'buddypress',
		'required'  => false,
	);
	$plugins[] = array(
		'name'      => 'BuddyPress Connect For Tally Framework',
		'slug'      => 'buddypress-connect-for-tally-framework',
		'required'  => false,
	);
	
	return $plugins;
}
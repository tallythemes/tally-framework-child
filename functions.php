<?php
/**
 * Set up the content width value based on the theme's design.
 *
 */
	if ( ! isset( $content_width ) ) {
		$content_width = 1100;
	}
	
	
/*  This hook load before the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_before_parant_theme', 2);
function tally_child_load_before_parant_theme(){
	
	/* Conostant Setup */
	define('TK_THEME_NAME', 'Tally Framework Child');
	define('TALLY_THEME_NAME', 'Tally Framework Child');
	
	define('TALLY_THEME_STORE_URL', '#');
	define('TALLY_THEME_DEMO_URL', esc_url('#'));
	define('TALLY_THEME_DOC_URL', esc_url('#'));
	define('TALLY_THEME_SUPPORT_URL', esc_url('#'));
	define('TALLY_THEME_ORG_URL', '');
	define('TALLY_THEME_MORE_URL', esc_url('#'));
	
	
	/* Textdomain Setup */
	load_theme_textdomain( 'tally_child_textdomain', get_stylesheet_directory().'/languages' );
}



/*  This hook load after the parant theme functions load
--------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_load_after_parant_theme', 4);
function tally_child_load_after_parant_theme(){
	
	/* Theme Setup */
	add_filter( 'tally614ba1c62845593400f9fa8ea1517faa', '__return_true' );
	
	/* Connect Plugin Setup */
	add_filter( 'bbpresstallyc_custom_css', '__return_true');
	add_filter( 'buddypresstallyc_custom_css', '__return_true');
	add_filter( 'wootallyc_custom_css', '__return_true');
	
	/* Recommended Setup */
	add_filter( 'tally_plugin_list_optiontree_required', '__return_true');
	add_filter( 'tally_plugin_list_optiontree_force_activation', '__return_true');
	add_filter( 'tally_plugin_list_contactform7_required', '__return_true');
	add_filter( 'tally_plugin_list_optiontree_required', '__return_true');
	add_filter( 'tally_recommended_plugins', 'tally_child_recommended_plugins');
	
	/* Admin Notice */
	add_filter( 'tally_impoter_notice_display', '__return_true');
	add_filter( 'tally_free_notice_display', '__return_false');
	
	//echo tally_get_serialize_option_data();
	//echo tally_check_see();
}



function tally_child_recommended_plugins($plugins){
	
	$plugins[] = array(
		'name'      => 'TallyKit',
		'slug'      => 'tallykit',
		'required'  => true,
		'force_activation'   => true,
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
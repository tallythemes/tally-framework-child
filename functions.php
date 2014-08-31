<?php

/*  Setup The theme and tallykit
-------------------------------------------------------*/
add_filter( 'tally614ba1c62845593400f9fa8ea1517faa', '__return_true' );

add_filter( 'tallykit_docf4e966b90ab1cc1ce61455164c867bc8', '__return_true');
add_filter( 'tallykit_logoa960064244af68fdda5c8dff6ed56710', '__return_true');
add_filter( 'tallykit_parallax4d9c5183d7a360c86c4f4f292a5354dc', '__return_true');
add_filter( 'tallykit_people543023146d784d67c921609b1825ec38', '__return_true');
add_filter( 'tallykit_portfolio28a5cbad70e7a1cbffe1b4a9d6b6594c', '__return_true');
add_filter( 'tallykit_shortcodesa6a879a475bf2e0abaf4c4b77cc5a8e5', '__return_true');
add_filter( 'tallykit_slideshow58cfb02f8e8273e2b1e6bd49d6329ab1', '__return_true');
add_filter( 'tallykit_testimonialf2456c67473ec153a9ab5e30bf4c5e57', '__return_true');
add_filter( 'tallykit_galleryae6f1f6116e418c0d988800ca5f95c17', '__return_true');




/*  Child theme actions to overwrite main theme
------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_theme_actions' );
function tally_child_theme_actions(){
		
	//echo tally_get_serialize_option_data();
	
}

/*  Theme option STD
-------------------------------------------------------*/
add_filter('tally_option_std', 'tally_child_option_std_filter', 15);
function tally_child_option_std_filter($option){
	$default_options_file = file_get_contents( TALLY_CHILD_DRI . '/demo/theme-options.txt');
	$default_options = unserialize( tally_decode( $default_options_file ) );
	
	if(is_array($default_options)){
		$option = $default_options;
	}
	
	$option['site_logo'] = TALLY_CHILD_URL.'/images/logo.png';
	$option['site_logo_retina'] = TALLY_CHILD_URL.'/images/logo@2x.png';

	return $option;	
}
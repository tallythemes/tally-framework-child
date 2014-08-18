<?php

/*  Setup The theme and tallykit
-------------------------------------------------------*/
add_filter( 'tally614ba1c62845593400f9fa8ea1517faa', '__return_true' );

add_filter( 'tallykit_bbpress7635be87fd37b928cecfa0d8c43840c8', '__return_true');
add_filter( 'tallykit_buddypress50cf7ce0ada06e45fd7a7ccf46ed5340', '__return_true');
add_filter( 'tallykit_cart66f7f2be68e3676b9e3e98c3cce20702ac', '__return_true');
add_filter( 'tallykit_docf4e966b90ab1cc1ce61455164c867bc8', '__return_true');
add_filter( 'tallykit_easy-digital-downloads2cf4ef35ebd6ca4305084c1beca57f86', '__return_true');
add_filter( 'tallykit_faqeab3a667fa7d1b6216be1bf8535e9a05', '__return_true');
add_filter( 'tallykit_image-gallerya2944d4a8e9bec10fa9937dfdcc5712a', '__return_true');
add_filter( 'tallykit_logoa960064244af68fdda5c8dff6ed56710', '__return_true');
add_filter( 'tallykit_parallax4d9c5183d7a360c86c4f4f292a5354dc', '__return_true');
add_filter( 'tallykit_people543023146d784d67c921609b1825ec38', '__return_true');
add_filter( 'tallykit_portfolio28a5cbad70e7a1cbffe1b4a9d6b6594c', '__return_true');
add_filter( 'tallykit_pricing-table5d49eb30abbd981de58e007e926a080a', '__return_true');
add_filter( 'tallykit_shortcodesa6a879a475bf2e0abaf4c4b77cc5a8e5', '__return_true');
add_filter( 'tallykit_slideshow58cfb02f8e8273e2b1e6bd49d6329ab1', '__return_true');
add_filter( 'tallykit_testimonialf2456c67473ec153a9ab5e30bf4c5e57', '__return_true');
add_filter( 'tallykit_woocommercef3a21ac89dbf43c22ddfe206fc239121', '__return_true');

add_filter( 'tallykit_galleryae6f1f6116e418c0d988800ca5f95c17', '__return_true');




/*  Child theme actions to overwrite main theme

------------------------------------------------------*/
add_action( 'after_setup_theme', 'tally_child_theme_actions' );
function tally_child_theme_actions(){

	

}

/*  Theme option STD
-------------------------------------------------------*/
add_filter('tally_option_std', 'tally_child_option_std_filter', 15);
function tally_child_option_std_filter($option){

	

	

	

	return $option;	

}
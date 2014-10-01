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
	
	add_filter( 'bbpresstallyc_custom_css', '__return_true');
	add_filter( 'buddypresstallyc_custom_css', '__return_true');
	add_filter( 'wootallyc_custom_css', '__return_true');
	
	load_theme_textdomain( 'tally_child_textdomain', get_stylesheet_directory().'/languages' );
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



add_filter('tallykit_FrontPage', 'tally_child_front_page', 100);
function tally_child_front_page(){	
	$array = array();
	/*	Row 0
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Slideshow',
				'class'	=> '',
				'type'	=> 'slideshow',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_0 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	/*	Row 1
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '3',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Accordion',
				'class'	=> '',
				'type'	=> 'accordion',
			),
		)
	);
	$columns[] = array(
		'col' => '3',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Callour',
				'class'	=> '',
				'type'	=> 'callout',
			),
		)
	);
	$columns[] = array(
		'col' => '3',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Map',
				'class'	=> '',
				'type'	=> 'map',
			),
		)
	);
	$columns[] = array(
		'col' => '3',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Video',
				'class'	=> '',
				'type'	=> 'video',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_1 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '4',
		'columns'		=> $columns,
	);
	
	
	/*	Row 2
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Blog Grid',
				'class'	=> '',
				'type'	=> 'blog_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_2 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	
	/*	Row 3
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '4',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Toggle',
				'class'	=> '',
				'type'	=> 'toggle',
			),
		)
	);
	$columns[] = array(
		'col' => '4',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Tabs',
				'class'	=> '',
				'type'	=> 'tab',
			),
		)
	);
	$columns[] = array(
		'col' => '4',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Text',
				'class'	=> '',
				'type'	=> 'text',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_3 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '3',
		'columns'		=> $columns,
	);
	
	
	/*	Row 4
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Text Block',
				'class'	=> '',
				'type'	=> 'textblock',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_4 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	
	/*	Row 5
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Testimonial Slideshow',
				'class'	=> '',
				'type'	=> 'testimonial_slideshow',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_5 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	
	/*	Row 6
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Testimonial Grid',
				'class'	=> '',
				'type'	=> 'testimonial_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_6 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	
	/*	Row 7
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Testimonial Carousel',
				'class'	=> '',
				'type'	=> 'testimonial_carousel',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_7 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	
	/*	Row 8
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '6',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Portfolio Slideshow',
				'class'	=> '',
				'type'	=> 'portfolio_slideshow',
			),
		)
	);
	$columns[] = array(
		'col' => '6',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Portfolio Grid',
				'class'	=> '',
				'type'	=> 'portfolio_grid',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_8 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '2',
		'columns'		=> $columns,
	);
	
	
	/*	Row 9
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Portfolio Carousel',
				'class'	=> '',
				'type'	=> 'portfolio_carousel',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_9 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	
	/*	Row 10
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Portfolio Carousel',
				'class'	=> '',
				'type'	=> 'people_carousel',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_10 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	
	/*	Row 11
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '6',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'People Grid',
				'class'	=> '',
				'type'	=> 'people_grid',
			),
		)
	);
	$columns[] = array(
		'col' => '6',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'People Slideshow',
				'class'	=> '',
				'type'	=> 'people_slideshow',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_11 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '2',
		'columns'		=> $columns,
	);
	
	
	/*	Row 12
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '6',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Logo Grid',
				'class'	=> '',
				'type'	=> 'logo_grid',
			),
		)
	);
	$columns[] = array(
		'col' => '6',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Logo Slideshow',
				'class'	=> '',
				'type'	=> 'logo_slideshow',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_12 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '2',
		'columns'		=> $columns,
	);
	
	
	/*	Row 13
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Logo Carousel',
				'class'	=> '',
				'type'	=> 'logo_carousel',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_13 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	
	/*	Row 14
	----------------------------------*/
	$columns = '';
	$columns[] = array(
		'col' => '12',
		'class' => '',
		'blocks' => array(
			array(
				'lable'	=> 'Audio',
				'class'	=> '',
				'type'	=> 'audio',
			),
		)
	);
	$array[] = array(
		'class'			=> 'row_13 width_1170 color_mood_dark',
		'div_id'		=> '',
		'max_columns'	=> '1',
		'columns'		=> $columns,
	);
	
	
	return $array;
}



/*  TGM Plugin
-------------------------------------------------------*/
function tally_child_register_required_plugins() {
	 $plugins = array(
		array(
            'name'      => 'TallyKit',
            'slug'      => 'tallykit',
            'required'  => true,
		),
 		array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true,
		),
		array(
            'name'      => 'WP Retina 2x',
            'slug'      => 'wp-retina-2x',
            'required'  => false,
		),
		array(
            'name'      => 'WooCommerce',
            'slug'      => 'woocommerce',
            'required'  => false,
		),
		array(
            'name'      => 'Woocommerce Connect For Tally Framework',
            'slug'      => 'woocommerce-connect-for-tally-framework',
            'required'  => false,
		),
		array(
            'name'      => 'Intuitive Custom Post Order',
            'slug'      => 'intuitive-custom-post-order',
            'required'  => false,
		),
		array(
            'name'      => 'Regenerate Thumbnails',
            'slug'      => 'regenerate-thumbnails',
            'required'  => false,
		),
		array(
            'name'      => 'WordPress SEO by Yoast',
            'slug'      => 'wordpress-seo',
            'required'  => false,
		),
		array(
            'name'      => 'Recent Posts Widget Extended',
            'slug'      => 'recent-posts-widget-extended',
            'required'  => false,
		),
		array(
            'name'      => 'bbPress',
            'slug'      => 'bbpress',
            'required'  => false,
		),
		array(
            'name'      => 'bbPress Connect For Tally Framework',
            'slug'      => 'bbpress-connect-for-tally-framework',
            'required'  => false,
		),
		array(
            'name'      => 'BuddyPress',
            'slug'      => 'buddypress',
            'required'  => false,
		),
		array(
            'name'      => 'BuddyPress Connect For Tally Framework',
            'slug'      => 'buddypress-connect-for-tally-framework',
            'required'  => false,
		),
		array(
            'name'      => 'Flickr Badge Widget',
            'slug'      => 'flickr-badges-widget',
            'required'  => false,
		),
	);
	 
	 $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tally_child_textdomain' ),
            'menu_title'                      => __( 'Install Plugins', 'tally_child_textdomain' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tally_child_textdomain' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tally_child_textdomain' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tally_child_textdomain' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tally_child_textdomain' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tally_child_textdomain' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
	 
	tgmpa( $plugins, $config );
}
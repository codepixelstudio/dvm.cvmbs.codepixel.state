<?php

    // call the custom post type function on WP init
	add_action( 'init', 'homepage_panel_post_type' );

    // define custom post type function and properties
	function homepage_panel_post_type() {

	    // register post type + pass properties array to function
		register_post_type( 'panel',

		    // define post type options and properties
			array(

				'labels' => array(

					'name' 				=> __( 'Panels', 'cvmbsPress' ),
					'singular_name' 	=> __( 'Homepage Panel', 'cvmbsPress' ),
					'all_items' 		=> __( 'All Homepage Panels', 'cvmbsPress' ),
					'add_new' 			=> __( 'Add Homepage Panel', 'cvmbsPress' ),
					'add_new_item' 		=> __( 'Add New Homepage Panel', 'cvmbsPress' ),
					'edit' 				=> __( 'Edit', 'cvmbsPress' ),
					'edit_item' 		=> __( 'Edit Homepage Panel', 'cvmbsPress' ),
					'new_item' 			=> __( 'New Homepage Panel', 'cvmbsPress' ),
					'search_items' 		=> __( 'Search Homepage Panels', 'cvmbsPress' ),
					'not_found' 		=> __( 'Nothing to see here, which is bad, because panels are meant to be seen.', 'cvmbsPress' ),
					'parent_item_colon' => ''

				),

				'public'				=> true,
				'publicly_queryable' 	=> true,
				'exclude_from_search'   => true,
				'show_ui' 				=> true,
				'show_in_nav_menus' 	=> false,
				'show_in_admin_bar' 	=> false,
				'query_var' 			=> true,
				'can_export' 			=> true,
				'rewrite' 				=> array( 'slug' => 'panels', 'with_front' => false ),
				'has_archive' 			=> false,
				'capability_type' 		=> 'post',
				'hierarchical' 			=> false,
				'menu_position' 		=> 3,
				'menu_icon' 			=> 'dashicons-layout',
				'supports' 				=> array( 'title' )

			)

		);

	}

?>

<?php

add_image_size('custom_size',260,260);
add_theme_support( 'menus' );


/*set maximum file size*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

//disable toolbar for alls users
show_admin_bar(false);
add_filter('show_admin_bar', '__return_false');


function get_page_number() {
    if ( get_query_var('paged') ) {print ' | ' . __( 'Page ' , 'quickstart_theme') . get_query_var('paged');}
} 

add_action( 'init', 'create_post_type_example' );

function create_post_type_example() {
  register_post_type( 'example',
    array(
      'labels' => array(
        'name'                => __( 'Example Post Type' ),       
        'singular_name'       => __( 'Example Post Type' ),
        'menu_name'           => __( 'Example Post Type', 'quickstart_theme' ),
        'all_items'           => __( 'All Exmaples', 'quickstart_theme' ),
        'add_new_item'        => __( 'Create new Example', 'quickstart_theme' ),
        'add_new'             => __( 'Create Example', 'quickstart_theme' ),
        'edit_item'           => __( 'Edit Example', 'quickstart_theme' ),
        'update_item'         => __( 'Update Example', 'quickstart_theme' ),
        'search_items'        => __( 'Search for Example', 'quickstart_theme' ),
        'not_found'           => __( 'Nothing found', 'quickstart_theme' ),
		),
      'public' => true,
      'has_archive' => false,     
      'hierarchical' => false,
      'menu_position' => 4,
      'capability_type' => 'post',
      'menu_icon' => 'dashicons-universal-access',
      'supports' => array('title','editor'),
    )
  );
}
	
?>
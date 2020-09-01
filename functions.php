<?php 


get_header();
// here we setup the battle field;
include(get_template_directory() . '/inc/frontend/spartans-scripts.php');
include(get_template_directory() . '/inc/spartans-init.php');

// for MENUS        
add_action('after_setup_theme','spartans_menu');
function my_post(){
    register_post_type( 'saad',
     array(
     'labels' => array(
     'name'   => __( 'saad' ),
     'singular_name'   => __( 'saad' ),
     'add_new' => __( 'Add new saad' ),
     'add_new_item'  => __( 'Add new saad' ),
     'new_item' => __( 'New saad' ),
     'view_item' => __( 'View saad' ),
     'search_items' => __( 'Search saad Items' ),
     
     ),
     'public' => true,
		  'publicly_queryable' => true,
		  'show_ui' => true,
		  'query_var' => true,
		  'capability_type' => 'post',
		  'hierarchical' => false,
		  'menu_position' => null,
		  'supports' => array('title','editor','thumbnail','excerpt'),
		  'menu_position' => 53
      )
     );
    }
add_action( 'init', 'my_post' );
add_theme_support( 'post-thumbnails' );
?>
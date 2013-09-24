<?php

add_action( 'init', 'FFW_staff_custom_taxonomies' );
function FFW_staff_custom_taxonomies(){
	$labels = array(
		'name' => _x( 'Staff Categories', 'taxonomy general name' ),
		'singular_name' => _x( 'Staff Category', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Staff Categories' ),
		'all_items' => __( 'All Staff Categories' ),
		'parent_item' => __( 'Parent Staff Category' ),
		'parent_item_colon' => __( 'Parent Staff Category:' ),
		'edit_item' => __( 'Edit Staff Category' ), 
		'update_item' => __( 'Update Staff Category' ),
		'add_new_item' => __( 'Add New Staff Category' ),
		'new_item_name' => __( 'New Staff Category' ),
		'menu_name' => __( 'Staff Category' )
	); 	

	register_taxonomy(
		'campaign_categories', array('FFW_staff'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'staff-category' ),
	));
}
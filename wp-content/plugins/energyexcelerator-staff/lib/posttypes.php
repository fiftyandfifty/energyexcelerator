<?php

add_action( 'init', 'ee_staff_create_posttype' );
function ee_staff_create_posttype(){

	//@TODO: Make Labels and slug editable from the plugin settings. This way they can change from "Staff" to "Team" or "People"

	$labels = array(
	      'name'               => __( 'Staff', 'EE_STAFF' ),
	      'singular_name'      => __( 'Staff', 'EE_STAFF' ),
	      'add_new'            => __( 'Add New Staff', 'EE_STAFF' ),
	      'add_new_item'       => __( 'Add New Staff Member', 'EE_STAFF' ),
	      'edit_item'          => __( 'Edit Staff Member', 'EE_STAFF' ),
	      'new_item'           => __( 'Add New Staff Member', 'EE_STAFF' ),
	      'view_item'          => __( 'View Staff Member', 'EE_STAFF' ),
	      'search_items'       => __( 'Search Staff', 'EE_STAFF' ),
	      'not_found'          => __( 'No staff members found', 'EE_STAFF' ),
	      'not_found_in_trash' => __( 'No staff members found in trash', 'EE_STAFF' )
	    );
	    
	$args = array(
	    'labels'          => $labels,
	    'public'          => true,
	    'supports'        => array( 'title', 'editor', 'excerpt', 'revisions', 'author', 'thumbnail', 'custom-fields' ),
	    'capability_type' => 'post',
	    'rewrite'         => array("slug" => "staff"), // Permalinks format
	    'has_archive'     => true,
	    'hierarchical' => false
	); 

	    
	register_post_type( 'ee_staff', $args );

}

function ee_staff_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    ee_staff_create_posttype();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'ee_staff_rewrite_flush' );
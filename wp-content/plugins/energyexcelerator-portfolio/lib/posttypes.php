<?php

add_action( 'init', 'ee_port_create_posttype' );
function ee_port_create_posttype(){

	//@TODO: Make Labels and slug editable from the plugin settings. This way they can change from "Staff" to "Team" or "People"

	$labels = array(
	      'name'               => __( 'Portfolios', 'EE_PORT' ),
	      'singular_name'      => __( 'Portfolio', 'EE_PORT' ),
	      'add_new'            => __( 'Add New Portfolio', 'EE_PORT' ),
	      'add_new_item'       => __( 'Add New Portfolio Item', 'EE_PORT' ),
	      'edit_item'          => __( 'Edit Portfolio', 'EE_PORT' ),
	      'new_item'           => __( 'Add New Portfolio', 'EE_PORT' ),
	      'view_item'          => __( 'View Portfolio', 'EE_PORT' ),
	      'search_items'       => __( 'Search Portfolios', 'EE_PORT' ),
	      'not_found'          => __( 'No portfolios found', 'EE_PORT' ),
	      'not_found_in_trash' => __( 'No portfolios found in trash', 'EE_PORT' )
	    );
	    
	$args = array(
	    'labels'          => $labels,
	    'public'          => true,
	    'supports'        => array( 'title', 'editor', 'excerpt', 'revisions', 'author', 'thumbnail', 'custom-fields' ),
	    'capability_type' => 'post',
	    'rewrite'         => array("slug" => "portfolio"), // Permalinks format
	    'has_archive'     => true,
	    'hierarchical' => false
	); 

	    
	register_post_type( 'ee_portfolio', $args );

}

function ee_port_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    ee_port_create_posttype();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'ee_port_rewrite_flush' );
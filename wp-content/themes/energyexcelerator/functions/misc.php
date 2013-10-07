<?php 

/**
* Excerpt Functionality
* * * * * * * * * * * * */

add_action( 'init', 'ee_add_excerpts_to_pages' );
function ee_add_excerpts_to_pages() {
    
    add_post_type_support( 'page', 'excerpt' );

}

//Allow shortcodes to be used in excerpts
add_filter('the_excerpt', 'do_shortcode');
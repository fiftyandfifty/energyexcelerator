<?php 

add_action( 'init', 'ee_add_excerpts_to_pages' );
function ee_add_excerpts_to_pages() {
    
    add_post_type_support( 'page', 'excerpt' );

}

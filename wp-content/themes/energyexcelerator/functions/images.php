<?php

if( function_exists( 'add_theme_support' ) ){

	add_theme_support( 'post_thumbnails' );

	add_image_size( 'ffw-grid', 600, 428, true );
	add_image_size( 'staff_detail', 600, 428, true );

}
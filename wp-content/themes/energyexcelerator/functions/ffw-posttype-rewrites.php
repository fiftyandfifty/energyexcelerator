<?php

if( !defined('FFW_STAFF_SLUG') ){
	define( 'FFW_STAFF_SLUG', 'people' );
}

if ( ! defined( 'FFW_STAFF_DISABLE_ARCHIVE' ) ){
    define( 'FFW_STAFF_DISABLE_ARCHIVE', true );
}

if ( ! defined( 'FFW_PORTFOLIO_DISABLE_ARCHIVE' ) ){
    define( 'FFW_PORTFOLIO_DISABLE_ARCHIVE', true );
}

function ffw_staff_labels( $labels ) {
	$labels = array(
	   'singular' => __('Person', 'your-domain'),
	   'plural' => __('People', 'your-domain')
	);
	return $labels;
}
add_filter('ffw_staff_default_name', 'ffw_staff_labels');
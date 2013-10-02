<?php
define( 'FFW_STAFF_SLUG', 'people' );
defined( 'FFW_STAFF_DISABLE_ARCHIVE', false );

function ee_staff_labels( $labels ) {
	$labels = array(
	   'singular' => __('Person', 'your-domain'),
	   'plural' => __('People', 'your-domain')
	);
	return $labels;
}
add_filter('ffw_staff_default_name', 'ee_staff_labels');
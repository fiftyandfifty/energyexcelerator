<?php 

//Setup button shortcodes
function ffw_button_shortcodes( $atts, $content=null ){
	extract( shortcode_atts( array( 
			'class'	=>	'',
			'link'	=>	''
		), $atts ) );

	$ffw_button_url = '<a href="' . $link . '" class="btn ' . $class . '">' . $content . '</a>';

	return $ffw_button_url;
	
}
add_shortcode( 'button', 'ffw_button_shortcodes' );


function ffw_grid_shortcode( $atts, $content=null ){
	extract( shortcode_atts( array(
		'type'	=> ''
		), $atts ) );

	$ffw_grid = '<div class="' . $type . '">' . $content . '</div>';

	return $ffw_grid;
}
add_shortcode('grid', 'ffw_grid_shortcode');
<?php
/**
 * @package Fifty Reset
 */
/*
Plugin Name: Fifty Reset
Plugin URI: http://fiftyandfifty.org
Description: Reset all the stuff you don't really need. Adds some sevcurity measures. Clean out the dashboard crap.
Version: 1.0
Author: Bryan Monzon, Fifty & Fifty
Author URI: http://fiftyandfifty.org
License: GPLv2 or later
*/


//REMOVE WORDPRESS VERSION IN THE HEADER FROM <head>
remove_action('wp_head', 'wp_generator');

//REMOVE WINDOWS LIVE WRITER CRAP FROM <head>
remove_action('wp_head', 'wlwmanifest_link');

//REMOVE RSS FEED LINKS FROM <head>
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');

//CLEAN UP THE DASHBOARD AND REMOVES THE WORDPRESS STUFF.
function remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
} 
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

/* testing menu items */
add_action('admin_bar_menu', 'pippin_add_tool_bar_items', 100);
function pippin_add_tool_bar_items($admin_bar)
{
	$admin_bar->add_menu( array(
		'id'    => 'fifty-fifty-menu',
		'title' => 'Fifty & Fifty Support',
		'href'  => '#',
		'meta'  => array(
			'title' => __('Fifty & Fifty Support')
		),
	));

	$admin_bar->add_menu( array(
		'id'    => 'fifty-fifty-sub-menu-emaio',
		'parent' => 'fifty-fifty-menu',
		'title' => 'Email',
		'href'  => 'mailto:braden@fiftyandfifty.org',
		'meta'  => array(
			'title' => __('Email'),
			'target' => '_blank',
			'class' => 'email_menu_item_class'
		),
	));

	$admin_bar->add_menu( array(
		'id'    => 'fifty-fifty-sub-menu-basecamp',
		'parent' => 'fifty-fifty-menu',
		'title' => 'Basecamp',
		'href'  => 'https://basecamp.com/2029646/',
		'meta'  => array(
			'title' => __('Basecamp'),
			'target' => '_blank',
			'class' => 'basecamp_menu_item_class'
		),
	));
}




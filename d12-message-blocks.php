<?php
/*
Plugin Name: d12 Message Blocks
Plugin URI: http://kjodle.net/wordpress/d12-message-blocks/
Description: Adds shortcodes for message blocks.
Version: 1.0
Author: Kenneth John Odle
Author URI: http://kjodle.net/
License: GPL3
*/

/*
Icons courtesy of Fat Cow
http://www.fatcow.com/free-icons
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


/* Enqueue our front end style sheet */
function d12_shortcodes_styles() {
	wp_enqueue_style( 'd12mb-screenstyle', plugins_url( '/css/style.css', __FILE__, '1.0', 'screen' ) );
}
add_action( 'wp_enqueue_scripts', 'd12_shortcodes_styles' );

/* Enqueue our back end style sheet */
function d12_shortcodes_admin_styles() {
	wp_enqueue_style( 'd12mb-screenstyle', plugins_url( '/css/admin.css', __FILE__, '1.0', 'screen' ) );
}
add_action( 'admin_enqueue_scripts', 'd12_shortcodes_admin_styles' );


/*
* Functions for our shortcodes *
*/

/* Nutshell */
function d12_nutshell( $atts, $content= NULL) {
	return '<div class="d12-block d12-nutshell">
				<div class="d12-sc-text"><p><strong>This article in a nutshell:</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-nutshell' , 'd12_nutshell' );

/* Update */
function d12_update( $atts, $content= NULL) {
	return '<div class="d12-block d12-update">
				<div class="d12-sc-text"><p><strong>Update Information:</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-update' , 'd12_update' );

/* Attach */
function d12_attach( $atts, $content= NULL) {
	return '<div class="d12-block d12-attach">
				<div class="d12-sc-text"><p><strong>Downloads:</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-attach' , 'd12_attach' );

/* Delete */
function d12_delete( $atts, $content= NULL) {
	return '<div class="d12-block d12-delete">
				<div class="d12-sc-text"><p><strong>This page has been marked for deletion.</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-delete' , 'd12_delete' );

/* Part of a Series */
function d12_part( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'series' => '',
		), $atts )
	);
	return '<div class="d12-block d12-part">
				<div class="d12-sc-text"><p><strong>This page is part of a series on ' . $series .'.</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-part' , 'd12_part' );

/* Mentions */
function d12_mentions( $atts, $content= NULL) {
	return '<div class="d12-block d12-mention">
				<div class="d12-sc-text"><p><strong>This page has been mentioned here:</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-mentions' , 'd12_mentions' );

/* Warning */
function d12_warning( $atts, $content= NULL) {
	return '<div class="d12-block d12-warning">
				<div class="d12-sc-text"><p><strong>Warning!</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-warning' , 'd12_warning' );

/* Important */
function d12_important( $atts, $content= NULL) {
	return '<div class="d12-block d12-important">
				<div class="d12-sc-text"><p><strong>Important!</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-important' , 'd12_important' );

/* Notice */
function d12_notice( $atts, $content= NULL) {
	return '<div class="d12-block d12-notice">
				<div class="d12-sc-text"><p><strong>Notice!</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-notice' , 'd12_notice' );

/* Error */
function d12_error( $atts, $content= NULL) {
	return '<div class="d12-block d12-error">
				<div class="d12-sc-text"><p><strong>Error!</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-error' , 'd12_error' );

/* Caution */
function d12_caution( $atts, $content= NULL) {
	return '<div class="d12-block d12-caution">
				<div class="d12-sc-text"><p><strong>Caution!</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-caution' , 'd12_caution' );

/* Archive */
function d12_archive( $atts, $content= NULL) {
	return '<div class="d12-block d12-archive">
				<div class="d12-sc-text"><p><strong>This page has been archived.</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-archive' , 'd12_archive' );

/* Support */
function d12_support( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-support">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-support' , 'd12_support' );

/* Contact */
function d12_contact( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-contact">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-contact' , 'd12_contact' );

/* Global */
function d12_global( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-global">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-global' , 'd12_global' );

/* Green */
function d12_green( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-green">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-green' , 'd12_green' );

/* Accept */
function d12_accept( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-accept">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-accept' , 'd12_accept' );

/* Stats */
function d12_stats( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-stats">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-stats' , 'd12_stats' );


/*
* Register a function with TinyMCE
*/
add_action( 'init', 'd12mb_buttons' );
function d12mb_buttons() {
	if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
	{
		add_filter( "mce_external_plugins", "d12mb_add_buttons" );
		add_filter( 'mce_buttons_2', 'd12mb_register_buttons' );
	}
}
function d12mb_add_buttons( $plugin_array ) {
	$plugin_array['d12mb'] = plugins_url( 'js/d12mb.js', __FILE__ );
	return $plugin_array;
}
function d12mb_register_buttons( $buttons ) {
	array_push( $buttons, 'd12-mb-button', 'd12-mb-button-2' );
	return $buttons;
}

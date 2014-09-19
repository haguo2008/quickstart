<?php
/**
 * Media Manager helpers; hooks/functions for setting up the QuickStart media manager JavaScript and CSS.
 *
 * @package QuickStart
 * @subpackage MediaManager
 * @since 1.0.0
 */

/**
 * Enqueues the necessary JavaScript and CSS files for the media manager interfaces.
 *
 * @since 1.0.0
 *
 * @uses QuickStart\Tools::enqueue()
 */
function quickstart_enqueue_media_manager(){
	wp_enqueue_media();

	QuickStart\Tools::enqueue( array(
		'css' => array(
			'qs-media-css' => array( plugins_url( '/css/qs-media.css', QS_FILE ), array( 'media-views' ) )
		),
		'js' => array(
			'qs-media-js' => array( plugins_url( '/js/qs-media.js', QS_FILE ), array( 'underscore', 'media-editor' ) )
		)
	) );
}
add_action( 'admin_enqueue_scripts', 'quickstart_enqueue_media_manager' );
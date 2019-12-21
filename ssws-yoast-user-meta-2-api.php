<?php
/**
 * @package SSWS Yoast User Meta Information 2 WP REST API
 * @version 1.0.0
 */
/*
Plugin Name: SSWS Yoast User Meta Information 2 WP REST API
Plugin URI: https://github.com/giorgioriccardi/ssws-yoast-user-meta-2-api
Description: Add Yoast user social media meta information to the WP REST API
Author: Giorgio Riccardi
Version: 1.0.0
Author URI: https://www.seatoskywebsolutions.ca/
Require: Wordpress Seo plugin by Yoast
*/

/**
 * Enable custom endpoints for user social links
 *
 * WET approach versus DRY, this is not a programmatically correct execution,
 * but does the job cheap and dirty.
 *
 * Custom fields are provided by the Yoast SEO plugin
 */

 // Register Twitter endpoint
function twitter_add_user_data() {
	register_rest_field( 'user',
		'twitter', // for now let's just test Twitter
		array(
			'get_callback'  	=> 'rest_get_user_field',
			'update_callback'   => null,
			'schema'            => null,
		 )
	);
}
add_action( 'rest_api_init', 'twitter_add_user_data' );

// Output user Twitter field value
function rest_get_user_field( $user, $field_name, $request ) {
	return get_user_meta( $user[ 'id' ], $field_name, true );
}
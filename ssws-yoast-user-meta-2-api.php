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
 * Custom fields are provided by the Yoast SEO plugin
 */

// Social links listed from the Yoast plugin
// Requires a lot of WET repetition if we have to implemente each one of them
$social_profiles = [
    'facebook',
    'instagram',
    'linkedin',
    'pinterest',
    'twitter',
    'myspace',
    'youtube',
    'soundcloud',
    'tumblr',
    'wikipedia',
];

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

// Crapbook
function facebook_add_user_data() {
	register_rest_field( 'user',
		'facebook',
		array(
			'get_callback'  	=> 'rest_get_user_field',
			'update_callback'   => null,
			'schema'            => null,
		 )
	);
}
add_action( 'rest_api_init', 'facebook_add_user_data' );

// Linkedin
function linkedin_add_user_data() {
	register_rest_field( 'user',
		'linkedin',
		array(
			'get_callback'  	=> 'rest_get_user_field',
			'update_callback'   => null,
			'schema'            => null,
		 )
	);
}
add_action( 'rest_api_init', 'linkedin_add_user_data' );

function rest_get_user_field( $user, $field_name, $request ) {
	return get_user_meta( $user[ 'id' ], $field_name, true );
}

// Output user social media fields value
function rest_get_user_field( $user, $field_name, $request ) {
	return get_user_meta( $user[ 'id' ], $field_name, true );
}
<?php
/*
Plugin Name: BuddyPress Disable Public Message
Description: One line of code to disable 'public message' profile buttons in BuddyPress.
Version: 1.0
Author: Shay Seferstein <shay1383@gmail.com>
Author URI: https://shay.seferstein.com
Plugin URI:  https://github.com/shay1383/buddypress-disable-public-message
*/

// That is all.
add_filter('bp_get_send_public_message_button', '__return_false');
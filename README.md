BuddyPress Disable Public Message

One line of code to disable 'public message' profile buttons in BuddyPress

If you are familiar with functions.php I suggest to use the following line instead of using the plugin:

add_filter('bp_get_send_public_message_button', '__return_false');

If you are not familiar with functions.php, simply go to your WordPress Dashboard >> Plugins >> Add New >> Upload and then upload, install and activate the .zip file.

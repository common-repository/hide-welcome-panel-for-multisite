<?php
/*
 * Plugin Name: Hide Welcome Panel for Multisite
 * Plugin URI: http://nacin.com/tag/hide-welcome-panel-for-multisite/
 * Description: Prevent users from seeing the welcome panel (added in WordPress 3.3) on new sites in a network. Has no effect unless you are running multisite.
 * Author: Andrew Nacin
 * Author URI: http://nacin.com/
 * License: GPLv2 (or later)
 * Version: 1.0
 * Network: true
 */

if ( ! defined( 'ABSPATH' ) || ! is_multisite() )
	return;

add_action( 'load-index.php', 'nacin_hide_welcome_panel_for_multisite' );

/**
 * Hide the welcome panel for sites created after updating to WordPress 3.3.
 *
 * When a site is created, a flag is set for the new owner to show the welcome panel.
 * If they've already seen the welcome panel on any other site, the flag will not be
 * set. If they are the proud new owner of multiple sites, they will see the panel
 * on all of them, but once the panel is dismissed, it is dismissed from everywhere.
 *
 * If the owner is a super admin, the welcome panel will not be shown. For the purposes
 * of ownership, the site's admin email is compared against the user's admin email.
 *
 * Gory technical details: The state of the welcome panel is stored in a usermeta key that
 * is global to the network. The value of 0 means the welcome panel should not be shown
 * (and has been dismissed). The value of 1 means the welcome panel should be shown. (The
 * initial user for a single-site WordPress install is given this value.) The value of 2
 * is specific to multisite, and means that the panel should only be shown if the user is
 * the site owner.
 *
 * Once dismissed, the panel can be shown by visiting the Screen Options tab.
 */
function nacin_hide_welcome_panel_for_multisite() {
	$user_id = get_current_user_id();

	if ( 2 == get_user_meta( $user_id, 'show_welcome_panel', true ) )
		update_user_meta( $user_id, 'show_welcome_panel', 0 );
}

?>

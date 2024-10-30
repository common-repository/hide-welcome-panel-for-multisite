=== Hide Welcome Panel for Multisite ===
Contributors: nacin
Tags: multisite, welcome panel
Requires at least: 3.3
Tested up to: 3.4-alpha
Stable tag: 1.0

Prevent users from seeing the welcome panel (added in WordPress 3.3) on new sites in a network.

== Description ==

WordPress 3.3 introduced a new welcome panel designed to provide a better experience for new users installing WordPress for the first time. The panel would normally be shown to new owners of sites in a network, but this may not be desirable for all networks. This plugin dismisses the panel for new sites and users.

This plugin applies only to multisite, and must be network activated.

== Frequently Asked Questions ==

= When does the welcome panel normally show? =

The welcome panel shows for the initial user when WordPress is installed.

For multisite, the welcome panel shows for owners of new sites. WordPress uses the following rules:

1. On site creation, a flag is set for the user to show the welcome panel the next time they visit a site they own, as long as they've never seen the welcome panel before.
1. Once the user dismisses the panel on one site, it is dismissed on all sites they own, and they will not see it on new sites.
1. An owner is determined by comparing the site's admin email to the user's email.
1. The panel is still accessible via the Screen Options tab.

= Does this retroactively hide the welcome panel for sites created before the plugin was installed? =

Yes. It is assumed that if you're installing this plugin, you don't want any site owners to be presented with the welcome panel, regardless when the site was created.

== Installation ==

For an automatic installation through WordPress:

1. Go to the 'Add New' plugins screen in your WordPress network admin area
1. Search for 'Hide Welcome Panel for Multisite'
1. Click 'Install Now' and network activate the plugin

For a manual installation via FTP:

1. Upload the `hide-welcome-panel-for-multisite` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' screen in your WordPress network admin area

To upload the plugin through WordPress, instead of FTP:

1. Upload the downloaded zip file on the 'Add New' plugins screen (see the 'Upload' tab) in your WordPress network admin area and network activate.

== Changelog ==

= 1.0 =

Initial release.
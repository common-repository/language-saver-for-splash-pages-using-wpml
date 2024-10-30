=== Language saver for splash pages using WPML ===
Contributors: jorenvh
Tags: wpml, splashpage, remember language
Requires at least: Version 4.5
Tested up to: Version 4.8.2
Stable tag: Version 4.8.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Remember the users language on the splash page and redirect them to the remembered language of the user.

== Description ==

Using the wpml plugin for multi language Wordpress sites you can choose to have a custom file or Wordpress page
to be used for the root url, like a splash page for the main language selection. (Ex. http://www.yoursite.com).
The thing here is that every time a user enters your site using the root url they will see this page again.
You may only want to show this page when the user is new.

This is where this plugin comes in handy, we save the prefered language in a cookie and as long as this cookie is there
the user can enter the site using the root url, but he will always redirect to his language of choice from his previous visit.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

Note that this plugin will only get to work when you set the following url format settings in your wpml installation:

* Different Languages in directories (radio button)
* Use directory for default language (checkbox)
* What to show for the root url: has to be a html file or a Page.

Shout out to [These Days Labs](http://labs.thesedays.com "These Days Labs") for supporting this plugin.

== Changelog ==

= 1.1 =
* Fix redirectis for hidden languages

= 1.0 =
* Initial version
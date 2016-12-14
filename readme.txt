=== Bulglish Permalinks ===
Contributors: studioreforma
Donate link: http://talkingaboutthis.eu/
Tags: bulgarian, bulgarian permalink, cyrillic, slugs, transliteration 
Requires at least: 3.0.1
Tested up to: 4.7
Stable tag: 1.4.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin converts Bulgarian cyrillic characters in slugs and filenames to Latin characters, according to the official rules for transliteration. 

== Description ==

This plugin converts Bulgarian cyrillic characters in slugs and filenames to Latin characters, according to the official rules for transliteration. Cyrillic letters in URLs, while supported, are ugly and when copy/pasted around the internet are often encoded (converted to those ugly URLs looking like %DU^ED%…)

The plugin automatically converts slugs when a post is created or updated. It also automatically will convert cyrillic characters in filenames, upon media upload. The filename conversion can be disabled through wp-config.php

It will also work for Russian permalinks, as it matches all the letters in the Russian alphabet, although the user should have in mind that there are minor differences in the common transliterations rules in the two languages.

= Features =

* Automatically converts existing post, page and taxonomy slugs when you save them

== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= How do I stop transliteration of media uploads? =

Put the following in your wp-config.php file: 
define('CYR2LAT_FILENAMES',false);

== Screenshots ==


== Changelog ==

= 1.4.0 =
* File names transliteration now optional

= 1.3.0 =
* Now will auto convert filenames upon upload

= 1.2.0 =
* Works on front end saving of posts as well

= 1.1.0 =
* Added missing letters from Russian alphabet

= 1.0.0 =
* First release


== Upgrade Notice ==

= 1.4.0 =
File names transliteration now optional

= 1.3.0 =
Auto converts filenames upon upload

= 1.2.0 =
Will work on front-end saving of posts as well

= 1.1.0 =
Added Russian letters

= 1.0.0 =
First release


=== Bulglish Permalinks ===
Contributors: studioreforma, nravota12, kozzmen
Tags: bulgarian, bulgarian permalink, cyrillic, slugs, transliteration 
Requires at least: 4.0
Tested up to: 7.1
Requires PHP: 5.6
Stable tag: 1.5.1
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

= How do I change the transliteration rules? =

You can change the transliteration rules by using the `bulglish_permalinks_map` filter. 
For example, to transliterate "я" as "ia" instead of "ya", add the following code to your theme's functions.php file:

    function my_bulglish_permalinks_map( $map ) {
        $map['я'] = 'ia';
        $map['Я'] = 'ia';

        return $map;
    }
    add_filter( 'bulglish_permalinks_map', 'my_bulglish_permalinks_map' );

The filter receives the default transliteration map and must return
the modified map. Any rules you do not change retain their default
values.

= How do I stop transliteration of media uploads? =

Put the following in your wp-config.php file: 

	define('CYR2LAT_FILENAMES',false);

== Screenshots ==

== Changelog ==

= 1.5.1 =
* Allow users to easily update the transliteration map

= 1.5.0 =
* Project improvements:
* Optimized the translation map, so it is built only once per request.
* Replaced 30+ individual `preg_replace()` regex passes with a single, faster `strtr()` lookup
* Added `ABSPATH` direct-access safety guard
* Removed the trailing PHP close tag.
_ Tested the plugin with wp version 7.0

= 1.4.1 =
* WP5 supported

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

= 1.5.0 =
* Atanas Yonkov and Stefan Velev (WordCamp Sofia organizers) have been added as project contributors.
* The are committed to continue the maintenance and the support of this useful plugin.
<?php
/*
Plugin Name: Bulglish Permalinks
Plugin URI: https://github.com/yonkov/bulglish-permalinks
Description: This plugins transliterates cyrillic URL slugs to latin characters.
Author: Boyan Raichev
Version: 1.5.1
Author URI: http://talkingaboutthis.eu/
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Requires at least: 4.0
Requires PHP: 5.6
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function bulglish_permalinks_title( $text ) {

	if ( ! is_string( $text ) || '' === $text ) {
		return $text;
	}

	// The default transliteration map. To customize, use the 'bulglish_permalinks_map' filter.
	static $map = array(
		'ия' => 'ia',
		'Ия' => 'ia',
		'иЯ' => 'ia',
		'ИЯ' => 'ia',
		'а'  => 'a',
		'А'  => 'a',
		'б'  => 'b',
		'Б'  => 'b',
		'в'  => 'v',
		'В'  => 'v',
		'г'  => 'g',
		'Г'  => 'g',
		'д'  => 'd',
		'Д'  => 'd',
		'е'  => 'e',
		'Е'  => 'e',
		'ѐ'  => 'e',
		'Ѐ'  => 'e',
		'ё'  => 'ye',
		'Ё'  => 'ye',
		'ж'  => 'zh',
		'Ж'  => 'zh',
		'з'  => 'z',
		'З'  => 'z',
		'и'  => 'i',
		'И'  => 'i',
		'ѝ'  => 'i',
		'Ѝ'  => 'i',
		'й'  => 'y',
		'Й'  => 'y',
		'к'  => 'k',
		'К'  => 'k',
		'л'  => 'l',
		'Л'  => 'l',
		'м'  => 'm',
		'М'  => 'm',
		'н'  => 'n',
		'Н'  => 'n',
		'о'  => 'o',
		'О'  => 'o',
		'п'  => 'p',
		'П'  => 'p',
		'р'  => 'r',
		'Р'  => 'r',
		'с'  => 's',
		'С'  => 's',
		'т'  => 't',
		'Т'  => 't',
		'у'  => 'u',
		'У'  => 'u',
		'ф'  => 'f',
		'Ф'  => 'f',
		'х'  => 'h',
		'Х'  => 'h',
		'ц'  => 'ts',
		'Ц'  => 'ts',
		'ч'  => 'ch',
		'Ч'  => 'ch',
		'ш'  => 'sh',
		'Ш'  => 'sh',
		'щ'  => 'sht',
		'Щ'  => 'sht',
		'ъ'  => 'a',
		'Ъ'  => 'a',
		'ы'  => 'y',
		'Ы'  => 'y',
		'ь'  => 'y',
		'Ь'  => 'y',
		'э'  => 'e',
		'Э'  => 'e',
		'ю'  => 'yu',
		'Ю'  => 'yu',
		'я'  => 'ya',
		'Я'  => 'ya',
	);

	$map = apply_filters( 'bulglish_permalinks_map', $map );

	return strtr( $text, $map );
}
add_filter( 'sanitize_title', 'bulglish_permalinks_title', 1 );

// now also change filenames!
function bulglish_filenames( $file ) {
	if ( is_array( $file ) && isset( $file['name'] ) ) {
		$file['name'] = bulglish_permalinks_title( $file['name'] );
	}
	return $file;
}
if ( ! defined( 'CYR2LAT_FILENAMES' ) or CYR2LAT_FILENAMES == true ) {
	add_filter( 'wp_handle_upload_prefilter', 'bulglish_filenames' );
}

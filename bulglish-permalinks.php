<?php 
/*
Plugin Name: Bulglish permalinks
Plugin URI: http://talkingaboutthis.eu
Description: This plugins provides bulglish permalinks for cyrillic titles. Based on the work of Iacovos Constantinou
Author: Boyan Raichev 
Version: 1.1.0
Author URI: http://talkingaboutthis.eu/
*/

// Based on http://www.freestuff.gr/forums/viewtopic.php?p=194579#194579
function bulglish_permalinks_title($text) {
	if ( !is_admin() ) return $text;
	
	$expressions = array(
		'/[иИ][яЯ]/u' => 'ia',
		'/[аА]/u' => 'a',
		'/[бБ]/u' => 'b',
		'/[вВ]/u' => 'v',
		'/[гГ]/u' => 'g',
		'/[дД]/u' => 'd',
		'/[ѐеЕ]/u' => 'e',
		'/[ёЁ]/u' => 'ye',
		'/[жЖ]/u' => 'zh',
		'/[зЗ]/u' => 'z',
		'/[иИ]/u' => 'i',
		'/[ѝЍ]/u' => 'i',
		'/[йЙ]/u' => 'y',
		'/[кК]/u' => 'k',
		'/[лЛ]/u' => 'l',
		'/[мМ]/u' => 'm',
		'/[нН]/u' => 'n',
		'/[оО]/u' => 'o',
		'/[пП]/u' => 'p',
		'/[рР]/u' => 'r',
		'/[сС]/u' => 's',
		'/[тТ]/u' => 't',
		'/[уУ]/u' => 'u',
		'/[фФ]/u' => 'f',
		'/[хХ]/u' => 'h',
		'/[цЦ]/u' => 'ts',
		'/[чЧ]/u' => 'ch',
		'/[шШ]/u' => 'sh',
		'/[щЩ]/u' => 'sht',
		'/[ъЪ]/u' => 'a',
		'/[ыЫ]/u' => 'y',
		'/[ь]/u' => 'y',
		'/[эЭ]/u' => 'e',
		'/[юЮ]/u' => 'yu',
		'/[яЯ]/u' => 'ya'		
	);
	
	$text = preg_replace( array_keys($expressions), array_values($expressions), $text );
	return $text;
}
add_filter('sanitize_title', 'bulglish_permalinks_title', 1);
?>
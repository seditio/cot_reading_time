<?php
/**
* Reading_time Plugin
*
* @package reading_time
* @author Dmitri Beliavski
* @copyright (c) 2025 SED.by
*/

defined('COT_CODE') or die('Wrong URL');

function word_count($str) {
	return preg_match_all('/[\p{L}\p{N}]+/u', $str);
}

function word_count_all($array, $fields, $plain = true) {
	$fields = array_map('trim', explode(',', $fields));
	$total = 0;
	if ($plain === true) {
		foreach ($fields as $value) {
			$total += word_count($array[$value]);
		}
	} else {
		foreach ($fields as $value) {
			$total += word_count(strip_tags($array[$value]));
		}
	}
	return $total;
}

function sedby_reading_time($array, $mode = false) {
	$res1 = $res2 = 0;
	$plain = Cot::$cfg['plugin']['reading_time']['fields_plain'];
	$markup = Cot::$cfg['plugin']['reading_time']['fields_html'];
	$speed = Cot::$cfg['plugin']['reading_time']['wpm'];

	!empty($plain) && $res1 = word_count_all($array, $plain);
	!empty($markup) && $res2 = word_count_all($array, $markup, false);
	$res = ceil(($res1 + $res2) / $speed);

	if ($mode == 'dig') {
		$out = $res;
	} elseif ($mode == 'txt') {
		$out = cot_declension($res, 'Minutes', true);
	} else {
		$out = cot_declension($res, 'Minutes');
	}

	return $out;
}

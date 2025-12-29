<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=pagetags.main
[END_COT_EXT]
==================== */

/**
* Reading_time Plugin
*
* @package reading_time
* @author Dmitri Beliavski
* @copyright (c) 2025 SED.by
 */

defined('COT_CODE') or die('Wrong URL');
require_once cot_incfile('reading_time', 'plug');
require_once cot_langfile('reading_time', 'plug');

$temp_array['READING_TIME']     = sedby_reading_time($page_data);
$temp_array['READING_TIME_DIG'] = sedby_reading_time($page_data, 'dig');
$temp_array['READING_TIME_TXT'] = sedby_reading_time($page_data, 'txt');

// Metas length
$temp_array['LENGTH_META_TITLE']  = mb_strlen($page_data['page_metatitle']);
$temp_array['LENGTH_META_DESC']   = mb_strlen($page_data['page_metadesc']);

// Title, description & maintext length
$temp_array['LENGTH_TITLE'] = mb_strlen($page_data['page_title']);
$temp_array['LENGTH_DESCRIPTION']  = mb_strlen($page_data['page_desc']);
$temp_array['LENGTH_TEXT']  = mb_strlen(strip_tags($page_data['page_text']));

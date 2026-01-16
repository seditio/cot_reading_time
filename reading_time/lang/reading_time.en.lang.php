<?php
/**
* Reading_time Plugin
*
* @package reading_time
* @author Dmitri Beliavski
* @copyright (c) 2025 SED.by
 */

defined('COT_CODE') or die('Wrong URL');

/**
 * Plugin Info
 */

$L['info_name'] = '[SEDBY] Reading Time';
$L['info_desc'] = 'Calculate and display approximate page reading time';

/**
 * Plugin Config
 */

$L['cfg_fields_plain'] = 'List of fields & extrafields with plain text';
$L['cfg_fields_html'] = 'List of fields & extrafields with HTML markup';

$L['cfg_fields_plain_hint'] = $L['cfg_fields_html_hint'] = 'Empty to omit';

$L['cfg_wpm'] = 'Reading speed, words per minute';
$L['cfg_wpm_hint'] = '200 by default';
$L['cfg_extras'] = 'Create extra pagetags';
$L['cfg_extras_hint'] = 'Chars in page_metatitle, page_metadesc, page_title, page_desc and page_text';

/**
 * Plugin Body
 */

$L['rt_length_mt'] = 'Chars in Meta Title';
$L['rt_length_md'] = 'Chars in Meta Description';
$L['rt_length_pt'] = 'Chars in page title';
$L['rt_length_pd'] = 'Chars in page description';
$L['rt_length_pt'] = 'Chars in page text';

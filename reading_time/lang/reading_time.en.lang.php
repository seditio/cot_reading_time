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
$L['info_desc'] = 'Display approximate page reading time';

/**
 * Plugin Config
 */

$L['cfg_fields_plain'] = 'List of fields & extrafields with plain text';
$L['cfg_fields_plain_hint'] = 'Empty to omit';
$L['cfg_fields_html'] = 'List of fields & extrafields with HTML markup';
$L['cfg_fields_html_hint'] = 'Empty to omit';
$L['cfg_wpm'] = 'Reading speed, words per minute';
$L['cfg_wpm_hint'] = '200 by default';

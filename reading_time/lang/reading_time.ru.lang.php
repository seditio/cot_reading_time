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
$L['info_desc'] = 'Отображение примерного времени на прочтение страницы';

/**
 * Plugin Config
 */

$L['cfg_fields_plain'] = 'Список полей и экстраполей с текстом без разметки';
$L['cfg_fields_plain_hint'] = 'Очистить для пропуска';
$L['cfg_fields_html'] = 'Список полей и экстраполей с HTML-текстом';
$L['cfg_fields_html_hint'] = 'Очистить для пропуска';
$L['cfg_wpm'] = 'Скорость чтения, слов в минуту';
$L['cfg_wpm_hint'] = '200 по умолчанию';

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
$L['info_desc'] = 'Расчет и отображение примерного времени на прочтение страницы';

/**
 * Plugin Config
 */

$L['cfg_fields_plain'] = 'Список полей и экстраполей с текстом без разметки';
$L['cfg_fields_html'] = 'Список полей и экстраполей с HTML-разметкой';

$L['cfg_fields_plain_hint'] = $L['cfg_fields_html_hint'] = 'Очистить для пропуска';

$L['cfg_wpm'] = 'Скорость чтения, слов в минуту';
$L['cfg_wpm_hint'] = '200 по умолчанию';
$L['cfg_extras'] = 'Создавать дополнительные страничные теги';
$L['cfg_extras_hint'] = 'Количество символов в page_metatitle, page_metadesc, page_title, page_desc и page_text';

/**
 * Plugin Body
 */

$L['rt_length_mt'] = 'Символов в Meta Title';
$L['rt_length_md'] = 'Символов в Meta Description';
$L['rt_length_pt'] = 'Символов в заголовке страницы';
$L['rt_length_pd'] = 'Символов в описании страницы';
$L['rt_length_pt'] = 'Символов в тексте страницы';

<?php
/* ====================
[BEGIN_COT_EXT]
Code=reading_time
Name=Reading Time
Description=Displays post reading time
Version=1.00b
Date=2025-12-29
Category=navigation-structure
Author=Dmitri Beliavski
Copyright=&copy; 2025 SED.by
Notes=
Auth_guests=R
Lock_guests=12345AW
Auth_members=R
Lock_members=12345AW
[END_COT_EXT]
[BEGIN_COT_EXT_CONFIG]
fields_plain=01:string::page_title, page_desc:MySQL fields to count (plain text)
fields_html=02:string::page_text:MySQL fields to count (HTML)
wpm=03:string::200:Reading speed
[END_COT_EXT_CONFIG]
==================== */

/**
* Reading_time Plugin
*
* @package reading_time
* @author Dmitri Beliavski
* @copyright (c) 2025 SED.by
 */

defined('COT_CODE') or die('Wrong URL');

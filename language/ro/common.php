<?php
/**
*
* About us extension for the phpBB Forum Software package.
* Romanian
*
* @copyright (c) 2014-2020 Crizzo <https://www.crizzo.de>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ABOUTUS'						=> 'Despre noi',
	'ABOUTUS_SETTINGS'				=> 'Setări',
	'ABOUTUS_UPDATED'				=> 'Despre noi s-a actualizat cu succes.',
	'ABOUTUS_AND'					=> 'și',

	'ACP_ABOUTUS_ENABLE'			=> 'Activați Despre noi',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Dacă pagina „Despre noi” este dezactivată, panoul dvs. nu va afișa un link în footer către pagina „Despre noi”. Cu toate acestea, cu adresa URL „app.php/aboutus” puteți vizita pagina „Despre noi”.',
	'ACP_ABOUTUS_INFO'				=> 'Despre noi text',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Puteți edita textul care este afișat pe pagina „Despre noi”.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Previzualizare',
	'ACP_ABOUTUS_SETTINGS'			=> 'Despre noi',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Aici puteți defini textul paginii „Despre noi” și puteți activa sau dezactiva pagina.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Afișați termenii de utilizare',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Afișează un link către termenii de utilizare pe pagina „Despre noi”.',
	'ACP_PRIVACY_ENABLE' 				=> 'Afișați politica de confidențialitate',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Afișează un link către politica de confidențialitate pe pagina „Despre noi”.',

	'ACP_META_NOINDEX_ENABLE'			=> 'Meta noindex',
	'ACP_META_NOINDEX_ENABLE_EXPLAIN'	=> 'Spune roboților motoarelor de căutare că nu trebuie să indexeze pagina „Despre noi”. Oricum, această opțiune nu va împiedica roboții să indexeze pagina „Despre noi”!',

	'DESCRIPTION_PRIVACY'			=> 'Puteți vedea politica de confidențialitate aici:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Puteți vedea termenii de utilizare aici:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Puteți vedea termenii de utilizare și politica de confidențialitate aici:',

	'VIEWONLINE_ABOUTUS'	=> 'Vizualizare Despre noi',
));

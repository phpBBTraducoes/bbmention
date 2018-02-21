<?php
/**
*
* @package   BB@mention
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.6.0] (https://github.com/phpBBTraducoes)
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

$lang = array_merge($lang, array(
    'NOTIFICATION_BBMENTION'					=> '<strong>Mencionado</strong> por %1$s em:',
	'NOTIFICATION_TYPE_BBMENTION'				=> 'Alguém mencionou você (ou um grupo que você lidera) em um post',
));
?>
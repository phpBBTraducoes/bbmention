<?php
/**
*
* @package BBembed
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.6.0] (https://github.com/phpBBTraducoes)
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
	'ACP_BBMENTION'					=> 'BBmention',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore não existe!<br /> Baixe o <a href="http://sitesplat.com" target="_blank">BBcore</a> e copie a pasta BBcore na sua pasta de extensão de sitesplat.',
	'BBMENTION_NOTICE'	            => '<div class="phpinfo"><p>Não há configurações específicas para esta extensão. Use-o na página de postagem ou no formulário de resposta rápida, digitando um @ para obter a sugestão automática para mostrar e marcar os usuários.<br /> Você também pode marcar sem a sugestão automática e também marcar usuários fora da discussão do tópico.</p></div>',
));


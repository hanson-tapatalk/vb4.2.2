<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.2 Patch Level 6 - Licence Number VBF83FEF44
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2019 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
if (!VB_API) die;

loadCommonWhiteList();

$VB_API_WHITELIST = array(
	'response' => array(
		'HTML' => array(
			'emailselected', 'folderbits',
			'foruminfo' => $VB_API_WHITELIST_COMMON['foruminfo'],
			'id',
			'threadinfo' => $VB_API_WHITELIST_COMMON['threadinfo'],
			'type'
		)
	),
	'show' => array(
		'folders', 'subscribetothread'
	)
);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 05:03, Mon May 6th 2019
|| # CVS: $RCSfile$ - $Revision: 35584 $
|| ####################################################################
\*======================================================================*/
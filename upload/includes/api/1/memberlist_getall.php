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

$VB_API_WHITELIST = array(
	'response' => array(
		'customfieldsheader', 'first', 'last', 'leadergroup',
		'memberlistbits' => array(
			'*' => array(
				'userinfo' => array(
					'username', 'userid', 'usertitle',
					'icq', 'aim', 'yahoo', 'skype', 'msn', 'homepage',
					'datejoined', 'posts', 'lastvisittime',
					'reputationdisplay' => array(
						'posneg',
						'post' => array(
							'username', 'level'
						)
					),
					'profilepic', 'birthday', 'age'
				),
				'customfields', 'avatarurl',
				'show' => array(
					'searchlink', 'emaillink', 'homepagelink', 'pmlink', 'avatar',
					'hideleader'
				)
			)
		),
		'pagenav', 'perpage', 'searchtime', 'totalcols', 'totalusers',
		'usergroupid', 'oppositesort'
	),
	'show' => array(
		'homepagecol', 'searchcol', 'datejoinedcol', 'postscol', 'usertitlecol',
		'lastvisitcol', 'reputationcol', 'avatarcol', 'birthdaycol', 'agecol',
		'emailcol', 'customfields', 'imicons', 'profilepiccol', 'advancedlink',
		'usergroup', 'selectedletter', 'pagenav', 'prev', 'next', 'first',
		'last', 'pagelinks', 'curpage', 'hideleader'
	)
);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 05:03, Mon May 6th 2019
|| # CVS: $RCSfile$ - $Revision: 35584 $
|| ####################################################################
\*======================================================================*/
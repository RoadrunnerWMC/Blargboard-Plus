<?php
if (!defined('BLARG')) die();

	$settings = array(
		"boardname" => array (
			"type" => "text",
			"default" => "Blargboard Plus",
			"name" => "Board name",
			'category' => 'Board Info'
		),
		"metaDescription" => array (
			"type" => "text",
			"default" => "",
			"name" => "Meta description",
			'category' => 'Board Info'
		),
		"metaTags" => array (
			"type" => "text",
			"default" => "",
			"name" => "Meta keywords",
			'category' => 'Board Info'
		),
		"breadcrumbsMainName" => array (
			"type" => "text",
			"default" => "Main",
			"name" => "Text in breadcrumbs' first link",
			'category' => 'Board Info'
		),
		
		
		"bannersrc" => array (
			"type" => "text",
			"default" => "img/logo.png",
			"name" => "Banner image",
			"help" => "Leave blank to use the Header title.",
			'category' => 'Board Layout',
		),
		"headertitle" => array (
			"type" => "text",
			"default" => "",
			"name" => "Header title",
			'category' => 'Board Layout',
		),
		"subtitle" => array (
			"type" => "text",
			"default" => "",
			"name" => "Header subtitle",
			'category' => 'Board Layout',
		),
		'footertext' => array(
			'type' => 'text',
			'default' => '',
			'name' => 'Footer copyright',
			'category' => 'Board Layout',
		),
		
		
		"dateformat" => array (
			"type" => "text",
			"default" => "m-d-y, h:i a",
			"name" => "Date format",
			'category' => 'Board Display'
		),
		"guestLayouts" => array (
			"type" => "boolean",
			"default" => "0",
			"name" => "Show post layouts to guests",
			'category' => 'Board Display'
		),
		"defaultTheme" => array (
			"type" => "theme",
			"default" => "stone",
			"name" => "Default theme",
			'category' => 'Board Display'
		),
		"showGender" => array (
			"type" => "boolean",
			"default" => "1",
			"name" => "Color usernames based on gender",
			'category' => 'Board Display'
		),
		"tagsDirection" => array (
			"type" => "options",
			"options" => array('Left' => 'Left', 'Right' => 'Right'),
			"default" => 'Right',
			"name" => "Direction of thread tags",
			'category' => 'Board Display'
		),
		"profilePreviewText" => array (
			"type" => "textbbcode",
			"default" => "This is what your post will look like. It's amazing! :D",
			"name" => "Post preview text",
			'category' => 'Board Display'
		),
		
		
		"postLayoutType" => array (
			"type" => "options",
			"options" => array('0' => 'Signature', '1' => 'Post header + signature', '2' => 'Post header + signature + sidebars'),
			"default" => '2',
			"name" => "Post layout type",
			'category' => 'Board Options'
		),
		"postAttach" => array (
			"type" => "boolean",
			"default" => "0",
			"name" => "Allow post attachments",
			'category' => 'Board Options'
		),
		"customTitleThreshold" => array (
			"type" => "integer",
			"default" => "0",
			"name" => "Status threshold (posts)",
			'category' => 'Board Options'
		),
		"oldThreadThreshold" => array (
			"type" => "integer",
			"default" => "3",
			"name" => "Old thread threshold (months)",
			'category' => 'Board Options'
		),
		"viewcountInterval" => array (
			"type" => "integer",
			"default" => "10000",
			"name" => "Viewcount report interval",
			'category' => 'Board Options'
		),
		"ownerEmail" => array (
			"type" => "text",
			"default" => "",
			"name" => "Contact Email",
			'category' => 'Board Options'
		),
		"floodProtectionInterval" => array (
			"type" => "integer",
			"default" => "10",
			"name" => "Minimum time between user posts (seconds)",
			'category' => 'Board Options'
		),
		"nofollow" => array (
			"type" => "boolean",
			"default" => "0",
			"name" => "Add rel=nofollow to all user-posted links",
			'category' => 'Board Options'
		),
		"maintenance" => array (
			"type" => "boolean",
			"default" => "0",
			"name" => "Maintenance mode",
			"help" => "Makes the board unavailable to everyone but the root admin. Use with caution.",
			'category' => 'Board Options',
			'rootonly' => 1,
		),
		
		
		'anncForum' => array (
			'type' => 'forum',
			'default' => '0',
			'name' => 'Announcements forum',
			'category' => 'Forum Settings',
		),
		"trashForum" => array (
			"type" => "forum",
			"default" => "0",
			"name" => "Trash forum",
			'category' => 'Forum Settings',
		),
		"secretTrashForum" => array (
			"type" => "forum",
			"default" => "0",
			"name" => "Deleted threads forum",
			'category' => 'Forum Settings',
		),
		
		
		'defaultGroup' => array (
			'type' => 'group',
			'default' => 0,
			'name' => 'Group for new users',
			'category' => 'Group Settings',
			'rootonly' => 1,
		),
		'rootGroup' => array (
			'type' => 'group',
			'default' => 4,
			'name' => 'Group for root users',
			'category' => 'Group Settings',
			'rootonly' => 1,
		),
		'bannedGroup' => array (
			'type' => 'group',
			'default' => -1,
			'name' => 'Group for banned users',
			'category' => 'Group Settings',
			'rootonly' => 1,
		),
		
		
		'faqText' => array(
			'type' => 'texthtml',
			'default' => '',
			'name' => 'FAQ contents',
			'category' => 'FAQ contents',
		),
	);
?>
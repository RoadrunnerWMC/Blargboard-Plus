<?php

$starttime = microtime(true);
define('BLARG', 1);

// Change this to 'home' to enable the blog homepage rather than the board index.
define('MAIN_PAGE', 'board');

$ajaxPage = false;
if(isset($_GET['ajax']))
	$ajaxPage = true;

require(__DIR__.'/lib/common.php');

$layout_crumbs = '';
$layout_actionlinks = '';

if (isset($_GET['forcelayout']))
{
	setcookie('forcelayout', (int)$_GET['forcelayout'], time()+365*24*3600, URL_ROOT, "", false, true);
	die(header('Location: '.$_SERVER['HTTP_REFERER']));
}

$layout_birthdays = getBirthdaysText();

$tpl->assign('logusername', htmlspecialchars($loguser['displayname'] ?: $loguser['name']));
$tpl->assign('loguserlink', UserLink($loguser));

$metaStuff = array(
	'description' => Settings::get('metaDescription'),
	'tags' => Settings::get('metaTags')
);

if (isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = MAIN_PAGE;
if(!ctype_alnum($page))
	$page = MAIN_PAGE;

define('CURRENT_PAGE', $page);

ob_start();
$layout_crumbs = "";

$fakeerror = false;
if ($loguser['flags'] & 0x2)
{
	if (rand(0,100) <= 75)
	{
		Alert("Could not load requested page: failed to connect to the database. Try again later.", 'Error');
		$fakeerror = true;
	}
}

if (!$fakeerror)
{
	try 
	{
		try 
		{
			if(array_key_exists($page, $pluginpages))
			{
				$plugin = $pluginpages[$page];
				$self = $plugins[$plugin];
				
				$page = __DIR__.'/plugins/'.$self['dir']."/pages/".$page.".php";
				if(!file_exists($page))
					throw new Exception(404);
				include($page);
				unset($self);
			}
			else 
			{
				$page = __DIR__.'/pages/'.$page.'.php';
				if(!file_exists($page))
					throw new Exception(404);
				include($page);
			}
		}
		catch(Exception $e)
		{
			if ($e->getMessage() != 404)
			{
				throw $e;
			}
			require(__DIR__.'/pages/404.php');
		}
	}
	catch(KillException $e)
	{
		// Nothing. Just ignore this exception.
	}
}

if($ajaxPage)
{
	ob_end_flush();
	die();
}

$layout_contents = ob_get_contents();
ob_end_clean();

//Do these things only if it's not an ajax page.
include(__DIR__."/lib/views.php");
setLastActivity();

//=======================
// Panels and footer

require(__DIR__.'/layout/userpanel.php');
require(__DIR__.'/layout/menus.php');

//=======================
// Notification bars

$notifications = getNotifications();

//=======================
// Misc stuff

$layout_time = formatdatenow();
$layout_onlineusers = getOnlineUsersText();
$layout_birthdays = getBirthdaysText();
$layout_views = '<span id="viewCount">'.number_format($misc['views']).'</span> '.__('views');

$layout_title = htmlspecialchars(Settings::get('boardname'));
if($title != '')
	$layout_title .= ' &raquo; '.$title;

//=======================
// Board logo and theme

$layout_logopic = 'img/logo.png';
if (!file_exists(__DIR__.'/'.$layout_logopic))
	$layout_logopic = 'img/logo.jpg';
$layout_logopic = resourceLink($layout_logopic);

$favicon = resourceLink('img/favicon.ico');

$themefile = "themes/$theme/style.css";
if(!file_exists(__DIR__.'/'.$themefile))
	$themefile = "themes/$theme/style.php";

$layout_credits = '<a href="http://tierage.net/board">Powered by Blargboard Plus '.BLARG_VERSION.'</a>';

$layout_contents = "<div id=\"page_contents\">$layout_contents</div>";

//=======================
// Print everything!

$perfdata = 'Page rendered in '.sprintf('%.03f',microtime(true)-$starttime).' seconds (with '.$queries.' SQL queries and '.sprintf('%.03f',memory_get_usage() / 1024).'K of RAM)';

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		
		<title><?php print $layout_title; ?></title>
		
		<meta name="description" content="<?php print $metaStuff['description']; ?>">
		<meta name="keywords" content="<?php print $metaStuff['tags']; ?>">
		
		<link rel="shortcut icon" type="image/x-icon" href="<?php print $favicon;?>">
		<link rel="stylesheet" type="text/css" href="<?php print resourceLink("css/common.css");?>">
		<link rel="stylesheet" type="text/css" id="theme_css" href="<?php print resourceLink($themefile); ?>">
		<link rel="stylesheet" type="text/css" href="<?php print resourceLink('css/font-awesome.min.css'); ?>">

		<script type="text/javascript" src="<?php print resourceLink("js/jquery.js");?>"></script>
		<script type="text/javascript" src="<?php print resourceLink("js/tricks.js");?>"></script>
		<script type="text/javascript" src="<?php print resourceLink("js/jquery.tablednd_0_5.js");?>"></script>
		<script type="text/javascript" src="<?php print resourceLink("js/jquery.scrollTo-1.4.2-min.js");?>"></script>
		<script type="text/javascript" src="<?php print resourceLink("js/jscolor/jscolor.js");?>"></script>
		<script type="text/javascript">boardroot = <?php print json_encode(URL_ROOT); ?>;</script>

		<?php $bucket = "pageHeader"; include(__DIR__."/lib/pluginloader.php"); ?>
	</head>
	<body>
		<form action="<?php echo htmlentities(actionLink('login')); ?>" method="post" id="logout" style="display:none;"><input type="hidden" name="action" value="logout"></form>
		<?php 
			if (Settings::get('maintenance'))
				echo '<div id="lockdown">Notice: Maintenance mode is enabled. Only the owner can access the board.</div>';

			RenderTemplate('pagelayout', array(
				'layout_contents' => $layout_contents,
				'layout_crumbs' => $layout_crumbs,
				'layout_actionlinks' => $layout_actionlinks,
				'headerlinks' => $headerlinks,
				'sidelinks' => $sidelinks,
				'layout_userpanel' => $layout_userpanel,
				'notifications' => $notifications,
				'boardname' => Settings::get('boardname'),
				'footertext' => Settings::get('footertext'),
				'subtitle' => Settings::get('subtitle'),
				'layout_logopic' => $layout_logopic,
				'layout_time' => $layout_time,
				'layout_views' => $layout_views,
				'layout_onlineusers' => $layout_onlineusers,
				'layout_birthdays' => $layout_birthdays,
				'layout_credits' => $layout_credits,
				'layout_title' => Settings::get('headertitle'),
				'bannersrc' => Settings::get('bannersrc'))); 
		?>
	</body>
</html>
<?php

$bucket = "finish"; include(__DIR__.'/lib/pluginloader.php');

?>
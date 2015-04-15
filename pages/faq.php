<?php
if (!defined('BLARG')) die();

$title = __("FAQ");
$links = array();
if(HasPermission('admin.editsettings'))
	$links[] = actionLinkTag(__("Edit the FAQ"), "editsettings", '', 'field=faqText');

MakeCrumbs(array(actionLink("faq") => __("FAQ")), $links);

RenderTemplate('faq', array('faqcontents' => Settings::get('faqText')));

?>
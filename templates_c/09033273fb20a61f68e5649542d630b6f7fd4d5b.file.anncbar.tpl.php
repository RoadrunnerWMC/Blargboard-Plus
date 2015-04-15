<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 06:00:04
         compiled from "/home/tierage/tierage.net/board/templates/anncbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1220435648552dfe644c8285-46734640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09033273fb20a61f68e5649542d630b6f7fd4d5b' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/anncbar.tpl',
      1 => 1428917171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1220435648552dfe644c8285-46734640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'annc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552dfe645d69f2_51362198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552dfe645d69f2_51362198')) {function content_552dfe645d69f2_51362198($_smarty_tpl) {?>	<table class="outline margin anncbar">
		<tr class="header1">
			<th colspan="2">
				Announcement
			</th>
		</tr>
		<tr class="cell1">
			<td class="cell2 newMarker">
				<?php echo $_smarty_tpl->tpl_vars['annc']->value['new'];?>

			</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['annc']->value['poll'];?>
<?php echo $_smarty_tpl->tpl_vars['annc']->value['link'];?>
 &mdash; Posted by <?php echo $_smarty_tpl->tpl_vars['annc']->value['user'];?>
 on <?php echo $_smarty_tpl->tpl_vars['annc']->value['date'];?>

			</td>
		</tr>
	</table><?php }} ?>

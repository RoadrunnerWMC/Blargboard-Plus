<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 13:11:46
         compiled from "/home/tierage/tierage.net/board/templates/postbox_deleted.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1479903768552bc092852cf7-93104882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ae1f9829734e29e3e79a12bf1102a58df80827' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/postbox_deleted.tpl',
      1 => 1428917177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1479903768552bc092852cf7-93104882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552bc092b437c7_38934570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552bc092b437c7_38934570')) {function content_552bc092b437c7_38934570($_smarty_tpl) {?>	<table class="post margin deletedpost" id="post<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
		<tr>
			<td class="side userlink" id="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['post']->value['userlink'];?>

			</td>
			<td class="smallFonts meta right">
				<div style="float:left">
					Posted on <?php echo $_smarty_tpl->tpl_vars['post']->value['formattedDate'];?>
, deleted by <?php echo $_smarty_tpl->tpl_vars['post']->value['deluserlink'];?>
<?php if ($_smarty_tpl->tpl_vars['post']->value['delreason']) {?>: <?php echo $_smarty_tpl->tpl_vars['post']->value['delreason'];?>
<?php }?>
				</div>
				<ul class="pipemenu">
					<?php if ($_smarty_tpl->tpl_vars['post']->value['links']['undelete']) {?><li><?php echo $_smarty_tpl->tpl_vars['post']->value['links']['undelete'];?>
<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['links']['view']) {?><li><?php echo $_smarty_tpl->tpl_vars['post']->value['links']['view'];?>
<?php }?>
					<li>#<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>

					<?php if ($_smarty_tpl->tpl_vars['post']->value['ip']) {?><li><?php echo $_smarty_tpl->tpl_vars['post']->value['ip'];?>
<?php }?>
				</ul>
			</td>
		</tr>
	</table>
<?php }} ?>

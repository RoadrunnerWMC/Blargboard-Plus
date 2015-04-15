<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 05:52:32
         compiled from "/home/tierage/tierage.net/board/templates/form_editpost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1014618375552dfca001e2d1-04861148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a5484e4c65451e91764f1143db178529d9f098' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/form_editpost.tpl',
      1 => 1428917172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1014618375552dfca001e2d1-04861148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552dfca012ddb5_90628063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552dfca012ddb5_90628063')) {function content_552dfca012ddb5_90628063($_smarty_tpl) {?>	<table class="outline margin form form_editpost">
		<tr class="header1">
			<th colspan=2>Edit post</th>
		</tr>
		<tr class="cell0">
			<td class="cell2 center" style="width: 20%;">
				Post
			</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['text'];?>

			</td>
		</tr>
		<tr class="cell2">
			<td></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnPost'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnPreview'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['mood'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['nopl'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['nosm'];?>

			</td>
		</tr>
	</table>
<?php }} ?>

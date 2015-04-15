<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:29:00
         compiled from "/home/tierage/tierage.net/board/templates/form_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:903888583552b8c5ce2c006-79829948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15ba00ece117f3d01423db70e385300c6bcfa91a' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/form_login.tpl',
      1 => 1428917173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '903888583552b8c5ce2c006-79829948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b8c5d070912_51199003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8c5d070912_51199003')) {function content_552b8c5d070912_51199003($_smarty_tpl) {?>	<table class="outline margin form form_login">
		<tr class="header1">
			<th colspan=2>
				Log in
			</th>
		</tr>
		<tr>
			<td class="cell2 center" style="width:20%;">
				User name
			</td>
			<td class="cell0">
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['username'];?>

			</td>
		</tr>
		<tr>
			<td class="cell2 center">
				Password
			</td>
			<td class="cell1">
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['password'];?>

			</td>
		</tr>
		<tr>
			<td class="cell2"></td>
			<td class="cell1">
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['session'];?>

			</td>
		</tr>
		<tr class="cell2">
			<td></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnLogin'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnForgotPass'];?>

			</td>
		</tr>
	</table>
<?php }} ?>

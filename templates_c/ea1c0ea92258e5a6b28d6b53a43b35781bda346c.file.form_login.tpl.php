<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 13:57:45
         compiled from "C:\xampp\htdocs\templates\form_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25328552e6e59a364b0-63189382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea1c0ea92258e5a6b28d6b53a43b35781bda346c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\form_login.tpl',
      1 => 1429078041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25328552e6e59a364b0-63189382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552e6e59a64068_80428281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e6e59a64068_80428281')) {function content_552e6e59a64068_80428281($_smarty_tpl) {?>	<table class="outline margin form form_login">
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

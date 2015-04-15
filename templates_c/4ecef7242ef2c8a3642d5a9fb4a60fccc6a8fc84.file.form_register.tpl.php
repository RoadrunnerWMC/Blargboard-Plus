<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 13:08:25
         compiled from "/home/tierage/tierage.net/board/templates/form_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:500903877552bbfc9381630-93695968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ecef7242ef2c8a3642d5a9fb4a60fccc6a8fc84' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/form_register.tpl',
      1 => 1428917174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '500903877552bbfc9381630-93695968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552bbfc9696115_64525937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552bbfc9696115_64525937')) {function content_552bbfc9696115_64525937($_smarty_tpl) {?>	<table class="outline margin form form_register">
		<tr class="header1">
			<th colspan=2>Register</th>
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
 | Confirm: <?php echo $_smarty_tpl->tpl_vars['fields']->value['password2'];?>

			</td>
		</tr>
		<tr>
			<td class="cell2 center">
				Email address
			</td>
			<td class="cell0">
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['email'];?>

			</td>
		</tr>
		<tr>
			<td class="cell2 center">
				Gender
			</td>
			<td class="cell1">
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['sex'];?>

			</td>
		</tr>
		<tr>
			<td class="cell2"></td>
			<td class="cell0">
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['readfaq'];?>

			</td>
		</tr>
		<tr>
			<td class="cell2 center">
				How many Goombas are there?
			</td>
			<td class="cell1">
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['kurichallenge'];?>

			</td>
		</tr>
		<tr class="cell2">
			<td></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnRegister'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['autologin'];?>

			</td>
		</tr>
		<tr>
			<td colspan="2" class="cell0 smallFonts">
				Specifying an email address is not a requirement, but it will allow you to reset your password should you forget it. By default, your email is made private.
			</td>
		</tr>
	</table>
<?php }} ?>

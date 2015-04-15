<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 13:58:04
         compiled from "C:\xampp\htdocs\templates\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23439552e6e6cf20494-89943300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdf97665edde617eb00644b4d2195d1a01fc981e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\dashboard.tpl',
      1 => 1429078043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23439552e6e6cf20494-89943300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminConfig' => 0,
    'link' => 0,
    'adminTools' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552e6e6d010bc0_11701595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e6e6d010bc0_11701595')) {function content_552e6e6d010bc0_11701595($_smarty_tpl) {?>	<table class="outline margin">
		<tr class="header1">
			<th>
				Board Configuration
			</th>
		</tr>
		<tr class="cell0">
			<td style="text-align:center;padding:5px;">
				<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adminConfig']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['link']->value;?>

				<?php } ?>
			</td>
		</tr>
	</table>
	<table class="outline margin">
		<tr class="header1">
			<th>
				Admin Utilities
			</th>
		</tr>
		<tr class="cell0">
			<td style="text-align:center;padding:5px;">
				<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adminTools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['link']->value;?>

				<?php } ?>
			</td>
		</tr>
	</table><?php }} ?>

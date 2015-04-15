<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 05:43:42
         compiled from "/home/tierage/tierage.net/board/templates/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1335852307552b8c6c26e702-19812233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6a6259af3f7fdec5c2a9264d3df53ad4f72ba60' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/dashboard.tpl',
      1 => 1429076620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1335852307552b8c6c26e702-19812233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b8c6c33d243_69065443',
  'variables' => 
  array (
    'adminConfig' => 0,
    'link' => 0,
    'adminTools' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8c6c33d243_69065443')) {function content_552b8c6c33d243_69065443($_smarty_tpl) {?>	<table class="outline margin">
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

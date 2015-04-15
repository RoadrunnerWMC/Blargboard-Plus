<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 13:08:13
         compiled from "/home/tierage/tierage.net/board/templates/form_memberlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:574764240552bbfbd36b182-32565125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4d32de80d753c21f4ee0f9fa5030b3e5185587c' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/form_memberlist.tpl',
      1 => 1428917173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '574764240552bbfbd36b182-32565125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552bbfbd5a5d52_90117835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552bbfbd5a5d52_90117835')) {function content_552bbfbd5a5d52_90117835($_smarty_tpl) {?>	<table class="outline margin form form_memberlist">
		<tr class="header1">
			<th colspan=2>Search options</th>
		</tr>
		<tr class="cell0">
			<td class="cell2 center" style="width:20%;">
				Sort by
			</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['sortBy'];?>

			</td>
		</tr>
		<tr class="cell1">
			<td class="cell2 center">
				Order
			</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['order'];?>

			</td>
		</tr>
		<tr class="cell0">
			<td class="cell2 center">
				Group
			</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['group'];?>

			</td>
		</tr>
		<tr class="cell1">
			<td class="cell2 center">
				Find in name
			</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['name'];?>

			</td>
		</tr>
		<tr class="cell2">
			<td></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnSearch'];?>

			</td>
		</tr>
	</table>
<?php }} ?>

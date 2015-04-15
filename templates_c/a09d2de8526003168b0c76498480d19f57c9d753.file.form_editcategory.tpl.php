<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 00:30:41
         compiled from "/home/tierage/tierage.net/board/templates/form_editcategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1278686856552db131240291-38280494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09d2de8526003168b0c76498480d19f57c9d753' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/form_editcategory.tpl',
      1 => 1428917172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1278686856552db131240291-38280494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formtitle' => 0,
    'fields' => 0,
    'delMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552db131361c91_01899229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552db131361c91_01899229')) {function content_552db131361c91_01899229($_smarty_tpl) {?>	<table class="outline margin form form_editcategory">
		<tr class="header1">
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['formtitle']->value;?>
</th>
		</tr>
		<tr class="cell1">
			<td class="cell2 center" style="width: 20%;">Name</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['name'];?>

			</td>
		</tr>
		<tr class="cell0">
			<td class="cell2 center">Priority</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['order'];?>
<br>
				<small>Categories are sorted by their priority value, and then by their ID.</small>
			</td>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['board']) {?>
		<tr class="cell1">
			<td class="cell2 center">Board</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['board'];?>

			</td>
		</tr>
		<?php }?>
		<tr class="cell2">
			<td></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnSave'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnDelete'];?>

				<span id="status"></span>
				<br>
				<small><?php echo $_smarty_tpl->tpl_vars['delMessage']->value;?>
</small>
			</td>
		</tr>
	</table>
<?php }} ?>

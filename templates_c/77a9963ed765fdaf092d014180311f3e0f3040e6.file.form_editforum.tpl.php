<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:53:17
         compiled from "/home/tierage/tierage.net/board/templates/form_editforum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:858027033552b920d7d2ec6-83457079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77a9963ed765fdaf092d014180311f3e0f3040e6' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/form_editforum.tpl',
      1 => 1428917172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '858027033552b920d7d2ec6-83457079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formtitle' => 0,
    'fields' => 0,
    'groups' => 0,
    'group' => 0,
    'delMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b920d9a2434_34157364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b920d9a2434_34157364')) {function content_552b920d9a2434_34157364($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/tierage/tierage.net/board/lib/smarty/plugins/function.cycle.php';
?>	<table class="outline margin form form_editforum">
		<tr class="header1">
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['formtitle']->value;?>
</th>
		</tr>
		<tr class="cell1">
			<td class="cell2 center" style="width: 20%;">Title</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>

			</td>
		</tr>
		<tr class="cell0">
			<td class="cell2 center">Description</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['description'];?>
<br>
				<small>HTML allowed.</small>
			</td>
		</tr>
		<tr class="cell1">
			<td class="cell2 center">Parent</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['parent'];?>

			</td>
		</tr>
		<tr class="cell0">
			<td class="cell2 center">Priority</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['order'];?>
<br>
				<small>Forums are sorted by their priority value, and then by their ID.</small>
			</td>
		</tr>
		<tr class="cell1">
			<td class="cell2 center">Redirect</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['redirect'];?>
<br>
				<small>Enter an URL to make a redirect forum leading to that URL. Leave blank for no redirect.</small>
			</td>
		</tr>
		<tr class="cell0">
			<td class="cell2 center"></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['hidden'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['offtopic'];?>

			</td>
		</tr>
		
		<tr class="header0"><th colspan=2>Permissions</th></tr>
		
		<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
		<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
			<td class="cell2 center">
				<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>

			</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['group']->value['permFields'];?>

			</td>
		</tr>
		<?php } ?>
		
		<tr class="header0"><th colspan=2>&nbsp;</th></tr>
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

<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 05:52:21
         compiled from "/home/tierage/tierage.net/board/templates/form_editthread.tpl" */ ?>
<?php /*%%SmartyHeaderCode:464777768552dfc95264388-09327441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b2ef34437ad54c3972a113f62c404e06e673639' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/form_editthread.tpl',
      1 => 1428917173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '464777768552dfc95264388-09327441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'canRename' => 0,
    'fields' => 0,
    'canClose' => 0,
    'canStick' => 0,
    'canMove' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552dfc9539c9a4_49557550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552dfc9539c9a4_49557550')) {function content_552dfc9539c9a4_49557550($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/tierage/tierage.net/board/lib/smarty/plugins/function.cycle.php';
?>	<table class="outline margin form form_editthread">
		<tr class="header1">
			<th colspan=2>Edit thread</th>
		</tr>
		
		<?php if ($_smarty_tpl->tpl_vars['canRename']->value) {?>
		<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
			<td class="cell2 center" style="width: 20%;">
				Title
			</td>
			<td id="threadTitleContainer">
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>

			</td>
		</tr>
		<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
			<td class="cell2 center">
				Icon
			</td>
			<td class="threadIcons">
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['icon'];?>

			</td>
		</tr>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['canClose']->value) {?>
		<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
			<td class="cell2"></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['closed'];?>

			</td>
		</tr>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['canStick']->value) {?>
		<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
			<td class="cell2"></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['sticky'];?>

			</td>
		</tr>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['canMove']->value) {?>
		<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
			<td class="cell2 center">
				Forum
			</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['forum'];?>

			</td>
		</tr>
		<?php }?>
		
		<tr class="cell2">
			<td></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnEditThread'];?>

			</td>
		</tr>
		
	</table>
<?php }} ?>

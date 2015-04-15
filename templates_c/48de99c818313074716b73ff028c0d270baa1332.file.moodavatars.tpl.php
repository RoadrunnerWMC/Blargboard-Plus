<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 00:15:38
         compiled from "/home/tierage/tierage.net/board/templates/moodavatars.tpl" */ ?>
<?php /*%%SmartyHeaderCode:374083972552dadaad900f9-77093421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48de99c818313074716b73ff028c0d270baa1332' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/moodavatars.tpl',
      1 => 1428917176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '374083972552dadaad900f9-77093421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avatars' => 0,
    'avatar' => 0,
    'newField' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552dadaaea2f48_26048469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552dadaaea2f48_26048469')) {function content_552dadaaea2f48_26048469($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/tierage/tierage.net/board/lib/smarty/plugins/function.cycle.php';
?>	<table class="outline margin form moodavatars">
		<tr class="header1">
			<th colspan=2>Mood avatars</th>
		</tr>
		
		<?php  $_smarty_tpl->tpl_vars['avatar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['avatar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avatars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['avatar']->key => $_smarty_tpl->tpl_vars['avatar']->value) {
$_smarty_tpl->tpl_vars['avatar']->_loop = true;
?>
		<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
			<td class="cell2 center" style="width:200px; height:200px;">
				<?php echo $_smarty_tpl->tpl_vars['avatar']->value['avatar'];?>

			</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['avatar']->value['field'];?>

			</td>
		</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['avatar']->_loop) {
?>
		<tr class="cell1">
			<td colspan=2>No avatars</td>
		</tr>
		<?php } ?>
		
		<tr class="header1">
			<th colspan=2>Add new</th>
		</tr>
		<tr class="cell2">
			<td></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['newField']->value;?>

			</td>
		</tr>
		
	</table>
<?php }} ?>

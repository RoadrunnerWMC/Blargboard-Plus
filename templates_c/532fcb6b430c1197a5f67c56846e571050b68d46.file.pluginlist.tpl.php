<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 10:04:06
         compiled from "/home/tierage/tierage.net/board/templates/pluginlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1396531049552b9496674bd1-63009884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532fcb6b430c1197a5f67c56846e571050b68d46' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/pluginlist.tpl',
      1 => 1428917176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1396531049552b9496674bd1-63009884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enabledPlugins' => 0,
    'plugin' => 0,
    'disabledPlugins' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b94967c5de9_17177161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b94967c5de9_17177161')) {function content_552b94967c5de9_17177161($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/tierage/tierage.net/board/lib/smarty/plugins/function.cycle.php';
?>	<table class="outline margin form pluginlist">
		<tr class="header1">
			<th colspan=2>Enabled plugins</th>
		</tr>
		
		<?php if (count($_smarty_tpl->tpl_vars['enabledPlugins']->value)>0) {?>
		
		<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enabledPlugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
		<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
			<td>
				<strong><?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
</strong> <?php if ($_smarty_tpl->tpl_vars['plugin']->value['author']) {?>(by <?php echo $_smarty_tpl->tpl_vars['plugin']->value['author'];?>
)<?php }?><br>
				<span class="smallFonts"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</span>
			</td>
			<td class="cell2">
				<?php echo $_smarty_tpl->tpl_vars['plugin']->value['actions'];?>

			</td>
		</tr>
		<?php } ?>
		
		<?php } else { ?>
		<tr class="cell2">
			<td colspan=2>No plugins enabled.</td>
		</tr>
		<?php }?>
		
		<tr class="header1">
			<th colspan=2>Disabled plugins</th>
		</tr>
		
		<?php if (count($_smarty_tpl->tpl_vars['disabledPlugins']->value)>0) {?>
		
		<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['disabledPlugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
		<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
			<td>
				<strong><?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
</strong> <?php if ($_smarty_tpl->tpl_vars['plugin']->value['author']) {?>(by <?php echo $_smarty_tpl->tpl_vars['plugin']->value['author'];?>
)<?php }?><br>
				<span class="smallFonts"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</span>
			</td>
			<td class="cell2">
				<?php echo $_smarty_tpl->tpl_vars['plugin']->value['actions'];?>

			</td>
		</tr>
		<?php } ?>
		
		<?php } else { ?>
		<tr class="cell2">
			<td colspan=2>No plugins disabled.</td>
		</tr>
		<?php }?>
	</table><?php }} ?>

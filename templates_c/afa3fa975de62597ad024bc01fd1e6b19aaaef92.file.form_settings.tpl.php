<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:29:17
         compiled from "/home/tierage/tierage.net/board/templates/form_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:351126048552b8c6d71ccd1-32893321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afa3fa975de62597ad024bc01fd1e6b19aaaef92' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/form_settings.tpl',
      1 => 1428917174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '351126048552b8c6d71ccd1-32893321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settingfields' => 0,
    'htmlfield' => 0,
    'cat' => 0,
    'settings' => 0,
    'setting' => 0,
    'fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b8c6d852763_57265219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8c6d852763_57265219')) {function content_552b8c6d852763_57265219($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/tierage/tierage.net/board/lib/smarty/plugins/function.cycle.php';
?>	<table class="outline margin form form_settings">
	<?php  $_smarty_tpl->tpl_vars['settings'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['settings']->_loop = false;
 $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settingfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['settings']->key => $_smarty_tpl->tpl_vars['settings']->value) {
$_smarty_tpl->tpl_vars['settings']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->value = $_smarty_tpl->tpl_vars['settings']->key;
?>
		<tr class="header1">
			<th<?php if (!$_smarty_tpl->tpl_vars['htmlfield']->value) {?> colspan=2<?php }?>>
				<?php if ($_smarty_tpl->tpl_vars['cat']->value) {?><?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
<?php } else { ?>Settings<?php }?>
			</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['setting'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setting']->key => $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->_loop = true;
?>
		
			<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
			
			<?php if ($_smarty_tpl->tpl_vars['htmlfield']->value) {?>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['setting']->value['field'];?>

				</td>
			<?php } else { ?>
				<td class="cell2 center" style="width: 20%;">
					<?php echo $_smarty_tpl->tpl_vars['setting']->value['name'];?>

				</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['setting']->value['field'];?>

				</td>
			<?php }?>
			
			</tr>
			
		<?php } ?>
	<?php } ?>
	
		<tr class="header0">
			<th<?php if (!$_smarty_tpl->tpl_vars['htmlfield']->value) {?> colspan=2<?php }?>>&nbsp;</th>
		</tr>
		<tr class="cell2">
			<?php if (!$_smarty_tpl->tpl_vars['htmlfield']->value) {?><td></td><?php }?>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnSaveExit'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnSave'];?>

			</td>
		</tr>
	
	</table><?php }} ?>

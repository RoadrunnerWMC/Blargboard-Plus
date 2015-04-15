<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 10:01:01
         compiled from "/home/tierage/tierage.net/board/templates/form_quickreply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139555911552b93dd704397-27345772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '284699d702298f2eeec4527c54b472701c5371fb' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/form_quickreply.tpl',
      1 => 1428917174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139555911552b93dd704397-27345772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b93dd75efe2_38405824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b93dd75efe2_38405824')) {function content_552b93dd75efe2_38405824($_smarty_tpl) {?>	<table class="outline margin form form_quickreply" id="quickreply">
		<tr class="header1">
			<th>Quick reply</th>
		</tr>
		<tr class="cell0">
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['text'];?>

			</td>
		</tr>
		<tr class="cell2">
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnPost'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnPreview'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['mood'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['nopl'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['nosm'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['lock'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['stick'];?>

			</td>
		</tr>
	</table>
<?php }} ?>

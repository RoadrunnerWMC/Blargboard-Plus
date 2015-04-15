<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:29:15
         compiled from "/home/tierage/tierage.net/board/templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:509293760552b8c6b3a9827-81867335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93eebcd9f7275941c7a7101c5bc42d1d09691129' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/profile.tpl',
      1 => 1428917177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '509293760552b8c6b3a9827-81867335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profileParts' => 0,
    'fields' => 0,
    'name' => 0,
    'label' => 0,
    'val' => 0,
    'pagelinks' => 0,
    'comments' => 0,
    'cmt' => 0,
    'commentField' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b8c6b5246b6_02001117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8c6b5246b6_02001117')) {function content_552b8c6b5246b6_02001117($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/tierage/tierage.net/board/lib/smarty/plugins/function.cycle.php';
?>
			<?php  $_smarty_tpl->tpl_vars['fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fields']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profileParts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fields']->key => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['fields']->key;
?>
				<table class="outline margin profiletable">
					
					<?php if (is_array($_smarty_tpl->tpl_vars['fields']->value)) {?>
					
					<tr class="header1">
						<th colspan=2><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['label']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
						<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
							<td class="cell2 center" style="width:20%;">
								<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['val']->value;?>

							</td>
						</tr>
					<?php } ?>
					
					<?php } else { ?>
						
					<tr class="header1">
						<th><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</th>
					</tr>
					<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
						<td>
							<?php echo $_smarty_tpl->tpl_vars['fields']->value;?>

						</td>
					</tr>
					
					<?php }?>
					
				</table>
			<?php } ?>
				<table class="outline margin usercomments">
					<tr class="header1">
						<th colspan=2>Comments</th>
					</tr>
					
					<?php if ($_smarty_tpl->tpl_vars['pagelinks']->value) {?>
					<tr class="cell1">
						<td colspan=2>
							<?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>

						</td>
					</tr>
					<?php }?>
					
					<?php  $_smarty_tpl->tpl_vars['cmt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmt']->key => $_smarty_tpl->tpl_vars['cmt']->value) {
$_smarty_tpl->tpl_vars['cmt']->_loop = true;
?>
					<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
						<td class="cell2" style="vertical-align:top; width:20%;">
							<?php echo $_smarty_tpl->tpl_vars['cmt']->value['userlink'];?>
<br>
							<small><?php echo $_smarty_tpl->tpl_vars['cmt']->value['formattedDate'];?>
</small>
						</td>
						<td style="vertical-align:top;">
							<?php if ($_smarty_tpl->tpl_vars['cmt']->value['deleteLink']) {?><small style="float: right; margin: 0px 4px;"><?php echo $_smarty_tpl->tpl_vars['cmt']->value['deleteLink'];?>
</small><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['cmt']->value['text'];?>

						</td>
					</tr>	
					<?php }
if (!$_smarty_tpl->tpl_vars['cmt']->_loop) {
?>
					<tr class="cell1">
						<td colspan=2>
							No comments.
						</td>
					</tr>
					<?php } ?>
					
					<?php if ($_smarty_tpl->tpl_vars['commentField']->value) {?>
					<tr class="cell2">
						<td colspan=2>
							<?php echo $_smarty_tpl->tpl_vars['commentField']->value;?>

						</td>
					</tr>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['pagelinks']->value) {?>
					<tr class="cell1">
						<td colspan=2>
							<?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>

						</td>
					</tr>
					<?php }?>
	</table>
<?php }} ?>

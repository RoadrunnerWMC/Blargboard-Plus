<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:53:15
         compiled from "/home/tierage/tierage.net/board/templates/editfora_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:983647318552b920b505f11-74718334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a026d91361adf715b90e8a5da10ee43534207607' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/editfora_list.tpl',
      1 => 1428917171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '983647318552b920b505f11-74718334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btnNewForum' => 0,
    'btnNewCategory' => 0,
    'boards' => 0,
    'board' => 0,
    'bid' => 0,
    'cats' => 0,
    'cid' => 0,
    'cat' => 0,
    'forums' => 0,
    'forum' => 0,
    'fpadding' => 0,
    'fid' => 0,
    'selectedForum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b920b6ab2b3_00030613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b920b6ab2b3_00030613')) {function content_552b920b6ab2b3_00030613($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/tierage/tierage.net/board/lib/smarty/plugins/function.cycle.php';
?>
	<table class="outline margin editfora_list" style="width:49.7%;">
		<tbody>
		<tr class="header1">
			<th>Edit forum list</th>
		</tr>
		<tr class="cell2">
			<td>
				<span style="float:right;">
					<?php echo $_smarty_tpl->tpl_vars['btnNewForum']->value;?>

					<?php echo $_smarty_tpl->tpl_vars['btnNewCategory']->value;?>

				</span>
			</td>
		</tr>
		</tbody>
		
		<?php  $_smarty_tpl->tpl_vars['board'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['board']->_loop = false;
 $_smarty_tpl->tpl_vars['bid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['boards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['board']->key => $_smarty_tpl->tpl_vars['board']->value) {
$_smarty_tpl->tpl_vars['board']->_loop = true;
 $_smarty_tpl->tpl_vars['bid']->value = $_smarty_tpl->tpl_vars['board']->key;
?>
		<tr class="header0"><th><?php echo $_smarty_tpl->tpl_vars['board']->value['name'];?>
</th></tr>
			
			<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cats']->value[$_smarty_tpl->tpl_vars['bid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cid']->value = $_smarty_tpl->tpl_vars['cat']->key;
?>
			<tbody id="cat<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" class="c">
				<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
					<td class="c" style="cursor: pointer;" onmousedown="pickCategory(<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
);">
						<strong><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</strong>
					</td>
				</tr>
				
				<?php  $_smarty_tpl->tpl_vars['forum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['forum']->_loop = false;
 $_smarty_tpl->tpl_vars['fid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['forums']->value[$_smarty_tpl->tpl_vars['cid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['forum']->key => $_smarty_tpl->tpl_vars['forum']->value) {
$_smarty_tpl->tpl_vars['forum']->_loop = true;
 $_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['forum']->key;
?>
				
				<?php $_smarty_tpl->tpl_vars['fpadding'] = new Smarty_variable(24*$_smarty_tpl->tpl_vars['forum']->value['level'], null, 0);?>
				<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
					<td style="cursor: pointer; padding-left: <?php echo $_smarty_tpl->tpl_vars['fpadding']->value;?>
px;<?php if ($_smarty_tpl->tpl_vars['fid']->value==$_smarty_tpl->tpl_vars['selectedForum']->value) {?> outline: 1px solid #888;<?php }?>" class="f" onmousedown="pickForum(<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
);" id="forum<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
">
						<?php echo $_smarty_tpl->tpl_vars['forum']->value['title'];?>
<br>
						<small style="opacity: 0.75;"><?php echo $_smarty_tpl->tpl_vars['forum']->value['description'];?>
</small>
					</td>
				</tr>
				
				<?php }
if (!$_smarty_tpl->tpl_vars['forum']->_loop) {
?>
				<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
					<td style="padding-left: 24px;" class="f">
						<span style="opacity:0.75;">(no forums in this category)</span>
					</td>
				</tr>
				<?php } ?>
				
			</tbody>
			<?php } ?>
			
		<?php } ?>
		
		<tbody>
		<tr class="header1"><th style="height:5px;"></th></tr>
		<tr class="cell2">
			<td>
				<span style="float:right;">
					<?php echo $_smarty_tpl->tpl_vars['btnNewForum']->value;?>

					<?php echo $_smarty_tpl->tpl_vars['btnNewCategory']->value;?>

				</span>
			</td>
		</tr>
		</tbody>
	</table>
<?php }} ?>

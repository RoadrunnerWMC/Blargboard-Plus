<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 13:08:13
         compiled from "/home/tierage/tierage.net/board/templates/memberlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:524779735552bbfbd5fd984-87035662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9567809d16fd16807af2e322e2e8685706d82aa6' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/memberlist.tpl',
      1 => 1428917175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '524779735552bbfbd5fd984-87035662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagelinks' => 0,
    'numUsers' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552bbfbd758286_52285043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552bbfbd758286_52285043')) {function content_552bbfbd758286_52285043($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/tierage/tierage.net/board/lib/smarty/plugins/function.cycle.php';
?>	<?php if ($_smarty_tpl->tpl_vars['pagelinks']->value) {?><div class="smallFonts pages">Pages: <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>
</div><?php }?>
	
	<table class="outline margin memberlist">
		<tr class="header1">
			<th style="width:30px;">#</th>
			<th>Avatar</th>
			<th>Name</th>
			<th style="width:75px;">Posts</th>
			<th style="width:75px;">Average</th>
			<th style="width:100px;">Birthday</th>
			<th style="width:150px;">Registered on</th>
		</tr>
		<tr class="cell2">
			<td colspan=7>Search results &mdash; <?php echo smarty_function_plural(array('num'=>$_smarty_tpl->tpl_vars['numUsers']->value,'what'=>'user'),$_smarty_tpl);?>
 found</td>
		</tr>
		
		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
		<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
			<td class="cell2 center"><?php echo $_smarty_tpl->tpl_vars['user']->value['num'];?>
</td>
			<td class="center" style="width:60px; height:60px;"><?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value['link'];?>
</td>
			<td class="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['posts'];?>
</td>
			<td class="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['average'];?>
</td>
			<td class="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['birthday'];?>
</td>
			<td class="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['regdate'];?>
</td>
		</tr>
		<?php } ?>
		
	</table>
	
	<?php if ($_smarty_tpl->tpl_vars['pagelinks']->value) {?><div class="smallFonts pages">Pages: <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>
</div><?php }?>
<?php }} ?>

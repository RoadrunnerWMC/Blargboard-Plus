<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 05:52:32
         compiled from "/home/tierage/tierage.net/board/templates/threadreview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1127981108552dfca01a3166-37461451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b80c219343bb015e40f55310d1cd2f76afdc593d' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/threadreview.tpl',
      1 => 1428917178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1127981108552dfca01a3166-37461451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'review' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552dfca0205b13_25249573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552dfca0205b13_25249573')) {function content_552dfca0205b13_25249573($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/tierage/tierage.net/board/lib/smarty/plugins/function.cycle.php';
?>	<table class="outline margin threadreview">
		<tr class="header1">
			<th colspan=2>Thread review</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['review']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
		<tr>
			<td class="cell2 side">
				<?php echo $_smarty_tpl->tpl_vars['post']->value['userlink'];?>
<br>
				<span class="smallFonts">Posts: <?php echo $_smarty_tpl->tpl_vars['post']->value['posts'];?>
</span>
			</td>
			<td class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
 post">
				<button style="float:right;" onclick="insertQuote(<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
);">Quote</button>
				<?php echo $_smarty_tpl->tpl_vars['post']->value['contents'];?>

			</td>
		</tr>
		<?php } ?>
	</table>
<?php }} ?>

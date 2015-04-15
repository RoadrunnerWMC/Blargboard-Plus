<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:29:09
         compiled from "/home/tierage/tierage.net/board/templates/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:928799155552b8c657831a4-47824546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0157976eb27da741621d1c3d1a4e3bced05a473' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/homepage.tpl',
      1 => 1428917175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928799155552b8c657831a4-47824546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homepage' => 0,
    'lastactivity' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b8c65856626_88761450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8c65856626_88761450')) {function content_552b8c65856626_88761450($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/tierage/tierage.net/board/lib/smarty/plugins/function.cycle.php';
?>	<table class="layout-table">
		<tr>
			<td style="width: 65%; vertical-align: top; padding-right: 0.5em;">
				<table class="outline margin homepage">
					<tr class="header1">
						<th>Home</th>
					</tr>
					<tr class="cell1">
						<td style="padding:5px;">
							<?php echo $_smarty_tpl->tpl_vars['homepage']->value;?>

						</td>
					</tr>
				</table>
			</td>
			<td style="width: 35%; vertical-align: top; padding-left: 0.5em;">
				<table class="outline margin lastactivity">
					<tr class="header1">
						<th>Latest Posts</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lastactivity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
						<td style="padding:5px;">
							<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
<br>
							<span class="smallFonts"><?php echo $_smarty_tpl->tpl_vars['item']->value['formattedDate'];?>
</span>
						</td>
					</tr>
					<?php } ?>
				</table>
			</td>
		</tr>
	</table>
<?php }} ?>

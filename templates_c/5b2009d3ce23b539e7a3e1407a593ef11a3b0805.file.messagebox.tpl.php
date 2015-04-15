<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:30:32
         compiled from "/home/tierage/tierage.net/board/templates/messagebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1475799008552b8cb855e803-30891750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b2009d3ce23b539e7a3e1407a593ef11a3b0805' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/messagebox.tpl',
      1 => 1428917175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1475799008552b8cb855e803-30891750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgtitle' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b8cb85fb107_90205462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8cb85fb107_90205462')) {function content_552b8cb85fb107_90205462($_smarty_tpl) {?>	<table class="outline margin message">
		<tr class="header1"><th><?php echo $_smarty_tpl->tpl_vars['msgtitle']->value;?>
</th></tr>
		<tr class="cell0">
			<td>
				<br>
				<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<br>
				<br>
			</td>
		</tr>
	</table>
<?php }} ?>

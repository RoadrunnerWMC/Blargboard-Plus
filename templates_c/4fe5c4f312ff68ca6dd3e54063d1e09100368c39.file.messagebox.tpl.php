<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 13:58:12
         compiled from "C:\xampp\htdocs\templates\messagebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10789552e6e741a6c45-12208207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fe5c4f312ff68ca6dd3e54063d1e09100368c39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\messagebox.tpl',
      1 => 1429078037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10789552e6e741a6c45-12208207',
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
  'unifunc' => 'content_552e6e741cee22_79364434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e6e741cee22_79364434')) {function content_552e6e741cee22_79364434($_smarty_tpl) {?>	<table class="outline margin message">
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

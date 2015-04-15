<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 10:04:14
         compiled from "/home/tierage/tierage.net/board/templates/lastposts_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1069920538552b949e00da25-39600653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7709bd07d4371e1a4875a29c28dc0af4d4445470' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/lastposts_options.tpl',
      1 => 1428917175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1069920538552b949e00da25-39600653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'timelinks' => 0,
    'link' => 0,
    'misclinks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b949e0ce6d0_81083883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b949e0ce6d0_81083883')) {function content_552b949e0ce6d0_81083883($_smarty_tpl) {?>	<div class="smallFonts margin">
		Show posts from within:
		<ul class="pipemenu">
		<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['timelinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['link']->value;?>

		<?php } ?>
		</ul>
		&mdash; 
		<ul class="pipemenu">
		<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['misclinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['link']->value;?>

		<?php } ?>
		</ul>
	</div>
<?php }} ?>

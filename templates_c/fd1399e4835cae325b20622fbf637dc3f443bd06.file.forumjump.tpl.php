<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:54:33
         compiled from "/home/tierage/tierage.net/board/templates/forumjump.tpl" */ ?>
<?php /*%%SmartyHeaderCode:684810772552b9259ac62a2-82947308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd1399e4835cae325b20622fbf637dc3f443bd06' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/forumjump.tpl',
      1 => 1428917174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '684810772552b9259ac62a2-82947308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'forumlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b9259b7cf68_76359347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b9259b7cf68_76359347')) {function content_552b9259b7cf68_76359347($_smarty_tpl) {?>	<div class="forumjump">
		Go to forum: <?php echo $_smarty_tpl->tpl_vars['forumlist']->value;?>

	</div>
<?php }} ?>

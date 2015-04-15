<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 10:01:01
         compiled from "/home/tierage/tierage.net/board/templates/pagelinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1569264712552b93dd49e687-35798643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dda04fdc38667571d06672db268f028129497238' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/pagelinks.tpl',
      1 => 1428917176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1569264712552b93dd49e687-35798643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagelinks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b93dd6511c4_76863403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b93dd6511c4_76863403')) {function content_552b93dd6511c4_76863403($_smarty_tpl) {?>	<?php if ($_smarty_tpl->tpl_vars['pagelinks']->value) {?>
	<div class="smallFonts pages">
		Pages: <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>

	</div>
	<?php }?>
<?php }} ?>

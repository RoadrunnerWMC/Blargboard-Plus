<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 13:54:37
         compiled from "C:\xampp\htdocs\templates\forumlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18820552e6d9da62bc6-30258544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ac25f30bd21562290c473c68537e62b714af13e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\forumlist.tpl',
      1 => 1429078038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18820552e6d9da62bc6-30258544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'cat' => 0,
    'forum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552e6d9dab60a3_90149378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e6d9dab60a3_90149378')) {function content_552e6d9dab60a3_90149378($_smarty_tpl) {?>	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
	<table class="outline margin forumlist">
		<tr class="header1">
			<th>&nbsp;</th>
			<th><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</th>
			<th style="width: 75px;">Threads</th>
			<th style="width: 50px;">Posts</th>
			<th style="min-width:150px; width:15%;">Last post</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['forum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['forum']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['forum']->key => $_smarty_tpl->tpl_vars['forum']->value) {
$_smarty_tpl->tpl_vars['forum']->_loop = true;
?>
		<tr class="cell1">
			<td class="cell2 newMarker"><?php echo $_smarty_tpl->tpl_vars['forum']->value['new'];?>
</td>
			<td>
				<h4<?php if ($_smarty_tpl->tpl_vars['forum']->value['ignored']) {?> class="ignored"<?php }?>><?php echo $_smarty_tpl->tpl_vars['forum']->value['link'];?>
</h4>
				<span class="smallFonts<?php if ($_smarty_tpl->tpl_vars['forum']->value['ignored']) {?> ignored<?php }?>">
					<?php echo $_smarty_tpl->tpl_vars['forum']->value['description'];?>

					<?php if ($_smarty_tpl->tpl_vars['forum']->value['localmods']) {?><br>Moderated by: <?php echo $_smarty_tpl->tpl_vars['forum']->value['localmods'];?>
<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['forum']->value['subforums']) {?><br>Subforums: <?php echo $_smarty_tpl->tpl_vars['forum']->value['subforums'];?>
<?php }?>
				</span>
			</td>
			<td class="center cell2"><span<?php if ($_smarty_tpl->tpl_vars['forum']->value['ignored']) {?> class="ignored"<?php }?>><?php echo $_smarty_tpl->tpl_vars['forum']->value['threads'];?>
</span></td>
			<td class="center cell2"><span<?php if ($_smarty_tpl->tpl_vars['forum']->value['ignored']) {?> class="ignored"<?php }?>><?php echo $_smarty_tpl->tpl_vars['forum']->value['posts'];?>
</span></td>
			<td class="center smallFonts">
				<span<?php if ($_smarty_tpl->tpl_vars['forum']->value['ignored']) {?> class="ignored"<?php }?>>
				<?php if ($_smarty_tpl->tpl_vars['forum']->value['lastpostdate']) {?>
					<?php echo $_smarty_tpl->tpl_vars['forum']->value['lastpostdate'];?>
<br>
					by <?php echo $_smarty_tpl->tpl_vars['forum']->value['lastpostuser'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['forum']->value['lastpostlink'];?>
">&raquo;</a>
				<?php } else { ?>
					&mdash;
				<?php }?>
				</span>
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php } ?>
<?php }} ?>

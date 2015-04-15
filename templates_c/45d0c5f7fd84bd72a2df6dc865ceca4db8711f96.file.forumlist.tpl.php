<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:51:53
         compiled from "/home/tierage/tierage.net/board/templates/forumlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1823503519552b91b9313fd9-79692106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45d0c5f7fd84bd72a2df6dc865ceca4db8711f96' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/forumlist.tpl',
      1 => 1428917175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1823503519552b91b9313fd9-79692106',
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
  'unifunc' => 'content_552b91b941cc04_70754018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b91b941cc04_70754018')) {function content_552b91b941cc04_70754018($_smarty_tpl) {?>	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
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

<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 10:04:14
         compiled from "/home/tierage/tierage.net/board/templates/threadlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:562847552b949e0ead29-71959290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d45d9be513b293adc22468eab7579a046018337' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/threadlist.tpl',
      1 => 1428917177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '562847552b949e0ead29-71959290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagelinks' => 0,
    'showforum' => 0,
    'threads' => 0,
    'dostickies' => 0,
    'laststicky' => 0,
    'thread' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b949e20f206_59969729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b949e20f206_59969729')) {function content_552b949e20f206_59969729($_smarty_tpl) {?>	<?php if ($_smarty_tpl->tpl_vars['pagelinks']->value) {?><div class="smallFonts pages">Pages: <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>
</div><?php }?>
	
	<table class="outline margin threadlist">
		<tr class="header1">
			<th>&nbsp;</th>
			<th style="width:16px;">&nbsp;</th>
			<th style="width:60%;">Title</th>
			<?php if ($_smarty_tpl->tpl_vars['showforum']->value) {?><th>Forum</th><?php }?>
			<th>Started by</th>
			<th>Replies</th>
			<th>Views</th>
			<th style="min-width:150px; width:15%;">Last post</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['thread']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
 $_smarty_tpl->tpl_vars['thread']->index++;
 $_smarty_tpl->tpl_vars['thread']->first = $_smarty_tpl->tpl_vars['thread']->index === 0;
?>
		<?php if ($_smarty_tpl->tpl_vars['dostickies']->value&&!$_smarty_tpl->tpl_vars['thread']->first&&$_smarty_tpl->tpl_vars['laststicky']->value!=$_smarty_tpl->tpl_vars['thread']->value['sticky']) {?>
		<tr class="header0"><th colspan=<?php if ($_smarty_tpl->tpl_vars['showforum']->value) {?>8<?php } else { ?>7<?php }?> style="height:5px;"></th></tr>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['laststicky'] = new Smarty_variable($_smarty_tpl->tpl_vars['thread']->value['sticky'], null, 0);?>
		<tr class="cell<?php if ($_smarty_tpl->tpl_vars['dostickies']->value&&$_smarty_tpl->tpl_vars['thread']->value['sticky']) {?>2<?php } elseif ((1 & $_smarty_tpl->tpl_vars['thread']->index)) {?>1<?php } else { ?>0<?php }?>">
			<td class="cell2 newMarker"><?php echo $_smarty_tpl->tpl_vars['thread']->value['new'];?>
</td>
			<td class="threadIcon" style="border-right:0px none;"><?php echo $_smarty_tpl->tpl_vars['thread']->value['icon'];?>
</td>
			<td style="border-left:0px none;">
				<?php echo $_smarty_tpl->tpl_vars['thread']->value['gotonew'];?>

				<?php echo $_smarty_tpl->tpl_vars['thread']->value['poll'];?>

				<?php echo $_smarty_tpl->tpl_vars['thread']->value['link'];?>

				<?php if ($_smarty_tpl->tpl_vars['thread']->value['pagelinks']) {?> <small>[<?php echo $_smarty_tpl->tpl_vars['thread']->value['pagelinks'];?>
]</small><?php }?>
			</td>
			<?php if ($_smarty_tpl->tpl_vars['showforum']->value) {?><td class="center"><?php echo $_smarty_tpl->tpl_vars['thread']->value['forumlink'];?>
</td><?php }?>
			<td class="center"><?php echo $_smarty_tpl->tpl_vars['thread']->value['startuser'];?>
</td>
			<td class="center"><?php echo $_smarty_tpl->tpl_vars['thread']->value['replies'];?>
</td>
			<td class="center"><?php echo $_smarty_tpl->tpl_vars['thread']->value['views'];?>
</td>
			<td class="center smallFonts">
				<?php echo $_smarty_tpl->tpl_vars['thread']->value['lastpostdate'];?>
<br>
				by <?php echo $_smarty_tpl->tpl_vars['thread']->value['lastpostuser'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['thread']->value['lastpostlink'];?>
">&raquo;</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	
	<?php if ($_smarty_tpl->tpl_vars['pagelinks']->value) {?><div class="smallFonts pages">Pages: <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>
</div><?php }?>
<?php }} ?>

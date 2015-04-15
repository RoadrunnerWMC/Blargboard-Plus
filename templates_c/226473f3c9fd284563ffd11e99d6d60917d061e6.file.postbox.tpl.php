<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:29:15
         compiled from "/home/tierage/tierage.net/board/templates/postbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:663855781552b8c6b550d09-67880158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '226473f3c9fd284563ffd11e99d6d60917d061e6' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/postbox.tpl',
      1 => 1428917177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '663855781552b8c6b550d09-67880158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'link' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b8c6b7f3ae2_71451818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8c6b7f3ae2_71451818')) {function content_552b8c6b7f3ae2_71451818($_smarty_tpl) {?>	<table class="<?php if ($_smarty_tpl->tpl_vars['post']->value['fulllayout']) {?>custompost table<?php echo $_smarty_tpl->tpl_vars['post']->value['u_id'];?>
<?php } else { ?>post<?php }?> margin" id="post<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
		<tr>
			<td class="side userlink<?php if ($_smarty_tpl->tpl_vars['post']->value['fulllayout']) {?> topbar<?php echo $_smarty_tpl->tpl_vars['post']->value['u_id'];?>
_1<?php }?>">
				<?php echo $_smarty_tpl->tpl_vars['post']->value['userlink'];?>

			</td>
			<td class="meta right<?php if ($_smarty_tpl->tpl_vars['post']->value['fulllayout']) {?> topbar<?php echo $_smarty_tpl->tpl_vars['post']->value['u_id'];?>
_2<?php }?>">
				<div style="float: left;" id="meta_<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['post']->value['type']==@constant('POST_SAMPLE')) {?>
					Preview
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['type']==@constant('POST_PM')) {?>Sent<?php } else { ?>Posted<?php }?> on <?php echo $_smarty_tpl->tpl_vars['post']->value['formattedDate'];?>

					<?php if ($_smarty_tpl->tpl_vars['post']->value['threadlink']) {?> in <?php echo $_smarty_tpl->tpl_vars['post']->value['threadlink'];?>
<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['revdetail']) {?> (<?php echo $_smarty_tpl->tpl_vars['post']->value['revdetail'];?>
)<?php }?>
				<?php }?>
				</div>
				<div style="float: left; text-align:left; display: none;" id="dyna_<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
					blarg
				</div>
				<ul class="pipemenu">
				<?php if ($_smarty_tpl->tpl_vars['post']->value['type']==@constant('POST_NORMAL')) {?>
					<li><a href="<?php echo smarty_function_actionLink(array('page'=>'post','id'=>$_smarty_tpl->tpl_vars['post']->value['id']),$_smarty_tpl);?>
">Link</a>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['links']['quote']) {?><li><?php echo $_smarty_tpl->tpl_vars['post']->value['links']['quote'];?>
<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['links']['edit']) {?><li><?php echo $_smarty_tpl->tpl_vars['post']->value['links']['edit'];?>
<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['links']['delete']) {?><li><?php echo $_smarty_tpl->tpl_vars['post']->value['links']['delete'];?>
<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['links']['report']) {?><li><?php echo $_smarty_tpl->tpl_vars['post']->value['links']['report'];?>
<?php }?>
					<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['links']['extra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['link']->value;?>

					<?php } ?>
				<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['type']==@constant('POST_DELETED_SNOOP')) {?>
					<li>Post deleted
					<?php if ($_smarty_tpl->tpl_vars['post']->value['links']['undelete']) {?><li><?php echo $_smarty_tpl->tpl_vars['post']->value['links']['undelete'];?>
<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['links']['close']) {?><li><?php echo $_smarty_tpl->tpl_vars['post']->value['links']['close'];?>
<?php }?>
				<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['id']) {?><li>#<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['ip']) {?><li><?php echo $_smarty_tpl->tpl_vars['post']->value['ip'];?>
<?php }?>
				</ul>
			</td>
		</tr>
		<tr>
			<td class="side<?php if ($_smarty_tpl->tpl_vars['post']->value['fulllayout']) {?> sidebar<?php echo $_smarty_tpl->tpl_vars['post']->value['u_id'];?>
<?php }?>">
				<div class="smallFonts">
					<?php echo $_smarty_tpl->tpl_vars['post']->value['sidebar']['title'];?>
<br>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['sidebar']['syndrome']) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['sidebar']['syndrome'];?>
<br><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['sidebar']['avatar']) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['sidebar']['avatar'];?>
<br><?php }?>
					<br>
					Posts: <?php echo $_smarty_tpl->tpl_vars['post']->value['sidebar']['posts'];?>
<br>
					Since: <?php echo $_smarty_tpl->tpl_vars['post']->value['sidebar']['since'];?>
<br>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['sidebar']['extra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value) {?><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br><?php }?>
					<?php } ?>
					<br>
					Last post: <?php echo $_smarty_tpl->tpl_vars['post']->value['sidebar']['lastpost'];?>
<br>
					Last view: <?php echo $_smarty_tpl->tpl_vars['post']->value['sidebar']['lastview'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['post']->value['sidebar']['isonline'];?>

				</div>
			</td>
			<td class="post<?php if ($_smarty_tpl->tpl_vars['post']->value['fulllayout']) {?> mainbar<?php echo $_smarty_tpl->tpl_vars['post']->value['u_id'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['haslayout']) {?> haslayout<?php }?>" id="post_<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['post']->value['contents'];?>

			</td>
		</tr>
	</table>
<?php }} ?>

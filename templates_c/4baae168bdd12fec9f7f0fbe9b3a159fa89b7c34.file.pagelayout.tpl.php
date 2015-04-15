<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 03:30:12
         compiled from "/home/tierage/tierage.net/board/templates/pagelayout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1282113807552b8c5d090967-04002469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4baae168bdd12fec9f7f0fbe9b3a159fa89b7c34' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/pagelayout.tpl',
      1 => 1429068612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1282113807552b8c5d090967-04002469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b8c5d31d019_25610064',
  'variables' => 
  array (
    'bannersrc' => 0,
    'layout_title' => 0,
    'boardname' => 0,
    'subtitle' => 0,
    'headerlinks' => 0,
    'url' => 0,
    'text' => 0,
    'loguserid' => 0,
    'loguserlink' => 0,
    'layout_userpanel' => 0,
    'notifications' => 0,
    'numnotifs' => 0,
    'notif' => 0,
    'layout_onlineusers' => 0,
    'layout_crumbs' => 0,
    'layout_actionlinks' => 0,
    'alink' => 0,
    'layout_contents' => 0,
    'layout_time' => 0,
    'layout_views' => 0,
    'footertext' => 0,
    'layout_credits' => 0,
    'showperf' => 0,
    'perfdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8c5d31d019_25610064')) {function content_552b8c5d31d019_25610064($_smarty_tpl) {?><table id="main" class="layout-table">
<tr>
<td id="main-header" colspan="2">
	<table id="header" class="outline">
		<tr>
			<td class="cell0 center">
				<a href="<?php echo smarty_function_actionLink(array('page'=>'board'),$_smarty_tpl);?>
"><?php if ($_smarty_tpl->tpl_vars['bannersrc']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['bannersrc']->value;?>
" alt="<?php if ($_smarty_tpl->tpl_vars['layout_title']->value) {?><?php echo $_smarty_tpl->tpl_vars['layout_title']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['boardname']->value;?>
<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['layout_title']->value) {?><?php echo $_smarty_tpl->tpl_vars['layout_title']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['boardname']->value;?>
<?php }?>" /><?php } else { ?><div id="boardtitle"><?php if ($_smarty_tpl->tpl_vars['layout_title']->value) {?><?php echo $_smarty_tpl->tpl_vars['layout_title']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['boardname']->value;?>
<?php }?></div><div id="title-subtitle"><?php if ($_smarty_tpl->tpl_vars['subtitle']->value) {?><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
<?php }?></div><?php }?></a>
			</td>
		</tr>
		<tr class="header1">
			<th id="navBar">
				<div id="navMenuContainer">
					<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['headerlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->_loop = true;
 $_smarty_tpl->tpl_vars['url']->value = $_smarty_tpl->tpl_vars['text']->key;
?>
						<span class="navButton"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a></span>
					<?php } ?>
				</div>
				<div style="display:inline-block;">
					<?php if ($_smarty_tpl->tpl_vars['loguserid']->value) {?>
					<?php if (HasPermission('admin.viewadminpanel')) {?>
					<span class="navButton">
						<a href="<?php echo smarty_function_actionLink(array('page'=>'dashboard'),$_smarty_tpl);?>
">Dashboard</a>
					</span>
					<?php }?>
					<div id="userMenuContainer" class="dropdownContainer">
						<div id="userMenuButton" class="navButton">
							<?php echo $_smarty_tpl->tpl_vars['loguserlink']->value;?>

							<i class="icon-caret-down"></i>
						</div>
						<ul class="dropdownMenu">
							<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['layout_userpanel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->_loop = true;
 $_smarty_tpl->tpl_vars['url']->value = $_smarty_tpl->tpl_vars['text']->key;
?>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
							<?php } ?>
						</ul>
					</div>
					<?php $_smarty_tpl->tpl_vars['numnotifs'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['notifications']->value), null, 0);?>
					<div id="notifMenuContainer" class="dropdownContainer <?php if ($_smarty_tpl->tpl_vars['numnotifs']->value) {?>hasNotifs<?php } else { ?>noNotif<?php }?>">
						<div id="notifMenuButton" class="navButton">
							Messages
							<span id="notifCount"><?php echo $_smarty_tpl->tpl_vars['numnotifs']->value;?>
</span>
							<i class="icon-caret-down"></i>
						</div>
						<ul id="notifList" class="dropdownMenu">
						<?php if ($_smarty_tpl->tpl_vars['numnotifs']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
								<li><?php echo $_smarty_tpl->tpl_vars['notif']->value['text'];?>
<br><small><?php echo $_smarty_tpl->tpl_vars['notif']->value['formattedDate'];?>
</small>
							<?php } ?>
						<?php }?>
						</ul>
					</div>
					<span class="navButton">
						<a href="#" onclick="$('#logout').submit(); return false;">Log out</a>
					</span>
					<?php } else { ?>
					<span class="navButton">
						<a href="<?php echo smarty_function_actionLink(array('page'=>'register'),$_smarty_tpl);?>
">Register</a>
					</span>
					<span class="navButton">
						<a href="<?php echo smarty_function_actionLink(array('page'=>'login'),$_smarty_tpl);?>
">Log in</a>
					</span>
					<?php }?>
				</div>
			</th>
		</tr>
		<tr class="cell0">
			<td class="smallFonts center">
				<?php echo $_smarty_tpl->tpl_vars['layout_onlineusers']->value;?>

			</td>
		</tr>
	</table>
</td>
</tr>

<?php $_smarty_tpl->_capture_stack[0][] = array("breadcrumbs", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['layout_crumbs']->value||$_smarty_tpl->tpl_vars['layout_actionlinks']->value) {?>
		<table class="outline breadcrumbs"><tr class="header1">
			<th>
				<?php if ($_smarty_tpl->tpl_vars['layout_actionlinks']->value&&count($_smarty_tpl->tpl_vars['layout_actionlinks']->value)) {?>
				<div class="actionlinks" style="float:right;">
					<ul class="pipemenu smallFonts">
					<?php  $_smarty_tpl->tpl_vars['alink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layout_actionlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alink']->key => $_smarty_tpl->tpl_vars['alink']->value) {
$_smarty_tpl->tpl_vars['alink']->_loop = true;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['alink']->value;?>

					<?php } ?>
					</ul>
				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['layout_crumbs']->value&&count($_smarty_tpl->tpl_vars['layout_crumbs']->value)) {?>
				<ul class="crumbLinks">
				<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['layout_crumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->_loop = true;
 $_smarty_tpl->tpl_vars['url']->value = $_smarty_tpl->tpl_vars['text']->key;
?>
					<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
				<?php } ?>
				</ul>
				<?php }?>
			</th>
		</tr></table>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<tr>
<td id="main-page">
	<table id="page-container" class="layout-table">
	<tr><td class="crumb-container">
		<?php echo Smarty::$_smarty_vars['capture']['breadcrumbs'];?>

	</td></tr>
	<tr><td class="contents-container">
		<?php echo $_smarty_tpl->tpl_vars['layout_contents']->value;?>

	</td></tr>
	<tr><td class="crumb-container">
		<?php echo Smarty::$_smarty_vars['capture']['breadcrumbs'];?>

	</td></tr>
	</table>
</td>
</tr>

<tr id="main-footer">
	<td class="cell0 center" id="footer">
		<?php echo $_smarty_tpl->tpl_vars['layout_time']->value;?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['layout_views']->value;?>
<br>
		<?php if ($_smarty_tpl->tpl_vars['footertext']->value) {?><?php echo $_smarty_tpl->tpl_vars['footertext']->value;?>
<br><?php }?>
		<?php echo $_smarty_tpl->tpl_vars['layout_credits']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['showperf']->value) {?><?php echo $_smarty_tpl->tpl_vars['perfdata']->value;?>
<?php }?>
	</td>
</tr>

</td>
</tr>
</table>
<?php }} ?>

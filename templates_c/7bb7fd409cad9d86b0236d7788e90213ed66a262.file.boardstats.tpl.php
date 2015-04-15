<?php /* Smarty version Smarty-3.1.16, created on 2015-04-15 13:50:00
         compiled from "C:\xampp\htdocs\templates\boardstats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22321552e6c88d2eb20-45624993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb7fd409cad9d86b0236d7788e90213ed66a262' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\boardstats.tpl',
      1 => 1429078043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22321552e6c88d2eb20-45624993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552e6c88d749d2_63989869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e6c88d749d2_63989869')) {function content_552e6c88d749d2_63989869($_smarty_tpl) {?>	<table class="outline margin boardstats">
		<tr class="cell2 center" style="overflow: auto;">
			<td class="smallFonts">
				<div style="float: left; width: 33%;">&nbsp;<br>&nbsp;</div>
				<div style="float: right; width: 33%; text-align: right;">
				<?php if ($_smarty_tpl->tpl_vars['stats']->value['numUsers']) {?>
					<?php echo smarty_function_plural(array('num'=>$_smarty_tpl->tpl_vars['stats']->value['numUsers'],'what'=>'registered user'),$_smarty_tpl);?>
, <?php echo $_smarty_tpl->tpl_vars['stats']->value['numActive'];?>
 active (<?php echo $_smarty_tpl->tpl_vars['stats']->value['pctActive'];?>
%)<br>
					Newest user: <?php echo $_smarty_tpl->tpl_vars['stats']->value['lastUserLink'];?>

				<?php } else { ?>
					No registered users<br>
					&nbsp;
				<?php }?>
				</div>
				<div class="center">
					<?php echo smarty_function_plural(array('num'=>$_smarty_tpl->tpl_vars['stats']->value['numThreads'],'what'=>'thread'),$_smarty_tpl);?>
 and <?php echo smarty_function_plural(array('num'=>$_smarty_tpl->tpl_vars['stats']->value['numPosts'],'what'=>'post'),$_smarty_tpl);?>
 total<br>
					<?php echo smarty_function_plural(array('num'=>$_smarty_tpl->tpl_vars['stats']->value['newToday'],'what'=>'post'),$_smarty_tpl);?>
 today, <?php echo $_smarty_tpl->tpl_vars['stats']->value['newLastHour'];?>
 last hour
				</div>
			</td>
		</tr>
	</table>
<?php }} ?>

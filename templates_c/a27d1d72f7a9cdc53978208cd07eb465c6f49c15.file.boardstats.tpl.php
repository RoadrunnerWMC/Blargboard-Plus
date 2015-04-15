<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:51:53
         compiled from "/home/tierage/tierage.net/board/templates/boardstats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1914269091552b91b912e547-55887047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a27d1d72f7a9cdc53978208cd07eb465c6f49c15' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/boardstats.tpl',
      1 => 1428917171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1914269091552b91b912e547-55887047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b91b92368b0_33463866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b91b92368b0_33463866')) {function content_552b91b92368b0_33463866($_smarty_tpl) {?>	<table class="outline margin boardstats">
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

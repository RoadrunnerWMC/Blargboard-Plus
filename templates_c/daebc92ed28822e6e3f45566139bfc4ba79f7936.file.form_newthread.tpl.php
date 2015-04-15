<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:54:35
         compiled from "/home/tierage/tierage.net/board/templates/form_newthread.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1257287757552b925b432066-84162038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daebc92ed28822e6e3f45566139bfc4ba79f7936' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/form_newthread.tpl',
      1 => 1428917173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1257287757552b925b432066-84162038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b925b53f6a1_23263792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b925b53f6a1_23263792')) {function content_552b925b53f6a1_23263792($_smarty_tpl) {?>	<table class="outline margin form form_newthread">
		<tr class="header1">
			<th colspan=2>New thread</th>
		</tr>
		<tr class="cell0">
			<td class="cell2 center" style="width: 20%;">
				Title
			</td>
			<td id="threadTitleContainer">
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>

			</td>
		</tr>
		<tr class="cell1">
			<td class="cell2 center">
				Icon
			</td>
			<td class="threadIcons">
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['icon'];?>

			</td>
		</tr>
		<tr class="header0"><th colspan=2 style="height:5px;"></th></tr>
		<tr class="cell0 pollModeOff">
			<td class="cell2"></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnAddPoll'];?>

			</td>
		</tr>
		<tr class="cell0 pollModeOn">
			<td class="cell2 center">Poll question</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['pollQuestion'];?>

			</td>
		</tr>
		<tr class="cell1 pollModeOn">
			<td class="cell2 center">Poll options</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['pollOptions'];?>

			</td>
		</tr>
		<tr class="cell0 pollModeOn">
			<td class="cell2 center"></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['pollMultivote'];?>

			</td>
		</tr>
		<tr class="cell1 pollModeOn">
			<td class="cell2"></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnRemovePoll'];?>

			</td>
		</tr>
		<tr class="header0"><th colspan=2 style="height:5px;"></th></tr>
		<tr class="cell0">
			<td class="cell2 center">
				Post
			</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['text'];?>

			</td>
		</tr>
		<tr class="cell2">
			<td></td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnPost'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['btnPreview'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['mood'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['nopl'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['nosm'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['lock'];?>

				<?php echo $_smarty_tpl->tpl_vars['fields']->value['stick'];?>

			</td>
		</tr>
	</table>
<?php }} ?>

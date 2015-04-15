<?php /* Smarty version Smarty-3.1.16, created on 2015-04-13 09:29:11
         compiled from "/home/tierage/tierage.net/board/templates/form_editprofile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1290547939552b8c67a433c6-97987334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd304807e790dd7ed50ef913afec2751d0f7fe20f' => 
    array (
      0 => '/home/tierage/tierage.net/board/templates/form_editprofile.tpl',
      1 => 1428917172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1290547939552b8c67a433c6-97987334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pages' => 0,
    'pageid' => 0,
    'pname' => 0,
    'categories' => 0,
    'cname' => 0,
    'catid' => 0,
    'fields' => 0,
    'field' => 0,
    'btnEditProfile' => 0,
    'selectedTab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_552b8c67bb6f83_74341889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8c67bb6f83_74341889')) {function content_552b8c67bb6f83_74341889($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/tierage/tierage.net/board/lib/smarty/plugins/function.cycle.php';
?>	<div class="editprofile">
	
		<div class="margin tabs" id="tabs">
		<?php  $_smarty_tpl->tpl_vars['pname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pname']->_loop = false;
 $_smarty_tpl->tpl_vars['pageid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pname']->key => $_smarty_tpl->tpl_vars['pname']->value) {
$_smarty_tpl->tpl_vars['pname']->_loop = true;
 $_smarty_tpl->tpl_vars['pageid']->value = $_smarty_tpl->tpl_vars['pname']->key;
?>
			<button id="<?php echo $_smarty_tpl->tpl_vars['pageid']->value;?>
Button" class="tab" onclick="showEditProfilePart('<?php echo $_smarty_tpl->tpl_vars['pageid']->value;?>
');return false;"><?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
</button>
		<?php } ?>
		</div>
		
		<?php  $_smarty_tpl->tpl_vars['pname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pname']->_loop = false;
 $_smarty_tpl->tpl_vars['pageid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pname']->key => $_smarty_tpl->tpl_vars['pname']->value) {
$_smarty_tpl->tpl_vars['pname']->_loop = true;
 $_smarty_tpl->tpl_vars['pageid']->value = $_smarty_tpl->tpl_vars['pname']->key;
?>
			<table class="outline margin form eptable" id="<?php echo $_smarty_tpl->tpl_vars['pageid']->value;?>
">
			
			<?php  $_smarty_tpl->tpl_vars['cname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cname']->_loop = false;
 $_smarty_tpl->tpl_vars['catid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['pageid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cname']->key => $_smarty_tpl->tpl_vars['cname']->value) {
$_smarty_tpl->tpl_vars['cname']->_loop = true;
 $_smarty_tpl->tpl_vars['catid']->value = $_smarty_tpl->tpl_vars['cname']->key;
?>
				<tr class="header0">
					<th colspan=2><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</th>
				</tr>
				
				<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['fieldid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['catid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['fieldid']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
					<tr class="cell<?php echo smarty_function_cycle(array('values'=>'0,1'),$_smarty_tpl);?>
">
					
						<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='themeselector') {?>
						<td class="themeselector" colspan=2>
							<?php echo $_smarty_tpl->tpl_vars['field']->value['html'];?>

						</td>
						<?php } else { ?>
						<td class="cell2 center" style="width:20%;">
							<?php echo $_smarty_tpl->tpl_vars['field']->value['caption'];?>

							<?php if ($_smarty_tpl->tpl_vars['field']->value['hint']) {?><br><small><?php echo $_smarty_tpl->tpl_vars['field']->value['hint'];?>
</small><?php }?>
						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['field']->value['html'];?>

						</td>
						<?php }?>
						
					</tr>
				<?php } ?>
				
			<?php } ?>
			
			</table>
		<?php } ?>
		
		<table class="outline margin form" id="button">
			<tr class="header0">
				<th colspan=2>&nbsp;</th>
			</tr>
			<tr class="cell2">
				<td style="width:20%;"></td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['btnEditProfile']->value;?>

				</td>
			</tr>
		</table>
	
	</div>
	
	<script type="text/javascript">
		$('.eptable').hide();
		$('#<?php echo $_smarty_tpl->tpl_vars['selectedTab']->value;?>
').show();
		$('#<?php echo $_smarty_tpl->tpl_vars['selectedTab']->value;?>
Button').addClass('selected');
	</script>
<?php }} ?>

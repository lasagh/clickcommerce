<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 14:46:06
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/admin040hhopsk/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1672541456583c5f4ec0b231-40778805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f7b12f59b98883fddd66c3d90342ddcb6f6ada7' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/admin040hhopsk/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1476972584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1672541456583c5f4ec0b231-40778805',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c5f4ec0fd44_09950146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c5f4ec0fd44_09950146')) {function content_583c5f4ec0fd44_09950146($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>

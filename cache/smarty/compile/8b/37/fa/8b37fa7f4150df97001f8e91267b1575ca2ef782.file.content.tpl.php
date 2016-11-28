<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 14:47:04
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/admin040hhopsk/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1018895452583c5f88830811-63659989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b37fa7f4150df97001f8e91267b1575ca2ef782' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/admin040hhopsk/themes/default/template/content.tpl',
      1 => 1476972584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1018895452583c5f88830811-63659989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c5f8885ca62_96691704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c5f8885ca62_96691704')) {function content_583c5f8885ca62_96691704($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>

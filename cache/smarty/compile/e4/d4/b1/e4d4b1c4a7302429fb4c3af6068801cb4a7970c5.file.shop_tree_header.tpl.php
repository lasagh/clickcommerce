<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 17:40:48
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206436159583c5e10822349-05210535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d4b1c4a7302429fb4c3af6068801cb4a7970c5' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1476972584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206436159583c5e10822349-05210535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c5e10836965_56033723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c5e10836965_56033723')) {function content_583c5e10836965_56033723($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>

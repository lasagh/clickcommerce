<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 16:37:02
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1730711605583c4f1edf7215-05484526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19863d93882d8a6ad1a0d0962a5fbfe93a413e6c' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/admin/themes/default/template/content.tpl',
      1 => 1476972584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1730711605583c4f1edf7215-05484526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c4f1ee6e284_24372515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c4f1ee6e284_24372515')) {function content_583c4f1ee6e284_24372515($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>

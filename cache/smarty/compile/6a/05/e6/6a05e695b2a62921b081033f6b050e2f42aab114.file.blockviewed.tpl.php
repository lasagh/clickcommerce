<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 15:37:17
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/blockviewed/blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1045448995583c6b4d1516e6-26414020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a05e695b2a62921b081033f6b050e2f42aab114' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/blockviewed/blockviewed.tpl',
      1 => 1480352347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1045448995583c6b4d1516e6-26414020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6b4d1aecd1_68579807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6b4d1aecd1_68579807')) {function content_583c6b4d1aecd1_68579807($_smarty_tpl) {?>

<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block block-info ">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar-obj.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['productsViewedObj']->value,'mod'=>'blockspecials'), 0);?>
 
	</div>
</div>
<?php }} ?>

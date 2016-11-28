<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 15:36:50
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/blockspecials/blockspecials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:972512583c6b32413e74-55669186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea8b0cfdee5861289b8855c91c91bc7fa3f4177e' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/blockspecials/blockspecials.tpl',
      1 => 1480352347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '972512583c6b32413e74-55669186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6b32446e09_27479770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6b32446e09_27479770')) {function content_583c6b32446e09_27479770($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<h4 class="title_block">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
">
            <?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>

        </a>
    </h4>
	<div class="block_content products-block">
    <?php if ($_smarty_tpl->tpl_vars['special']->value) {?>
        <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['special']->value), null, 0);?> 
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'mod'=>'blockspecials'), 0);?>
  
		<div class="lnk">
			<a 
            class="btn-outline button btn-sm" 
            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" 
            title="<?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
">
                <span><?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
</span>
            </a>
		</div>
    <?php } else { ?>
		<div><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</div>
    <?php }?>
	</div>
</div>
<!-- /MODULE Block specials --><?php }} ?>

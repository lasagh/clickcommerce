<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 15:37:17
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/sub/product/sidebar-obj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1696888413583c6b4d1b62e0-04010321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8ac21fd48740c71fdc79069c233b5d25c1532fb' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/sub/product/sidebar-obj.tpl',
      1 => 1480352347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1696888413583c6b4d1b62e0-04010321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6b4d2ab5f2_52300908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6b4d2ab5f2_52300908')) {function content_583c6b4d2ab5f2_52300908($_smarty_tpl) {?><ul class="products products-block">
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <li class="clearfix media">
            
            <div class="product-block">

				<div class="product-container media" itemscope itemtype="https://schema.org/Product">
					 <a class="products-block-image img pull-left" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
						<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id_image,'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" itemprop="image" />
					 </a>
                <div class="media-body">
                      <div class="product-content">
                        <h5 class="name media-heading" itemprop="name">
								<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->name), ENT_QUOTES, 'UTF-8', true),25,'...');?>

								</a>
							</h5>
                        <div class="price-review">
                            <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price)||(isset($_smarty_tpl->tpl_vars['product']->value->available_for_order)&&$_smarty_tpl->tpl_vars['product']->value->available_for_order)))) {?>
                                <div class="content_price price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                        <span itemprop="price" class="product-price">
                                            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->price),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->price_tax_exc),$_smarty_tpl);?>
<?php }?>
                                        </span>
                                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value->specific_prices)&&$_smarty_tpl->tpl_vars['product']->value->specific_prices&&isset($_smarty_tpl->tpl_vars['product']->value->specific_prices['reduction'])&&$_smarty_tpl->tpl_vars['product']->value->specific_prices['reduction']>0) {?>
                                            <span class="old-price product-price">
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value->price_without_reduction),$_smarty_tpl);?>

                                            </span>
                                        <?php }?>
                                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
" />
                                    <?php }?>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['page_name']->value!="product") {?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>array('id_product'=>$_smarty_tpl->tpl_vars['product']->value->id)),$_smarty_tpl);?>

                            <?php }?>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

              
            </div>    
        </li>
    <?php } ?>
</ul><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 15:36:53
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/modules/supercheckout/views/templates/front/order-shipping-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:549192041583c6b35a896c6-55195146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88258dd5ecdbe6022ebb086a61dea867f4f53fa3' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/modules/supercheckout/views/templates/front/order-shipping-extra.tpl',
      1 => 1456428766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '549192041583c6b35a896c6-55195146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IS_VIRTUAL_CART' => 0,
    'recyclablePackAllowed' => 0,
    'recyclable' => 0,
    'giftAllowed' => 0,
    'cartGiftChecked' => 0,
    'gift_wrapping_price' => 0,
    'priceDisplay' => 0,
    'total_wrapping_tax_exc_cost' => 0,
    'total_wrapping_cost' => 0,
    'use_taxes' => 0,
    'cart' => 0,
    'conditions' => 0,
    'cms_id' => 0,
    'show_TOS' => 0,
    'checkedTOS' => 0,
    'link_conditions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6b35b31e03_80658005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6b35b31e03_80658005')) {function content_583c6b35b31e03_80658005($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['IS_VIRTUAL_CART']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['recyclablePackAllowed']->value) {?>
        <div id="supercheckout_recyclepack_container" class='order-shipping-extra' style="display:padding-bottom: 0 !important;">
            <input type="checkbox" name="recyclable" class="supercheckout-delivery-extra" id="recyclable" value="1" <?php if ($_smarty_tpl->tpl_vars['recyclable']->value==1) {?>checked="checked"<?php }?> />                        
            <?php echo smartyTranslate(array('s'=>'I would like to receive my order in recycled packaging.','mod'=>'supercheckout'),$_smarty_tpl);?>
                        
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['giftAllowed']->value) {?>
    <div id="supercheckout-gift_container" class='order-shipping-extra' style="display:padding-bottom: 0 !important;">
        <input type="checkbox" class="supercheckout-delivery-extra" name="gift" id="gift" value="1" <?php if ($_smarty_tpl->tpl_vars['cartGiftChecked']->value==1) {?>checked="checked"<?php }?> />                        
        <?php echo smartyTranslate(array('s'=>'I would like my order to be gift wrapped.','mod'=>'supercheckout'),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['gift_wrapping_price']->value>0) {?>
            <?php echo smartyTranslate(array('s'=>'Additional cost of','mod'=>'supercheckout'),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc_cost']->value),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_cost']->value),$_smarty_tpl);?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
                    <?php echo smartyTranslate(array('s'=>'(Tax excl.)','mod'=>'supercheckout'),$_smarty_tpl);?>

                <?php } else { ?>
                    <?php echo smartyTranslate(array('s'=>'(Tax incl.)','mod'=>'supercheckout'),$_smarty_tpl);?>

                <?php }?>
            <?php }?>
        <?php }?>
    </div>
    <div id="supercheckout-gift-comments" style="display:none; margin-top: 0; margin-bottom: 15px;">
        <b><?php echo smartyTranslate(array('s'=>'If you would like, you can add a note to the gift','mod'=>'supercheckout'),$_smarty_tpl);?>
:</b>
        <textarea id="gift_message" name="gift_comment" rows="8" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->gift_message, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
    </div>
    <?php }?>
<?php }?>   
<?php if ($_smarty_tpl->tpl_vars['conditions']->value&&$_smarty_tpl->tpl_vars['cms_id']->value&&$_smarty_tpl->tpl_vars['show_TOS']->value) {?>
<div id="supercheckout-agree">
	<label><input type="checkbox" name="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?> />
	<?php echo smartyTranslate(array('s'=>'I agree to the terms of service and will adhere to them unconditionally. ','mod'=>'supercheckout'),$_smarty_tpl);?>
        
	</label>
	(<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="iframe various fancybox.ajax" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Read the term of services','mod'=>'supercheckout'),$_smarty_tpl);?>
</a>)
</div>
<script> 
	$(document).ready(function() {
		$(".various").fancybox({
			 scrolling: 'auto',
			width: '65%',
			height: '60%',
			fitToView: false,
			autoSize: false,
			'type': 'ajax',
			'ajax': {
			    dataFilter: function(data) {
				return $(data).find('#center_column')[0];
			}
		    }
		});
	});
</script>
<?php }?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 15:36:53
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/modules/supercheckout/views/templates/front/order-shipping.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1766526742583c6b35652490-71836431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c2310e8909c4fa9315db2b7a3409a3936d58f23' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/modules/supercheckout/views/templates/front/order-shipping.tpl',
      1 => 1456428766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1766526742583c6b35652490-71836431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IS_VIRTUAL_CART' => 0,
    'shipping_errors' => 0,
    'shippig_error' => 0,
    'delivery_option_list' => 0,
    'cart' => 0,
    'address' => 0,
    'option_list' => 0,
    'id_address' => 0,
    'delivery_option' => 0,
    'key' => 0,
    'default_shipping_method' => 0,
    'option' => 0,
    'display_carrier_style' => 0,
    'carrier' => 0,
    'sub_carriers_count' => 0,
    'cookie' => 0,
    'free_shipping' => 0,
    'use_taxes' => 0,
    'priceDisplay' => 0,
    'HOOK_BEFORECARRIER' => 0,
    'HOOK_EXTRACARRIER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6b35a767d4_46712215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6b35a767d4_46712215')) {function content_583c6b35a767d4_46712215($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['IS_VIRTUAL_CART']->value)&&$_smarty_tpl->tpl_vars['IS_VIRTUAL_CART']->value) {?>
    <input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />
    <div class="supercheckout-checkout-content" style="display:block">
        <div class="not-required-msg" style="display: block;"><?php echo smartyTranslate(array('s'=>'No Delivery Method Required','mod'=>'supercheckout'),$_smarty_tpl);?>
</div>
    </div>
<?php } else { ?>
        <?php if (isset($_smarty_tpl->tpl_vars['shipping_errors']->value)&&is_array($_smarty_tpl->tpl_vars['shipping_errors']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['shippig_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shippig_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shippig_error']->key => $_smarty_tpl->tpl_vars['shippig_error']->value) {
$_smarty_tpl->tpl_vars['shippig_error']->_loop = true;
?>
                <div class="supercheckout-checkout-content" style="display:block">
                    <div class="permanent-warning" style="display: block;"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shippig_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="supercheckout-checkout-content" style="display:block"></div>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['delivery_option_list']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->getDeliveryAddressesWithoutCarriers(true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
?>
			<input type="hidden" name="no_shipping_method" value="1">
			<div class="supercheckout-checkout-content" style="display:block">
			    <div class="permanent-warning" style="display: block;">
				<?php if (empty($_smarty_tpl->tpl_vars['address']->value->alias)) {?>
					<?php echo smartyTranslate(array('s'=>'No Delivery Method Available','mod'=>'supercheckout'),$_smarty_tpl);?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'No Delivery Method Available for this Address','mod'=>'supercheckout'),$_smarty_tpl);?>

				<?php }?>
			    </div>
			</div>
		<?php }
if (!$_smarty_tpl->tpl_vars['address']->_loop) {
?>
			<?php  $_smarty_tpl->tpl_vars['option_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_list']->_loop = false;
 $_smarty_tpl->tpl_vars['id_address'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_list']->key => $_smarty_tpl->tpl_vars['option_list']->value) {
$_smarty_tpl->tpl_vars['option_list']->_loop = true;
 $_smarty_tpl->tpl_vars['id_address']->value = $_smarty_tpl->tpl_vars['option_list']->key;
?>
				<table class="radio">
				    <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
 $_smarty_tpl->tpl_vars['option']->index++;
?>
					<tr class="highlight">
					    <td>
						<?php if (isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])&&$_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value]==$_smarty_tpl->tpl_vars['key']->value) {?>
						    <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
]" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="shipping_method_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['option']->index);?>
" checked="checked" />
						<?php } elseif (isset($_smarty_tpl->tpl_vars['default_shipping_method']->value)&&$_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['default_shipping_method']->value) {?>
						    <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
]" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="shipping_method_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['option']->index);?>
" checked="checked" />
						<?php } else { ?>
						    <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
]" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="shipping_method_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['option']->index);?>
" />
						<?php }?>

					    </td>
					    <td class="shipping_info">
						<label for="shipping_method_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['option']->index);?>
">
						    <?php $_smarty_tpl->tpl_vars['sub_carriers_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['option']->value['carrier_list']), null, 0);?>
						    <?php if ($_smarty_tpl->tpl_vars['display_carrier_style']->value!=0) {?>
							<?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
?>
							    <?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>                                                            
								<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['width'])&&$_smarty_tpl->tpl_vars['carrier']->value['width']!='') {?>width="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php } else { ?>width='95'<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['height'])&&$_smarty_tpl->tpl_vars['carrier']->value['height']!='') {?>height="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php } else { ?>height='20'<?php }?>/><?php if ($_smarty_tpl->tpl_vars['display_carrier_style']->value!=2) {?><br><?php }?>
							    <?php }?>
							<?php } ?>
						    <?php }?>
						    <?php if ($_smarty_tpl->tpl_vars['display_carrier_style']->value!=2) {?>
							<?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
							    <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
?>
								<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

							    <?php } ?>
							<?php }?>                                                        
							<?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>                                                            
							    <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
?>
								<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

								<?php $_smarty_tpl->tpl_vars['sub_carriers_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['sub_carriers_count']->value-1, null, 0);?>
								<?php if (($_smarty_tpl->tpl_vars['sub_carriers_count']->value<$_smarty_tpl->tpl_vars['option']->value['carrier_list'])&&$_smarty_tpl->tpl_vars['sub_carriers_count']->value>0) {?>&<?php }?>
							    <?php } ?>
							<?php }?>
							<?php if (count($_smarty_tpl->tpl_vars['option_list']->value)>1) {?>
							    <?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_grade']) {?>
								<?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>
								    <?php echo smartyTranslate(array('s'=>'The best price and speed','mod'=>'supercheckout'),$_smarty_tpl);?>

								<?php } else { ?>
								    <?php echo smartyTranslate(array('s'=>'The Fastest','mod'=>'supercheckout'),$_smarty_tpl);?>

								<?php }?>
							    <?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>
								    <?php echo smartyTranslate(array('s'=>'The Best Price','mod'=>'supercheckout'),$_smarty_tpl);?>

								<?php }?>
							    <?php }?>
							<?php }?>                                                        
						    <?php }?>
						</label>
						<?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']&&isset($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang])) {?>
						    <span class="supercheckout-shipping-small-title"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
						<?php }?>
						<?php if (count($_smarty_tpl->tpl_vars['option_list']->value)>1) {?>
						    <span class="supercheckout-shipping-small-title">
						    <?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_grade']) {?>
							<?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>
							    <?php echo smartyTranslate(array('s'=>'The best price and speed','mod'=>'supercheckout'),$_smarty_tpl);?>

							<?php } else { ?>
							    <?php echo smartyTranslate(array('s'=>'The Fastest','mod'=>'supercheckout'),$_smarty_tpl);?>

							<?php }?>
						    <?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>
							    <?php echo smartyTranslate(array('s'=>'The Best Price','mod'=>'supercheckout'),$_smarty_tpl);?>

							<?php }?>
						    <?php }?>
						    </span>
						<?php }?>
					    </td>
					    <td class="">
						<label for="shipping_method_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['option']->index);?>
">
						    <?php if ($_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']&&(isset($_smarty_tpl->tpl_vars['option']->value['is_free'])&&$_smarty_tpl->tpl_vars['option']->value['is_free']==0)&&(!isset($_smarty_tpl->tpl_vars['free_shipping']->value)||(isset($_smarty_tpl->tpl_vars['free_shipping']->value)&&!$_smarty_tpl->tpl_vars['free_shipping']->value))) {?>
							<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1) {?>
							    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
								    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(Tax excl.)','mod'=>'supercheckout'),$_smarty_tpl);?>

							    <?php } else { ?>
								    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(Tax incl.)','mod'=>'supercheckout'),$_smarty_tpl);?>

							    <?php }?>
							<?php } else { ?>
							    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl);?>

							<?php }?>
						    <?php } else { ?>
							<?php echo smartyTranslate(array('s'=>'Free','mod'=>'supercheckout'),$_smarty_tpl);?>

						    <?php }?>
						</label>
					    </td>
					</tr>                       
				    <?php } ?>
				</table>
			<?php }
if (!$_smarty_tpl->tpl_vars['option_list']->_loop) {
?>
				<div class="supercheckout-checkout-content" style="display:block">
				    <div class="permanent-warning" style="display: block;"><?php echo smartyTranslate(array('s'=>'No Delivery Method Available','mod'=>'supercheckout'),$_smarty_tpl);?>
</div>
				</div>
			<?php } ?>
		<?php } ?>
		<div id="hook_beforecarrier">
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value)) {?>
				<?php echo $_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value;?>

			<?php }?>
		</div>
		<div id="hook-extracarrier">
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER']->value;?>

		<?php }?>
		</div>
		
	<?php }?>
        <br />                        
<?php }?>

<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 15:36:50
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/modules/supercheckout/views/templates/front/supercheckout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1203136671583c6b327d3c03-72284871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5802b14b31d30e9a1b34772917c4bf3e4e5ca02' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/modules/supercheckout/views/templates/front/supercheckout.tpl',
      1 => 1479323358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1203136671583c6b327d3c03-72284871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'empty' => 0,
    'settings' => 0,
    'currencyFormat' => 0,
    'currencySign' => 0,
    'currencyBlank' => 0,
    'token_cart' => 0,
    'module_image_path' => 0,
    'empty_cart_warning' => 0,
    'notification' => 0,
    'warning' => 0,
    'product_remove_success' => 0,
    'product_qty_update_success' => 0,
    'formatedAddressFieldsValuesList' => 0,
    'id_address_delivery' => 0,
    'use_taxes' => 0,
    'total_price' => 0,
    'total_price_without_tax' => 0,
    'link' => 0,
    'payment_method_url' => 0,
    'user_type' => 0,
    'isvirtualcart' => 0,
    'guest_information' => 0,
    'login_boxes_width' => 0,
    'velsof_errors' => 0,
    'err' => 0,
    'supercheckout_url' => 0,
    'plugin_name' => 0,
    'ps_version' => 0,
    'multiplier_3' => 0,
    'multiplier_2' => 0,
    'layout_name' => 0,
    'multiplier' => 0,
    'logged' => 0,
    'customer_name' => 0,
    'my_account_url' => 0,
    'guest_enable_by_system' => 0,
    'forgotten_link' => 0,
    'cus_per_info' => 0,
    'genders' => 0,
    'gender' => 0,
    'days' => 0,
    'day' => 0,
    'months' => 0,
    'month_value' => 0,
    'month_name' => 0,
    'years' => 0,
    'year' => 0,
    'cus_subs_info' => 0,
    'addresses' => 0,
    'shipping_addr' => 0,
    'id_address_invoice' => 0,
    'p_address_key' => 0,
    'need_dni' => 0,
    'need_vat' => 0,
    'display_row' => 0,
    'extraFieldClass' => 0,
    'countries' => 0,
    'country' => 0,
    'default_country' => 0,
    'address' => 0,
    'payment_addr' => 0,
    'month' => 0,
    'IS_VIRTUAL_CART' => 0,
    'carriers_count' => 0,
    'shipping_errors' => 0,
    'shippig_error' => 0,
    'delivery_option_list' => 0,
    'cart' => 0,
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
    'priceDisplay' => 0,
    'HOOK_BEFORECARRIER' => 0,
    'HOOK_EXTRACARRIER' => 0,
    'payment_methods' => 0,
    'payment_method' => 0,
    'additional_id' => 0,
    'additional' => 0,
    'selected_payment_method' => 0,
    'display_payment_style' => 0,
    'products' => 0,
    'product' => 0,
    'odd' => 0,
    'productId' => 0,
    'productAttributeId' => 0,
    'customizedDatas' => 0,
    'gift_products' => 0,
    'quantityDisplayed' => 0,
    'image_display' => 0,
    'product_link' => 0,
    'cannotModify' => 0,
    'currency' => 0,
    'symbol' => 0,
    'priceReduction' => 0,
    'id_customization' => 0,
    'customization' => 0,
    'type' => 0,
    'CUSTOMIZE_FILE' => 0,
    'custom_data' => 0,
    'pic_dir' => 0,
    'picture' => 0,
    'CUSTOMIZE_TEXTFIELD' => 0,
    'textField' => 0,
    'tempDelId' => 0,
    'display_tax_label' => 0,
    'total_products' => 0,
    'total_products_wt' => 0,
    'total_wrapping' => 0,
    'total_wrapping_tax_exc' => 0,
    'shipping_setting_display' => 0,
    'total_shipping_tax_exc' => 0,
    'virtualCart' => 0,
    'total_shipping' => 0,
    'total_tax' => 0,
    'total_discounts' => 0,
    'total_discounts_tax_exc' => 0,
    'total_discounts_negative' => 0,
    'discounts' => 0,
    'discount' => 0,
    'voucherAllowed' => 0,
    'discount_name' => 0,
    'displayVouchers' => 0,
    'voucher' => 0,
    'HOOK_SHOPPING_CART' => 0,
    'recyclablePackAllowed' => 0,
    'recyclable' => 0,
    'giftAllowed' => 0,
    'cartGiftChecked' => 0,
    'gift_wrapping_price' => 0,
    'total_wrapping_tax_exc_cost' => 0,
    'total_wrapping_cost' => 0,
    'conditions' => 0,
    'cms_id' => 0,
    'show_TOS' => 0,
    'checkedTOS' => 0,
    'link_conditions' => 0,
    'html' => 0,
    'addon_url' => 0,
    'analytic_url' => 0,
    'iso_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6b34131375_14377216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6b34131375_14377216')) {function content_583c6b34131375_14377216($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/clickcommerce/vp1/tools/smarty/plugins/modifier.escape.php';
?>        <script type="text/javascript" src="../../modules/fkcustomers/js/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="../../modules/fkcustomers/js/fkcustomers_cookie.js"></script>
        <script type="text/javascript" src="../../modules/fkcustomers/js/fkcustomers_cpf.js"></script>
        <script type="text/javascript" src="../../modules/fkcustomers/js/fkcustomers_cnpj.js"></script>
        <script type="text/javascript" src="../../modules/fkcustomers/js/fkcustomers_cep.js"></script>
        <script type="text/javascript" src="../../modules/fkcustomers/js/fkcustomers_endereco.js"></script>
        <script type="text/javascript" src="../../modules/fkcustomers/js/fkcustomers_front.js"></script>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
<?php echo smartyTranslate(array('s'=>'SuperCheckout','mod'=>'supercheckout'),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if (!isset($_smarty_tpl->tpl_vars['empty']->value)) {?>
<script>
	var supercheckoutLayout = <?php echo intval($_smarty_tpl->tpl_vars['settings']->value['layout']);?>
;
	var currencyFormat = <?php echo intval($_smarty_tpl->tpl_vars['currencyFormat']->value);?>
;
	var currencySign = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currencySign']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var currencyBlank = <?php echo intval($_smarty_tpl->tpl_vars['currencyBlank']->value);?>
;
	var static_token = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token_cart']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var supercheckout_image_path = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_image_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var empty_cart_warning = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['empty_cart_warning']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var notification = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['notification']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var warning = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['warning']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var product_remove_success = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product_remove_success']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var product_qty_update_success = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product_qty_update_success']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var freeShippingTranslation = "<?php echo smartyTranslate(array('s'=>'Free Shipping','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var noShippingRequired = "<?php echo smartyTranslate(array('s'=>'No Delivery Method Required','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var ShippingRequired = "<?php echo smartyTranslate(array('s'=>'Delivery Method Required','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var paymentRequired = "<?php echo smartyTranslate(array('s'=>'Payment Method Required','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var updateSameQty = "<?php echo smartyTranslate(array('s'=>'No change found in quantity','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var scInvalidQty = "<?php echo smartyTranslate(array('s'=>'Invalid Quantity','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var scOtherError = "<?php echo smartyTranslate(array('s'=>'Technical Error Occured. Please contact to support.','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var commentInvalid = "<?php echo smartyTranslate(array('s'=>'Message is in invalid format','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var tosRequire = "<?php echo smartyTranslate(array('s'=>'Please acccept our terms & conditions before confirming your order','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var requestToLogin = "<?php echo smartyTranslate(array('s'=>'Please login first','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var ajaxRequestFailedMsg = "<?php echo smartyTranslate(array('s'=>'TECHNICAL ERROR: Request Failed','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var validationfailedMsg = "<?php echo smartyTranslate(array('s'=>'Please provide required Information','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var totalVoucherText = "<?php echo smartyTranslate(array('s'=>'Total Vouchers','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var tax_incl_text = "<?php echo smartyTranslate(array('s'=>'(Tax incl.)','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var tax_excl_text = "<?php echo smartyTranslate(array('s'=>'(Tax excl.)','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	var formatedAddressFieldsValuesList = null;
	<?php if ($_smarty_tpl->tpl_vars['formatedAddressFieldsValuesList']->value!=null) {?>
		formatedAddressFieldsValuesList = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['formatedAddressFieldsValuesList']->value);?>
;
	<?php }?>
	var idAddress_delivery = <?php echo intval($_smarty_tpl->tpl_vars['id_address_delivery']->value);?>
;
	var scp_use_taxes = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['use_taxes']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
	var scp_order_total_price = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['total_price']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
	var scp_order_total_price_wt = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['total_price_without_tax']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
	var scp_guest_tracking_url = "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink("guest-tracking",true));?>
";		//Variable contains url, escape not required
	var scp_history_url = "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink("history",true));?>
";	//Variable contains url, escape not required
	var payment_method_url = "<?php echo $_smarty_tpl->tpl_vars['payment_method_url']->value;?>
";	//Variable contains url, escape not required
	var payment_content_id = 'center_column';
	var scp_required_tos = <?php echo intval($_smarty_tpl->tpl_vars['settings']->value['confirm']['term_condition'][$_smarty_tpl->tpl_vars['user_type']->value]['require']);?>
;
	var iscartvirtual = false;
	<?php if ($_smarty_tpl->tpl_vars['isvirtualcart']->value==true) {?>
	    iscartvirtual = true;
	<?php }?>
	var orderOpcUrl = "<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("order-opc",true));?>
";
            var button_background = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	    var required_error = "<?php echo smartyTranslate(array('s'=>'Required Field','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var invalid_email = "<?php echo smartyTranslate(array('s'=>'Email is invalid','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var pwd_error = "<?php echo smartyTranslate(array('s'=>'(Five characters minimum)','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var invalid_city = "<?php echo smartyTranslate(array('s'=>'Special Characters !<>;?=+@#"°{}_$% are not allowed','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var invalid_address = "<?php echo smartyTranslate(array('s'=>'Special Characters !<>?=+@{}_$% are not allowed','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var invalid_title = "<?php echo smartyTranslate(array('s'=>'Special Characters <>={} are not allowed','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var invalid_number = "<?php echo smartyTranslate(array('s'=>'Only +.-() and numbers are allowed','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var invalid_other_info = "<?php echo smartyTranslate(array('s'=>'Special Characters <>{} are not allowed','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var invalid_dob = "<?php echo smartyTranslate(array('s'=>'Invalid Date of Birth','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var invalid_name = "<?php echo smartyTranslate(array('s'=>'Name is invalid','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var number_error = "<?php echo smartyTranslate(array('s'=>'Numbers not allowed','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var splchar_error = "<?php echo smartyTranslate(array('s'=>'Special Characters !<>,;?=+()@#"°{}_$%: are not allowed','mod'=>'supercheckout'),$_smarty_tpl);?>
";
	    var inline_validation = <?php echo intval($_smarty_tpl->tpl_vars['settings']->value['inline_validation']['enable']);?>
;
	    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['qty_update_option'])&&$_smarty_tpl->tpl_vars['settings']->value['qty_update_option']==0) {?>
		    var update_qty_button = 1;
	    <?php } else { ?>
			var update_qty_button = 0;
	    <?php }?>
	    <?php if (isset($_smarty_tpl->tpl_vars['guest_information']->value)&&$_smarty_tpl->tpl_vars['guest_information']->value!='') {?>
		    var guest_information = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['guest_information']->value);?>
;
	     <?php }?>
            <?php echo urldecode($_smarty_tpl->tpl_vars['settings']->value['custom_js']);?>
    //Variable contains custom js code, escape not required
</script>
<?php $_smarty_tpl->tpl_vars['login_boxes_width'] = new Smarty_variable(intval(50), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['fb_login']['enable']||$_smarty_tpl->tpl_vars['settings']->value['fb_login']['enable']) {?>
    <?php $_smarty_tpl->tpl_vars['login_boxes_width'] = new Smarty_variable(33, null, 0);?>
<?php }?>
<style>

.address-field { display: none; }    
.supercheckout_top_boxes{width:<?php echo intval($_smarty_tpl->tpl_vars['login_boxes_width']->value);?>
%;}

<?php echo urldecode($_smarty_tpl->tpl_vars['settings']->value['custom_css']);?>


    #supercheckout-fieldset .orangebutton {
    background-color:#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color']=='F77219') {?>
    background: linear-gradient(to bottom, #F77219 1%, #FEC6A7 3%, #F77219 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
    <?php } else { ?>
        background : #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
        <?php }?>
    
    border: 1px solid #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 !important;
    color: #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_text_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 !important;
    border-bottom:3px solid #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['border_bottom_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 !important;
    }
    #supercheckout-fieldset .orangebutton:hover {
    background-color:#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color']=='F77219') {?>
    background: linear-gradient(to bottom, #F28941 1%, #FEC6A7 3%, #F28941 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
    <?php }?>
    
    border: 1px solid #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 !important;
    border-bottom:3px solid #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['border_bottom_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 !important;
}
#supercheckout-fieldset .orangebuttonsmall {
    background-color:#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color']=='F77219') {?>
    background: linear-gradient(to bottom, #F77219 1%, #FEC6A7 3%, #F77219 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
    <?php } else { ?>
        background : #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
        <?php }?>
     
    border: 1px solid #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 !important;
    color: #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_text_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 !important;
}
#supercheckout-fieldset .orangebuttonsmall:hover {
    background-color:#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color']=='F77219') {?>
    background: linear-gradient(to bottom, #F28941 1%, #FEC6A7 3%, #F28941 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
    <?php }?>
    
    border: 1px solid #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 !important;
}
#supercheckout-fieldset .orangebuttonapply {
    background-color:#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
; 
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color']=='F77219') {?>
    background: linear-gradient(to bottom, #F77219 1%, #FEC6A7 3%, #F77219 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
    <?php } else { ?>
    background : #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
    <?php }?>
    
     border: 1px solid #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 !important;
     color: #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_text_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 !important;
}
#supercheckout-fieldset .orangebuttonapply:hover {
    background-color:#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color']=='F77219') {?>
    background: linear-gradient(to bottom, #F28941 1%, #FEC6A7 3%, #F28941 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
    <?php }?>
    
    border: 1px solid #<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 !important;
}

</style>



<a style="display:none;" href="javascript:void(0)" id="bancasella_process_payment" ></a>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><span class="navigation_page"><?php echo smartyTranslate(array('s'=>'Your shopping cart','mod'=>'supercheckout'),$_smarty_tpl);?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div id="fb-root"></div>
<div id="supercheckout-empty-page-content" class="supercheckout-empty-page-content" style="display:block">
<?php if (isset($_smarty_tpl->tpl_vars['velsof_errors']->value)&&count($_smarty_tpl->tpl_vars['velsof_errors']->value)>0) {?>

    <div class="permanent-warning">
        <?php  $_smarty_tpl->tpl_vars['err'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['err']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['velsof_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['err']->key => $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
?>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['err']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br>
        <?php } ?></div>
<?php }?>
</div>
<form id="velsof_supercheckout_form" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['supercheckout_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="POST">
    <input type='hidden' name='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['plugin_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
PlaceOrder' value='1' />
<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['html_value']['header'])&&$_smarty_tpl->tpl_vars['settings']->value['html_value']['header']!='') {?>
            <div id="supercheckout_html_content_header">        
                <?php echo html_entity_decode($_smarty_tpl->tpl_vars['settings']->value['html_value']['header']);?>

            </div>
<?php }?>
<div id="submission_progress_overlay" class="submit_progress_disable"></div>
<div id="supercheckout_order_progress_bar">
    <div class="supercheckout_order_progress_status">
        <div id="supercheckout_order_progress_status_text">20%</div>
        <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_image_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
progress.gif" />
                
    </div>
</div>
<fieldset class="group-select" id="supercheckout-fieldset">

    <div class="supercheckout-threecolumns supercheckout-container supercheckout-skin-generic " id="supercheckout-columnleft">
            
        <?php $_smarty_tpl->tpl_vars['layout_name'] = new Smarty_variable('1_column', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['multiplier'] = new Smarty_variable(1, null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==15) {?>
		<?php $_smarty_tpl->tpl_vars['multiplier_3'] = new Smarty_variable(0.895, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['multiplier_2'] = new Smarty_variable(0.935, null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['multiplier_3'] = new Smarty_variable(0.98, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['multiplier_2'] = new Smarty_variable(0.99, null, 0);?>
	<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['layout']==3) {?>
            <?php $_smarty_tpl->tpl_vars['layout_name'] = new Smarty_variable('3_column', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['multiplier'] = new Smarty_variable($_smarty_tpl->tpl_vars['multiplier_3']->value, null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['layout']==2) {?>
            <?php $_smarty_tpl->tpl_vars['layout_name'] = new Smarty_variable('2_column', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['multiplier'] = new Smarty_variable($_smarty_tpl->tpl_vars['multiplier_2']->value, null, 0);?>
        <?php }?>

        <div class="supercheckout-column-left columnleftsort" id="columnleft-1" style="width:<?php echo $_smarty_tpl->tpl_vars['settings']->value['column_width'][$_smarty_tpl->tpl_vars['layout_name']->value][1]*mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['multiplier']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
%"> 
            <div  class="supercheckout-blocks" data-column="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['login'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']);?>
" data-row="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['login'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']);?>
" data-column-inside="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['login'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']);?>
"  >
                <ul class="headingCheckout">
                    <li>
                        <p class="supercheckout-numbers supercheckout-numbers-1">
                            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                                <?php echo smartyTranslate(array('s'=>'Welcome','mod'=>'supercheckout'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['customer_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                            <?php } else { ?>
                                <?php echo smartyTranslate(array('s'=>'Login Options','mod'=>'supercheckout'),$_smarty_tpl);?>

                            <?php }?>
                    </li>
                </ul>
                <div id="checkoutLogin">
                    <div class="supercheckout-checkout-content"></div>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                        <div class="myaccount">
                            <ol class="rectangle-list">                            
                                <li><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'My Account','mod'=>'supercheckout'),$_smarty_tpl);?>
</a></li>
                                <li><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['supercheckout_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&mylogout="><?php echo smartyTranslate(array('s'=>'Logout','mod'=>'supercheckout'),$_smarty_tpl);?>
</a></li>
                                <div class="supercheckout-clear"></div>
                            </ol>
                        </div>
                    <?php } else { ?>
                        <div class="supercheckout-extra-wrap">
                            <?php echo smartyTranslate(array('s'=>'Email','mod'=>'supercheckout'),$_smarty_tpl);?>
<span class="supercheckout-required">*</span><br />
                            <input type="text" id="email" name="supercheckout_email" value="" class="supercheckout-large-field" />
                        </div>
                        <div id="supercheckout-option" style="display:block">
                            <div class="supercheckout-extra-wrap">
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option']==0) {?>
                                    <input type="radio" name="checkout_option" value="0" id="logged_checkout" checked="checked"/>
                                <?php } else { ?>
                                    <input type="radio" name="checkout_option" value="0" id="logged_checkout"/>
                                <?php }?>
                                <label for="logged_checkout"><?php echo smartyTranslate(array('s'=>'Login into shop','mod'=>'supercheckout'),$_smarty_tpl);?>
</label>
                                <br />
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_guest_checkout']==1&&$_smarty_tpl->tpl_vars['guest_enable_by_system']->value) {?>
                            <div class="supercheckout-extra-wrap">
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option']==1) {?>
                                    <input type="radio" name="checkout_option" value="1" id="guest_checkout" checked="checked"/>
                                <?php } else { ?>
                                    <input type="radio" name="checkout_option" value="1" id="guest_checkout"/>
                                <?php }?>
                                <label for="guest_checkout"><?php echo smartyTranslate(array('s'=>'Guest Checkout','mod'=>'supercheckout'),$_smarty_tpl);?>
</label>
                                <br />
                            </div>
                            <?php }?>
                            <div class="supercheckout-extra-wrap">
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option']==2||($_smarty_tpl->tpl_vars['settings']->value['enable_guest_checkout']==0&&$_smarty_tpl->tpl_vars['settings']->value['checkout_option']==1)) {?>
                                    <input type="radio" name="checkout_option" value="2" id="register_checkout" checked="checked" />
                                <?php } else { ?>
                                    <input type="radio" name="checkout_option" value="2" id="register_checkout" />
                                <?php }?>
                                <label for="register_checkout"><?php echo smartyTranslate(array('s'=>'Create an account for later use','mod'=>'supercheckout'),$_smarty_tpl);?>
</label>
                                <br />
                            </div>                    
                        </div>
                        <div id="supercheckout-login-box" style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option']==0) {?>block<?php } else { ?>none<?php }?>;">
                            <div id="supercheckout-login-password-box" class="supercheckout-extra-wrap">
                                <?php echo smartyTranslate(array('s'=>'Password','mod'=>'supercheckout'),$_smarty_tpl);?>
<span class="supercheckout-required">*</span><br />
                                <input type="password" id="password" name="supercheckout_password" onkeydown="checkAction(event)" value="" class="supercheckout-large-field" />
                            </div>
                            <div id="supercheckout-login-action" class="supercheckout-extra-wrap">
                                <div id="forgotpasswordlink"><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['forgotten_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Forgot Password','mod'=>'supercheckout'),$_smarty_tpl);?>
</a></div>
                                <br>
                                <input type="hidden" name="SubmitLogin" value="SubmitLogin" />
                                <input type="button" value="<?php echo smartyTranslate(array('s'=>'Login','mod'=>'supercheckout'),$_smarty_tpl);?>
" id="button-login" class="orangebuttonsmall" /><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_image_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
loading12.gif" style="display:none;"/><br />
                            </div>                            
                        </div>
                        <div id="supercheckout-new-customer-form" style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option']!=0) {?>block<?php } else { ?>none<?php }?>;">
                            <table id="customer_person_information_table" class="supercheckout-form" style="margin-bottom:0 !important;">
                                <tr id="new_customer_password" class="sort_data"  data-percentage="0" style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option']==2) {?>block<?php } else { ?>none<?php }?>;" >
                                    <td>
                                        <div class="inline-fields" style="margin-right: 18px;"><?php echo smartyTranslate(array('s'=>'Password','mod'=>'supercheckout'),$_smarty_tpl);?>
:<span style="display:inline;" class="supercheckout-required">*</span></div>
                                        <div class="supercheckout-large-field">
                                            <input type="password" id="password" name="customer_personal[password]" value="" class="supercheckout-large-field" />
                                        </div>
                                    </td>
                                </tr>
                                <?php  $_smarty_tpl->tpl_vars['cus_info_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cus_info_field']->_loop = false;
 $_smarty_tpl->tpl_vars['cus_per_info'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['customer_personal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cus_info_field']->key => $_smarty_tpl->tpl_vars['cus_info_field']->value) {
$_smarty_tpl->tpl_vars['cus_info_field']->_loop = true;
 $_smarty_tpl->tpl_vars['cus_per_info']->value = $_smarty_tpl->tpl_vars['cus_info_field']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display']==1) {?>
                                        <tr class="sort_data"  data-percentage="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value]['sort_order']);?>
" >
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['cus_per_info']->value=='id_gender') {?>
                                                    <div class="inline-fields" style="margin-right: 18px;"><?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value]['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp1,'mod'=>'supercheckout'),$_smarty_tpl);?>
:<span style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require']==1) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span></div>
                                                    <div class="supercheckout_personal_id_gender inline-fields supercheckout-large-field">
                                                        <div class="">                                                        
                                                            <?php  $_smarty_tpl->tpl_vars['gender'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gender']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['genders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gender']->key => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['gender']->key;
?>
                                                                    <div class="inline-fields" style="width: 50px;">
                                                                        <div class="radio" id="uniform-customer_male_title"><span class="checked"><input type="radio" name="customer_personal[id_gender]" value="<?php echo intval($_smarty_tpl->tpl_vars['gender']->value->id);?>
" id="customer_gender_<?php echo intval($_smarty_tpl->tpl_vars['gender']->value->id);?>
" checked="checked" /></span></div>
                                                                        <label for="customer_gender_<?php echo intval($_smarty_tpl->tpl_vars['gender']->value->id);?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['gender']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
                                                                    </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['cus_per_info']->value=='dob') {?>
                                                    <div class="inline-fields" style="margin-right: 18px;"><?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value]['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp2,'mod'=>'supercheckout'),$_smarty_tpl);?>
:<span style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require']==1) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span></div>                                                    
                                                    <div class="supercheckout_personal_dob inline-fields supercheckout-large-field">
                                                        <div class="">
                                                            <select name="customer_personal[dob_days]">
                                                              <option value="">--</option>
                                                              <?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
                                                                  <option value="<?php echo intval($_smarty_tpl->tpl_vars['day']->value);?>
"><?php echo intval($_smarty_tpl->tpl_vars['day']->value);?>
</option>
                                                              <?php } ?>
                                                            </select>
                                                            <select name="customer_personal[dob_months]">
                                                              <option value="">--</option>
                                                              <?php  $_smarty_tpl->tpl_vars['month_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month_name']->_loop = false;
 $_smarty_tpl->tpl_vars['month_value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month_name']->key => $_smarty_tpl->tpl_vars['month_name']->value) {
$_smarty_tpl->tpl_vars['month_name']->_loop = true;
 $_smarty_tpl->tpl_vars['month_value']->value = $_smarty_tpl->tpl_vars['month_name']->key;
?>
                                                                  <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['month_value']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['month_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                                                              <?php } ?>
                                                            </select>
                                                            <select name="customer_personal[dob_years]">
                                                              <option value="">--</option>
                                                              <?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->_loop = true;
?>
                                                                  <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                                                              <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                    <?php }?>
                                <?php } ?>
                                <?php  $_smarty_tpl->tpl_vars['cus_info_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cus_info_field']->_loop = false;
 $_smarty_tpl->tpl_vars['cus_subs_info'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['customer_subscription']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cus_info_field']->key => $_smarty_tpl->tpl_vars['cus_info_field']->value) {
$_smarty_tpl->tpl_vars['cus_info_field']->_loop = true;
 $_smarty_tpl->tpl_vars['cus_subs_info']->value = $_smarty_tpl->tpl_vars['cus_info_field']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['customer_subscription'][$_smarty_tpl->tpl_vars['cus_subs_info']->value]['guest']['display']==1) {?>
                                        <tr class="sort_data"  data-percentage="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['customer_subscription'][$_smarty_tpl->tpl_vars['cus_subs_info']->value]['sort_order']);?>
" >
                                            <td>
                                                <div class="input-box" >
                                                    <input type="checkbox" class="supercheckout_offers_option" name="customer_personal[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cus_subs_info']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
]" id="customer_personal_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cus_subs_info']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"  <?php if ($_smarty_tpl->tpl_vars['settings']->value['customer_subscription'][$_smarty_tpl->tpl_vars['cus_subs_info']->value]['guest']['checked']==1) {?>checked="checked"<?php }?> >
                                                    <label for="customer_personal_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cus_subs_info']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customer_subscription'][$_smarty_tpl->tpl_vars['cus_subs_info']->value]['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'mod'=>'supercheckout'),$_smarty_tpl);?>
</label>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }?>
                                <?php } ?>
                            </table>
                        </div>
                        <div id="social_login_block">
			    <?php if ($_smarty_tpl->tpl_vars['settings']->value['fb_login']['enable']!=1&&$_smarty_tpl->tpl_vars['settings']->value['google_login']['enable']!=1) {?>
				<div class="orSeparator vss_socialloginizer_buttons"><span><?php echo smartyTranslate(array('s'=>'OR','mod'=>'supercheckout'),$_smarty_tpl);?>
</span></div> <h3 class="vss_socialloginizer_buttons" id="ivss_socialloginizer_buttons"><?php echo smartyTranslate(array('s'=>'Sign in with','mod'=>'supercheckout'),$_smarty_tpl);?>
</h3>
			    <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['fb_login']['enable']==1||$_smarty_tpl->tpl_vars['settings']->value['google_login']['enable']==1) {?>
                                <div class="orSeparator"><span><?php echo smartyTranslate(array('s'=>'OR','mod'=>'supercheckout'),$_smarty_tpl);?>
</span></div>
                                <h3><?php echo smartyTranslate(array('s'=>'Sign in with','mod'=>'supercheckout'),$_smarty_tpl);?>
</h3>
                                <div class="socialNetwork">
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['fb_login']['enable']==1) {?>
					<?php if ($_smarty_tpl->tpl_vars['settings']->value['social_login_popup']['enable']==1) {?>
                                        <a onclick="return !window.open(this.href, 'popup', 'width=450,height=300,left=500,top=500')" target="_blank" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['supercheckout_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&myfbLogin" class="fbButton" id="fb-auth" ></a>
					<?php } else { ?>
					<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['supercheckout_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&myfbLogin" class="fbButton" id="fb-auth" ></a>
					<?php }?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['google_login']['enable']==1) {?>
					<?php if ($_smarty_tpl->tpl_vars['settings']->value['social_login_popup']['enable']==1) {?>
						<a onclick="return !window.open(this.href, 'popup', 'width=500,height=500,left=500,top=500')" target="_blank" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['supercheckout_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&myGoogleLogin" class="googleButton" ></a>
					<?php } else { ?>
						<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['supercheckout_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&myGoogleLogin" class="googleButton" ></a>
					<?php }?>
                                    <?php }?>
                                    <div class="supercheckout-clear"></div>
                                </div>
                            <?php }?>
                        </div>
                    <?php }?>
                </div>
                    
            </div>
            <div class="supercheckout-blocks" data-column="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']);?>
" data-row="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']);?>
" data-column-inside="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']);?>
">
                <?php if ($_smarty_tpl->tpl_vars['isvirtualcart']->value==true) {?>
		<div id="checkoutShippingAddress" style="display:none;">
		    <?php } else { ?>
		    <div id="checkoutShippingAddress">
			<?php }?>
		<div class="supercheckout-checkout-content"></div>
                
                    <ul>
                        <li>
                            <p class="supercheckout-numbers supercheckout-numbers-ship"><?php echo smartyTranslate(array('s'=>'Delivery Address','mod'=>'supercheckout'),$_smarty_tpl);?>
</p>
                        </li>
                    </ul>
                    <?php if ($_smarty_tpl->tpl_vars['addresses']->value) {?>
                    <div class="supercheckout-extra-wrap">
                        <input type="radio" name="shipping_address_value" value="0" id="shipping-address-existing" checked="checked" />
                        <label for="shipping-address-existing"><?php echo smartyTranslate(array('s'=>'Use Existing Address','mod'=>'supercheckout'),$_smarty_tpl);?>
</label>
                    </div>
                    <div id="shipping-existing" class="styled-select">
                        <select name="shipping_address_id" style="width: 92%; margin-bottom: 15px;">
                            <?php  $_smarty_tpl->tpl_vars['shipping_addr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping_addr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping_addr']->key => $_smarty_tpl->tpl_vars['shipping_addr']->value) {
$_smarty_tpl->tpl_vars['shipping_addr']->_loop = true;
?>                                
                                <option value="<?php echo intval($_smarty_tpl->tpl_vars['shipping_addr']->value['id_address']);?>
" <?php if ($_smarty_tpl->tpl_vars['shipping_addr']->value['id_address']==$_smarty_tpl->tpl_vars['id_address_invoice']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_addr']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select>
                        <div id="delivery_address_detail" class="supercheckout_address_detail"></div>
                    </div>
                    <div class="supercheckout-extra-wrap">
                        <p>
                            <input type="radio" name="shipping_address_value" value="1" id="shipping-address-new" />
                            <label for="shipping-address-new"><?php echo smartyTranslate(array('s'=>'Use New Address','mod'=>'supercheckout'),$_smarty_tpl);?>
</label>
                        </p>
                    </div>
                    <?php }?>
                    <div id="shipping-new"style="display: <?php if ($_smarty_tpl->tpl_vars['addresses']->value) {?>none<?php } else { ?>block<?php }?>;">
                        <table class="supercheckout-form" id="shipping_address_table">
                            <?php $_smarty_tpl->tpl_vars['display_row'] = new Smarty_variable('', null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['p_address_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_address_field']->_loop = false;
 $_smarty_tpl->tpl_vars['p_address_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['shipping_address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_address_field']->key => $_smarty_tpl->tpl_vars['p_address_field']->value) {
$_smarty_tpl->tpl_vars['p_address_field']->_loop = true;
 $_smarty_tpl->tpl_vars['p_address_key']->value = $_smarty_tpl->tpl_vars['p_address_field']->key;
?>
                                <?php $_smarty_tpl->tpl_vars['display_row'] = new Smarty_variable('', null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display']==1||(isset($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['conditional'])&&$_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['conditional']==1)) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='dni'&&!$_smarty_tpl->tpl_vars['need_dni']->value) {?>
                                        <?php $_smarty_tpl->tpl_vars['display_row'] = new Smarty_variable('display:none;', null, 0);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='vat_number'&&!$_smarty_tpl->tpl_vars['need_vat']->value) {?>
                                        <?php $_smarty_tpl->tpl_vars['display_row'] = new Smarty_variable('display:none;', null, 0);?>
                                    <?php }?>
                                    <?php if (($_smarty_tpl->tpl_vars['p_address_key']->value=='postcode'||$_smarty_tpl->tpl_vars['p_address_key']->value=='id_country'||$_smarty_tpl->tpl_vars['p_address_key']->value=='id_state'||$_smarty_tpl->tpl_vars['p_address_key']->value=='alias')&&!$_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require']&&!$_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display']) {?>
                                        <?php $_smarty_tpl->tpl_vars['display_row'] = new Smarty_variable('display:none;', null, 0);?>
                                    <?php }?>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='address1'||$_smarty_tpl->tpl_vars['p_address_key']->value=='address2'||$_smarty_tpl->tpl_vars['p_address_key']->value=='id_state'||$_smarty_tpl->tpl_vars['p_address_key']->value=='number'||$_smarty_tpl->tpl_vars['p_address_key']->value=='other'||$_smarty_tpl->tpl_vars['p_address_key']->value=='city') {?>
                                        <?php $_smarty_tpl->tpl_vars['extraFieldClass'] = new Smarty_variable('address-field', null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars['extraFieldClass'] = new Smarty_variable('', null, 0);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='id_state') {?>
                                        <script>var show_shipping_state = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;</script>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='postcode') {?>
					<script>var show_shipping_postcode = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;</script>
                                    <tr class="sort_data" id="shipping_post_code" data-percentage="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['sort_order']);?>
" style="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['display_row']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" >
				    <?php } else { ?>
                                    <tr class="sort_data <?php echo $_smarty_tpl->tpl_vars['extraFieldClass']->value;?>
" data-percentage="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['sort_order']);?>
" style="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['display_row']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" >
                                       <?php }?>
				       <td><?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp3,'mod'=>'supercheckout'),$_smarty_tpl);?>
:<span style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require']==1) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span>
                                            <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='id_country'||$_smarty_tpl->tpl_vars['p_address_key']->value=='id_state') {?>
                                                <select id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="shipping_address[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
]" class="supercheckout-large-field">
                                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='id_country') {?>
                                                        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
                                                            <option value="<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
" <?php if ($_smarty_tpl->tpl_vars['country']->value['id_country']==$_smarty_tpl->tpl_vars['default_country']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>                                        
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <option value="0"><?php echo smartyTranslate(array('s'=>'Select State','mod'=>'supercheckout'),$_smarty_tpl);?>
</option>
                                                    <?php }?>                            
                                                </select>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value=='postcode') {?>
                                                <input type="text" class="form-control" name="postcode_fk" id="postcode_fk" value="<?php if (isset($_POST['postcode'])) {?><?php echo $_POST['postcode'];?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->postcode)) {?><?php echo $_smarty_tpl->tpl_vars['address']->value->postcode;?>
<?php }?><?php }?>"/>
                                                <input type="hidden" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="shipping_address[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
]" />
                                            <?php } else { ?>
                                                <input type="text" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="shipping_address[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
]" value="" class="supercheckout-large-field" />
                                            <?php }?>

                                        </td>
                                    </tr>
                                <?php }?>
                            <?php } ?>    
                        </table>
                    </div>
                    <ul>
                        <li>
                            <div class="input-box input-different-shipping" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['show_use_delivery_for_payment_add'][$_smarty_tpl->tpl_vars['user_type']->value]) {?> style="display:none;" <?php }?>>
                                <input type="checkbox" name="use_for_invoice" id="use_for_invoice" <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_delivery_for_payment_add'][$_smarty_tpl->tpl_vars['user_type']->value]) {?>checked="checked"<?php }?> >
                                <label for="use_for_invoice"><b><?php echo smartyTranslate(array('s'=>'Same invoice address','mod'=>'supercheckout'),$_smarty_tpl);?>
</b></label>
                            </div>
                        </li>
                    </ul>
                </div>                    

            </div>
            <div  class="supercheckout-blocks"  data-column="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']);?>
" data-row="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']);?>
" data-column-inside="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']);?>
">
                <div id="checkoutBillingAddress" style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_delivery_for_payment_add'][$_smarty_tpl->tpl_vars['user_type']->value]) {?>none<?php } else { ?>block<?php }?>;">
                    <ul>
                        <li>
                            <p class="supercheckout-numbers supercheckout-numbers-2"><?php echo smartyTranslate(array('s'=>'Invoice Address','mod'=>'supercheckout'),$_smarty_tpl);?>
</p>
                        </li>
                    </ul>
                    <div class="supercheckout-checkout-content"></div>
                    <?php if ($_smarty_tpl->tpl_vars['addresses']->value) {?> 
                    <div class="supercheckout-extra-wrap">
                        <input type="radio" name="payment_address_value" value="0" id="payment-address-existing" checked="checked" />
                        <label for="payment-address-existing"><?php echo smartyTranslate(array('s'=>'Use Existing Address','mod'=>'supercheckout'),$_smarty_tpl);?>
</label>
                    </div>    
                    <div id="payment-existing">
                        <select name="payment_address_id" style="width: 92%; margin-bottom: 15px;">
                            <?php  $_smarty_tpl->tpl_vars['payment_addr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_addr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_addr']->key => $_smarty_tpl->tpl_vars['payment_addr']->value) {
$_smarty_tpl->tpl_vars['payment_addr']->_loop = true;
?>                                
                                <option value="<?php echo intval($_smarty_tpl->tpl_vars['payment_addr']->value['id_address']);?>
" <?php if ($_smarty_tpl->tpl_vars['payment_addr']->value['id_address']==$_smarty_tpl->tpl_vars['id_address_invoice']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_addr']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select>
                        <div id="invoice_address_detail" class="supercheckout_address_detail"></div>
                    </div>
                    <div class="supercheckout-extra-wrap">
                        <p>
                            <input type="radio" name="payment_address_value" value="1" id="payment-address-new" />
                            <label for="payment-address-new"><?php echo smartyTranslate(array('s'=>'Use New Address','mod'=>'supercheckout'),$_smarty_tpl);?>
</label>
                        </p>
                    </div>
                    <?php }?>
                    <div id="payment-new" style="display: <?php if ($_smarty_tpl->tpl_vars['addresses']->value) {?>none<?php } else { ?>block<?php }?>;">
                        <table id="payment_address_table" class="supercheckout-form">
                            <?php $_smarty_tpl->tpl_vars['display_row'] = new Smarty_variable('', null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['p_address_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_address_field']->_loop = false;
 $_smarty_tpl->tpl_vars['p_address_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['payment_address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_address_field']->key => $_smarty_tpl->tpl_vars['p_address_field']->value) {
$_smarty_tpl->tpl_vars['p_address_field']->_loop = true;
 $_smarty_tpl->tpl_vars['p_address_key']->value = $_smarty_tpl->tpl_vars['p_address_field']->key;
?>
                                <?php $_smarty_tpl->tpl_vars['display_row'] = new Smarty_variable('', null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display']==1||(isset($_smarty_tpl->tpl_vars['settings']->value['payment_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['conditional'])&&$_smarty_tpl->tpl_vars['settings']->value['payment_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['conditional']==1)) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='dni'&&!$_smarty_tpl->tpl_vars['need_dni']->value) {?>
                                        <?php $_smarty_tpl->tpl_vars['display_row'] = new Smarty_variable('display:none;', null, 0);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='vat_number'&&!$_smarty_tpl->tpl_vars['need_vat']->value) {?>
                                        <?php $_smarty_tpl->tpl_vars['display_row'] = new Smarty_variable('display:none;', null, 0);?>
                                    <?php }?>
                                    <?php if (($_smarty_tpl->tpl_vars['p_address_key']->value=='postcode'||$_smarty_tpl->tpl_vars['p_address_key']->value=='id_country'||$_smarty_tpl->tpl_vars['p_address_key']->value=='id_state'||$_smarty_tpl->tpl_vars['p_address_key']->value=='alias')&&!$_smarty_tpl->tpl_vars['settings']->value['payment_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require']&&!$_smarty_tpl->tpl_vars['settings']->value['payment_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display']) {?>
                                        <?php $_smarty_tpl->tpl_vars['display_row'] = new Smarty_variable('display:none;', null, 0);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='id_state') {?>
					<script>var show_payment_state = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['payment_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;</script>                                        
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='postcode') {?>
					<script>var show_payment_postcode = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['payment_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;</script>
                                    <tr class="sort_data" id="payment_post_code" data-percentage="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['payment_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['sort_order']);?>
" style="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['display_row']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" >
				    <?php } else { ?>
                                    <tr class="sort_data" data-percentage="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['payment_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['sort_order']);?>
" style="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['display_row']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" >
                                       <?php }?> <td><?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['payment_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp4,'mod'=>'supercheckout'),$_smarty_tpl);?>
:<span style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require']==1) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span>
                                            <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='id_country'||$_smarty_tpl->tpl_vars['p_address_key']->value=='id_state') {?>
                                                <select name="payment_address[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
]" class="supercheckout-large-field">
                                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value=='id_country') {?>
                                                        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
                                                            <option value="<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
" <?php if ($_smarty_tpl->tpl_vars['country']->value['id_country']==$_smarty_tpl->tpl_vars['default_country']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>                                        
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <option value="0"><?php echo smartyTranslate(array('s'=>'Select State','mod'=>'supercheckout'),$_smarty_tpl);?>
</option>
                                                    <?php }?>                            
                                                </select>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value=='dob') {?>
                                                <div class="supercheckout_dob_box supercheckout-large-field">
                                                    <select name="payment_address[dob_days]">
                                                      <option value="">--</option>
                                                      <?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
                                                          <option value="<?php echo intval($_smarty_tpl->tpl_vars['day']->value);?>
"><?php echo intval($_smarty_tpl->tpl_vars['day']->value);?>
</option>
                                                      <?php } ?>
                                                    </select>
                                                    <select name="payment_address[dob_months]">
                                                      <option value="">--</option>
                                                      <?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
?>
                                                          <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['month']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['month']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                                                      <?php } ?>
                                                    </select>
                                                    <select name="payment_address[dob_years]">
                                                      <option value="">--</option>
                                                      <?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->_loop = true;
?>
                                                          <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                                                      <?php } ?>
                                                    </select>
                                                </div>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value=='other') {?>
                                                <textarea name="payment_address[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
]" value="" class="supercheckout-large-field" style="width: 96%;"></textarea>
                                            <?php } else { ?>
                                                <input type="text" name="payment_address[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
]" value="" class="supercheckout-large-field" />
                                            <?php }?>

                                        </td>
                                    </tr>
                                <?php }?>
                            <?php } ?>                            
                        </table>
                    </div>
                </div>
                <br/>
            </div>            
            
            <div style="<?php if ($_smarty_tpl->tpl_vars['settings']->value['shipping_method']['enable']==0) {?>display:none;<?php }?>"  class="supercheckout-blocks" data-column="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']);?>
" data-row="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']);?>
" data-column-inside="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']);?>
" >
                
                <ul>
                    <li style="display:inline;">
                        <p class="supercheckout-numbers supercheckout-numbers-3"><?php echo smartyTranslate(array('s'=>'Delivery Method','mod'=>'supercheckout'),$_smarty_tpl);?>
</p>
                        <div class="loader" id="shippingMethodLoader"></div>
                    </li>                
                </ul>
                               
                <div id="shipping-method">
		    <script>
			<?php if (isset($_smarty_tpl->tpl_vars['IS_VIRTUAL_CART']->value)&&$_smarty_tpl->tpl_vars['IS_VIRTUAL_CART']->value) {?>
				var is_cart_virtual = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['IS_VIRTUAL_CART']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
			<?php }?>
			var carriers_count = <?php if (isset($_smarty_tpl->tpl_vars['carriers_count']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carriers_count']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>0<?php }?>;
		    </script>
                    <?php if (isset($_smarty_tpl->tpl_vars['IS_VIRTUAL_CART']->value)&&$_smarty_tpl->tpl_vars['IS_VIRTUAL_CART']->value) {?>
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
		    
                </div>
                    <!-- added by Gaurav pal jan 14 2016, to make it compatible with gls shipping method -->
                    <div id="pickup-info"></div> 
                
            </div>
            
            <div style="<?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_method']['enable']==0) {?>display:none;<?php }?>" class="supercheckout-blocks" data-column="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']);?>
" data-row="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']);?>
" data-column-inside="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']);?>
">
                <ul>
                    <li>
                        <p class="supercheckout-numbers supercheckout-numbers-4"><?php echo smartyTranslate(array('s'=>'Payment Method','mod'=>'supercheckout'),$_smarty_tpl);?>
</p>
                        <div class="loader" id="paymentMethodLoader"></div>
                    </li>                
                </ul>

                <div id="payment-method">
                    <?php if (isset($_smarty_tpl->tpl_vars['payment_methods']->value['not_required'])) {?>
				<div class='supercheckout-checkout-content' style='display:block'>
				    <div class='permanent-warning not-required-msg'><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_methods']->value['not_required'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
				</div>
			<?php } else { ?>
				<div class="supercheckout-checkout-content" style="display:block">
				<?php if (isset($_smarty_tpl->tpl_vars['payment_methods']->value['warning'])&&$_smarty_tpl->tpl_vars['payment_methods']->value['warning']!='') {?>
				    <div class="permanent-warning"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_methods']->value['warning'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
				<?php }?>
				</div>
				<?php if (isset($_smarty_tpl->tpl_vars['payment_methods']->value['methods'])&&count($_smarty_tpl->tpl_vars['payment_methods']->value['methods'])>0) {?>                 
				<table class="radio">
				    <?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value['methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['payment_method']->value['name']=='codr_klarnacheckout') {?>
						<tr class="highlight">
						    <td style="display: inline;">
							<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',null,null,'klarna_supercheckout=true'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="orangebuttonapply">Klarna Checkout</a>
						    </td>
						</tr>
                        <?php } elseif ($_smarty_tpl->tpl_vars['payment_method']->value['name']=='mollie') {?>
                         <?php  $_smarty_tpl->tpl_vars['additional'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['additional']->_loop = false;
 $_smarty_tpl->tpl_vars['additional_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payment_method']->value['additional']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['additional']->key => $_smarty_tpl->tpl_vars['additional']->value) {
$_smarty_tpl->tpl_vars['additional']->_loop = true;
 $_smarty_tpl->tpl_vars['additional_id']->value = $_smarty_tpl->tpl_vars['additional']->key;
?>
                             <tr class="highlight">
						    <td>
							<input type="radio" name="payment_method" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['additional']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['payment_method']->value['id_module']==$_smarty_tpl->tpl_vars['selected_payment_method']->value&&$_smarty_tpl->tpl_vars['additional_id']->value=='208_0') {?>checked="checked"<?php }?> />
							<input type="hidden" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_name" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['additional']->value['url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
						    </td>
						    <td>
							<label id="payment_lbl_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" for="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['additional']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
							    <?php if ($_smarty_tpl->tpl_vars['display_payment_style']->value!=0) {?>
								<?php if (isset($_smarty_tpl->tpl_vars['additional']->value['img'])&&$_smarty_tpl->tpl_vars['additional']->value['img']!='') {?>
								    <img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['additional']->value['img'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
' alt='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['additional']->value['description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'  width="92" height="40"/><?php if ($_smarty_tpl->tpl_vars['display_payment_style']->value!=2) {?><br><?php }?>
								<?php }?>
							    <?php }?>

							    <?php if ($_smarty_tpl->tpl_vars['display_payment_style']->value!=2) {?>
								<span id='payment_method_name_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['additional']->value['description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
							    <?php }?>
							</label>
						    </td>
						</tr>
                             <?php } ?>
					<?php } else { ?>
						<tr class="highlight">
						    <td>
							<input type="radio" name="payment_method" value="<?php echo intval($_smarty_tpl->tpl_vars['payment_method']->value['id_module']);?>
" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['payment_method']->value['id_module']==$_smarty_tpl->tpl_vars['selected_payment_method']->value) {?>checked="checked"<?php }?> />
							<input type="hidden" id="<?php echo intval($_smarty_tpl->tpl_vars['payment_method']->value['id_module']);?>
_name" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['payment_module_url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
						    </td>
						    <td>
							<label id="payment_lbl_<?php echo intval($_smarty_tpl->tpl_vars['payment_method']->value['id_module']);?>
" for="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
							    <?php if ($_smarty_tpl->tpl_vars['display_payment_style']->value!=0) {?>
								<?php if ($_smarty_tpl->tpl_vars['payment_method']->value['payment_image_url']!='') {?>
								    <img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['payment_image_url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
' alt='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['display_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
' <?php if (isset($_smarty_tpl->tpl_vars['payment_method']->value['width'])&&$_smarty_tpl->tpl_vars['payment_method']->value['width']!='') {?>width='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'<?php } else { ?> width="92"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['payment_method']->value['height'])&&$_smarty_tpl->tpl_vars['payment_method']->value['height']!='') {?>height='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'<?php } else { ?> height="20"<?php }?>/><?php if ($_smarty_tpl->tpl_vars['display_payment_style']->value!=2) {?><br><?php }?>
								<?php }?>
							    <?php }?>

							    <?php if ($_smarty_tpl->tpl_vars['display_payment_style']->value!=2) {?>
								<span id='payment_method_name_<?php echo intval($_smarty_tpl->tpl_vars['payment_method']->value['id_module']);?>
'><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['display_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
							    <?php }?>
							</label>
						    </td>
						</tr>
					<?php }?>
				    <?php } ?>
				</table>
				<div id="selected_payment_method_html"> </div>
				<div id="payment_method_html" style="display:none;">
				    <?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value['methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
?>
				    <div id="payment_method_<?php echo intval($_smarty_tpl->tpl_vars['payment_method']->value['id_module']);?>
">
					<?php echo $_smarty_tpl->tpl_vars['payment_method']->value['html'];?>

				    </div>
				    <?php } ?>
				</div>
				<?php } else { ?>
				    <div class="supercheckout-checkout-content" style="display:block">
					<div class="permanent-warning"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_methods']->value['warning'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
				    </div>
				<?php }?>
			<?php }?>
                </div>
                
            </div>
            <div class="supercheckout-blocks confirmCheckoutBack" data-column="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['cart'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']);?>
" data-row="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['cart'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']);?>
" data-column-inside="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['cart'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']);?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['display_cart']==1) {?>block<?php } else { ?>none<?php }?>;">
                <ul>
                    <li>
                        <p class="supercheckout-numbers supercheckout-check"><?php echo smartyTranslate(array('s'=>'Confirm Your Order','mod'=>'supercheckout'),$_smarty_tpl);?>
</p>
                        <div class="loader" id="confirmLoader"></div>
                    </li>
                </ul>
                <div id="confirmCheckout">
                    <div id="cart_update_warning" class="supercheckout-checkout-content"></div>
                    <?php if (!isset($_smarty_tpl->tpl_vars['empty']->value)) {?>
                    <table class="supercheckout-summary">
                        <thead>
                            <tr>                                
                                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-name"><?php echo smartyTranslate(array('s'=>'Description','mod'=>'supercheckout'),$_smarty_tpl);?>
</th>
                                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-model"><?php echo smartyTranslate(array('s'=>'Model','mod'=>'supercheckout'),$_smarty_tpl);?>
</th>
                                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-qty" style="text-align:center;"><?php echo smartyTranslate(array('s'=>'Qty','mod'=>'supercheckout'),$_smarty_tpl);?>
</th>
                                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-total"><?php echo smartyTranslate(array('s'=>'Price','mod'=>'supercheckout'),$_smarty_tpl);?>
</th>
                                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-total"><?php echo smartyTranslate(array('s'=>'Total','mod'=>'supercheckout'),$_smarty_tpl);?>
</th>
                                <th class="supercheckout-qty"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_smarty_tpl->tpl_vars['image_display'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['odd'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['have_non_virtual_products'] = new Smarty_variable(false, null, 0);?>
                            <!-- Product loop start -->
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual']==0) {?>
                                        <?php $_smarty_tpl->tpl_vars['have_non_virtual_products'] = new Smarty_variable(true, null, 0);?>
                                <?php }?>
                                <?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable(0, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['odd'] = new Smarty_variable(($_smarty_tpl->tpl_vars['odd']->value+1)%2, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['ignoreProductLast'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])||count($_smarty_tpl->tpl_vars['gift_products']->value), null, 0);?>
                                <tr id="product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
                                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-name">

                                        <div >
                                            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                                                <?php $_smarty_tpl->tpl_vars['image_display'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_image']['logged']['display'], null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars['image_display'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_image']['guest']['display'], null, 0);?>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['image_display']->value==1) {?>
                                                <img width='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['width'], ENT_QUOTES, 'UTF-8', true);?>
' height='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['height'], ENT_QUOTES, 'UTF-8', true);?>
' src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
' />
						<br>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                            <?php } else { ?>
						<a data-toggle="popover" data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-content="<img width='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['width'], ENT_QUOTES, 'UTF-8', true);?>
' height='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['height'], ENT_QUOTES, 'UTF-8', true);?>
' src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
' />" data-placement="right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                           
                                            <?php }?>
                                            <?php if ((!isset($_smarty_tpl->tpl_vars['product']->value['instructions'])||!$_smarty_tpl->tpl_vars['product']->value['instructions'])&&isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']) {?>
                                            <br />
                                            &nbsp;<small><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true);?>
</a></small>
                                            <?php }?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['instructions'])&&$_smarty_tpl->tpl_vars['product']->value['instructions']) {?><br />
                                            &nbsp;<small><a href="<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['instructions'], 'htmlspecialchars', 'UTF-8');?>
</a></small><?php }?>
                                        </div>
                                    </td>
                                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-model">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                                    </td>
                                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-qty supercheckout-product-qty-input" >
                                        <?php if (isset($_smarty_tpl->tpl_vars['cannotModify']->value)&&$_smarty_tpl->tpl_vars['cannotModify']->value==1) {?>
                                            <span>
                                                <?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'], ENT_QUOTES, 'UTF-8', true);?>

                                                <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-htmlspecialchars($_smarty_tpl->tpl_vars['quantityDisplayed']->value, ENT_QUOTES, 'UTF-8', true);?>

                                                <?php }?>
                                            </span>
                                        <?php } else { ?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])&&$_smarty_tpl->tpl_vars['quantityDisplayed']->value==0) {?>
                                                    <span id="cart_quantity_custom_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" ><?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
</span>
                                            <?php }?>
                                            <?php if (!isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])||$_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>
                                                <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo intval((count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])));?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-intval($_smarty_tpl->tpl_vars['quantityDisplayed']->value);?>
<?php }?>" name="quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
_hidden" />
						<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['qty_update_option'])&&$_smarty_tpl->tpl_vars['settings']->value['qty_update_option']==0) {?>
							<div><a href="javascript:void(0)" class="cart_quantity_down qty-btn" onclick="upQty('quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
')"><span class="plus-span">+</span></a></div>
							<div><input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-intval($_smarty_tpl->tpl_vars['quantityDisplayed']->value);?>
<?php }?>" ></div>
						
							<div><a href="javascript:void(0)" class="cart_quantity_down qty-btn" onclick="downQty('quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
')" ><span class="minus-span">-</span></a></div>
								<?php } else { ?>
								
					<input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-intval($_smarty_tpl->tpl_vars['quantityDisplayed']->value);?>
<?php }?>" ><br>
                                                <a href="javascript:void(0)" id="demo_2_s" title="<?php echo smartyTranslate(array('s'=>'update quantity','mod'=>'supercheckout'),$_smarty_tpl);?>
" onclick="updateQty('quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
')" ><small><?php echo smartyTranslate(array('s'=>'Update','mod'=>'supercheckout'),$_smarty_tpl);?>
</small></a>
						<?php }?>
                                            <?php }?>
                                        <?php }?>
                                    </td>
                                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-unit-total">
                                        <span class="price product_individual_price_wrapper" id="product_price_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>_nocustom<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
                                                        <span class="gift-icon"><?php echo smartyTranslate(array('s'=>'Gift','mod'=>'supercheckout'),$_smarty_tpl);?>
!</span>
                                                <?php } else { ?>                                                
                                                    <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                                        <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_wt']),$_smarty_tpl);?>
</span>
                                                    <?php } else { ?>
                                                        <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
</span>
                                                    <?php }?>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product']->value['is_discounted']) {?>
                                                        <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_type']=='amount') {?>
                                                                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['price_wt']-$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']), null, 0);?>
                                                                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value->sign, null, 0);?>
                                                            <?php } else { ?>
                                                                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']-$_smarty_tpl->tpl_vars['product']->value['price_wt'])/$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount'])*100*-1, null, 0);?>
                                                                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable('%', null, 0);?>
                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_type']=='amount') {?>
                                                                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['price']-$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']), null, 0);?>
                                                                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value->sign, null, 0);?>
                                                            <?php } else { ?>
                                                                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']-$_smarty_tpl->tpl_vars['product']->value['price'])/$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount'])*100*-1, null, 0);?>
                                                                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable('%', null, 0);?>
                                                            <?php }?>
                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['symbol']->value=='%') {?>
                                                            <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(sprintf("%d",round($_smarty_tpl->tpl_vars['priceReduction']->value)), null, 0);?>
                                                        <?php } else { ?>
                                                            <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(sprintf("%.2f",$_smarty_tpl->tpl_vars['priceReduction']->value), null, 0);?>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['priceReduction']->value!=0) {?>  
                                                        <br>
                                                        <span class="price-percent-reduction-description">
                                                                <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['priceReduction']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['symbol']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                        </span>
                                                        <span class="supercheckout-old-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']),$_smarty_tpl);?>
</span>
                                                        <?php }?>
                                                    <?php }?>
                                                <?php }?>
                                        </span>
                                    </td>
                                    <td id="total_product_price_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>_nocustom<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-total">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
                                                <span class="gift-icon"><?php echo smartyTranslate(array('s'=>'Gift','mod'=>'supercheckout'),$_smarty_tpl);?>
!</span>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
                                                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization']),$_smarty_tpl);?>
<?php }?>
                                            <?php } else { ?>
                                                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_wt']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total']),$_smarty_tpl);?>
<?php }?>
                                            <?php }?>
                                        <?php }?>
                                    </td>
                                    <td class="supercheckout-qty">
                                    <?php if (!isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
                                        <a href="javascript://" id="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" onclick="deleteProductFromSummary(this.id);" class="removeProduct supercheckout-product-delete"><div  title="Delete"></div></a>
                                    <?php }?>
                                    </td>
                                </tr>
                                <?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
                                    <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_smarty_tpl->tpl_vars['id_customization'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['customization']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['customization']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
 $_smarty_tpl->tpl_vars['id_customization']->value = $_smarty_tpl->tpl_vars['customization']->key;
 $_smarty_tpl->tpl_vars['customization']->iteration++;
 $_smarty_tpl->tpl_vars['customization']->last = $_smarty_tpl->tpl_vars['customization']->iteration === $_smarty_tpl->tpl_vars['customization']->total;
?>
                                        <tr id="product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" class="product_customization_for_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if ($_smarty_tpl->tpl_vars['odd']->value) {?> odd<?php } else { ?> even<?php }?> customization alternate_item <?php if ($_smarty_tpl->tpl_vars['product']->last&&$_smarty_tpl->tpl_vars['customization']->last&&!count($_smarty_tpl->tpl_vars['gift_products']->value)) {?>last_item<?php }?>">
                                            <td colspan="2">
                                                <?php  $_smarty_tpl->tpl_vars['custom_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['custom_data']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['custom_data']->key => $_smarty_tpl->tpl_vars['custom_data']->value) {
$_smarty_tpl->tpl_vars['custom_data']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['custom_data']->key;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_FILE']->value) {?>
                                                        <div class="customizationUploaded">
                                                            <ul class="customizationUploaded">
                                                                <?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
                                                                    <li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pic_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['picture']->value['value'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_small" alt="" class="customizationUploaded" /></li>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value) {?>
                                                        <ul class="typedText">
                                                            <?php  $_smarty_tpl->tpl_vars['textField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['textField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['textField']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['textField']->key => $_smarty_tpl->tpl_vars['textField']->value) {
$_smarty_tpl->tpl_vars['textField']->_loop = true;
 $_smarty_tpl->tpl_vars['textField']->index++;
?>
                                                                <li>
                                                                    <?php if ($_smarty_tpl->tpl_vars['textField']->value['name']) {?>
                                                                            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['textField']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                                    <?php } else { ?>
                                                                            <?php echo smartyTranslate(array('s'=>'Text #','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['textField']->index+mb_convert_encoding(htmlspecialchars(1, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                                    <?php }?>
                                                                    : <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['textField']->value['value'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php }?>
                                                <?php } ?>                                                
                                            </td>
                                            <td class="supercheckout-qty">                                                
                                                <?php if (isset($_smarty_tpl->tpl_vars['cannotModify']->value)&&$_smarty_tpl->tpl_vars['cannotModify']->value==1) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                                                        <span><?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['id_address_delivery']->value][$_smarty_tpl->tpl_vars['id_customization']->value]['quantity'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['quantityDisplayed']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></span>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->tpl_vars['tempDelId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_address_delivery'], null, 0);?>
                                                        <span><?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['tempDelId']->value][$_smarty_tpl->tpl_vars['id_customization']->value]['quantity'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['quantityDisplayed']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></span>
                                                    <?php }?>                                                    
                                                <?php } else { ?>
                                                    <input type="hidden" value="<?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo intval((count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])));?>
<?php } else { ?><?php echo intval(($_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value));?>
<?php }?>" name="quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
_hidden" />
						    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['qty_update_option'])&&$_smarty_tpl->tpl_vars['settings']->value['qty_update_option']==0) {?>
							    <div>   <a href="javascript:void(0)" class="cart_quantity_down qty-btn" onclick="upQty('quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
')"><span class="plus-span">+</span></a></div>
                                                <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
							<div>  <input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo intval($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['id_address_delivery']->value][$_smarty_tpl->tpl_vars['id_customization']->value]['quantity']);?>
<?php } else { ?><?php echo intval(($_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value));?>
<?php }?>" ></div>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->tpl_vars['tempDelId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_address_delivery'], null, 0);?>
							<div> <input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo intval($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['tempDelId']->value][$_smarty_tpl->tpl_vars['id_customization']->value]['quantity']);?>
<?php } else { ?><?php echo intval(($_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value));?>
<?php }?>" ></div>
                                                    <?php }?>
						
						<div><a href="javascript:void(0)" class="cart_quantity_down qty-btn" onclick="downQty('quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
')" ><span class="minus-span">-</span></a></div>
								<?php } else { ?>
								
					<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                                                        <input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo intval($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['id_address_delivery']->value][$_smarty_tpl->tpl_vars['id_customization']->value]['quantity']);?>
<?php } else { ?><?php echo intval(($_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value));?>
<?php }?>" ><br>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->tpl_vars['tempDelId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_address_delivery'], null, 0);?>
                                                        <input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo intval($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['tempDelId']->value][$_smarty_tpl->tpl_vars['id_customization']->value]['quantity']);?>
<?php } else { ?><?php echo intval(($_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value));?>
<?php }?>" ><br>
                                                    <?php }?>
                                                    <a href="javascript:void(0)" id="demo_2_s" title="<?php echo smartyTranslate(array('s'=>'update quantity','mod'=>'supercheckout'),$_smarty_tpl);?>
" onclick="updateQty('quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
')" ><small><?php echo smartyTranslate(array('s'=>'Update','mod'=>'supercheckout'),$_smarty_tpl);?>
</small></a>
                                                
						<?php }?>
                                                    
                                                <?php }?>
                                            </td>
                                            <td class="cart_delete supercheckout-qty" colspan="3" style="text-align: right !important;">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['cannotModify']->value)&&$_smarty_tpl->tpl_vars['cannotModify']->value==1) {?>
                                                    <?php } else { ?>
                                                        <a href="javascript://" id="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" onclick="deleteProductFromSummary(this.id);" class="removeProduct supercheckout-product-delete"><div  title="Delete"></div></a>
                                                    <?php }?>
                                            </td>
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable($_smarty_tpl->tpl_vars['quantityDisplayed']->value+$_smarty_tpl->tpl_vars['customization']->value['quantity'], null, 0);?>
                                    <?php } ?>

                                    
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>
                                        <tr id="product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
                                            <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-name">

                                                <div >
                                                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                                                        <?php $_smarty_tpl->tpl_vars['image_display'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_image']['logged']['display'], null, 0);?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->tpl_vars['image_display'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_image']['guest']['display'], null, 0);?>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['image_display']->value==1) {?>
                                                        <img width='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['width'], ENT_QUOTES, 'UTF-8', true);?>
' height='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['height'], ENT_QUOTES, 'UTF-8', true);?>
' src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
' />
							<br>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                    <?php } else { ?>
						<a data-toggle="popover" data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-content="<img width='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['width'], ENT_QUOTES, 'UTF-8', true);?>
' height='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['height'], ENT_QUOTES, 'UTF-8', true);?>
' src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
' />" data-placement="right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                
                                                    <?php }?>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']) {?>
                                                    <br />
                                                    &nbsp;<small><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true);?>
</a></small>
                                                    <?php }?>
                                                </div>
                                            </td>
                                            <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-model">
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                                            </td>
                                            <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-qty supercheckout-product-qty-input" >
                                                <?php if (isset($_smarty_tpl->tpl_vars['cannotModify']->value)&&$_smarty_tpl->tpl_vars['cannotModify']->value==1) {?>
                                                    <span>
                                                        <?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
                                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'], ENT_QUOTES, 'UTF-8', true);?>

                                                        <?php } else { ?>
                                                                <?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-htmlspecialchars($_smarty_tpl->tpl_vars['quantityDisplayed']->value, ENT_QUOTES, 'UTF-8', true);?>

                                                        <?php }?>
                                                    </span>
                                                <?php } else { ?>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])&&$_smarty_tpl->tpl_vars['quantityDisplayed']->value==0) {?>
                                                            <span id="cart_quantity_custom_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" ><?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
</span>
                                                    <?php }?>
                                                    <?php if (!isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])||$_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>
                                                        <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo intval((count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])));?>
<?php } else { ?><?php echo intval(($_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value));?>
<?php }?>" name="quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
_hidden" />
                                                        <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['qty_update_option'])&&$_smarty_tpl->tpl_vars['settings']->value['qty_update_option']==0) {?>
								<div><a href="javascript:void(0)" class="cart_quantity_down qty-btn" onclick="upQty('quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
')"><span class="plus-span">+</span></a></div>
								<div><input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-intval($_smarty_tpl->tpl_vars['quantityDisplayed']->value);?>
<?php }?>" ></div>
						
							</div><a href="javascript:void(0)" class="cart_quantity_down qty-btn" onclick="downQty('quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
')" ><span class="minus-span">-</span></a></div>
								<?php } else { ?>
						<input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-intval($_smarty_tpl->tpl_vars['quantityDisplayed']->value);?>
<?php }?>" ><br>		
					
                                                <a href="javascript:void(0)" id="demo_2_s" title="<?php echo smartyTranslate(array('s'=>'update quantity','mod'=>'supercheckout'),$_smarty_tpl);?>
" onclick="updateQty('quantity_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
')" ><small><?php echo smartyTranslate(array('s'=>'Update','mod'=>'supercheckout'),$_smarty_tpl);?>
</small></a>
						<?php }?>
                                                    <?php }?>
                                                <?php }?>


                                            </td>
                                            <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-unit-total">
                                                <span class="price product_individual_price_wrapper" id="product_price_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>_nocustom<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
                                                                <span class="gift-icon"><?php echo smartyTranslate(array('s'=>'Gift','mod'=>'supercheckout'),$_smarty_tpl);?>
!</span>
                                                        <?php } else { ?>                                                
                                                            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                                                <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_wt']),$_smarty_tpl);?>
</span>
                                                            <?php } else { ?>
                                                                <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
</span>
                                                            <?php }?>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product']->value['is_discounted']) {?>
                                                                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_type']=='amount') {?>
                                                                        <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['price_wt']-$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']), null, 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value->sign, null, 0);?>
                                                                    <?php } else { ?>
                                                                        <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']-$_smarty_tpl->tpl_vars['product']->value['price_wt'])/$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount'])*100*-1, null, 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable('%', null, 0);?>
                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_type']=='amount') {?>
                                                                        <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['price']-$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']), null, 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value->sign, null, 0);?>
                                                                    <?php } else { ?>
                                                                        <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']-$_smarty_tpl->tpl_vars['product']->value['price'])/$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount'])*100*-1, null, 0);?>
                                                                        <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable('%', null, 0);?>
                                                                    <?php }?>
                                                                <?php }?>

                                                                <?php if ($_smarty_tpl->tpl_vars['symbol']->value=='%') {?>
                                                                    <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(sprintf("%d",round($_smarty_tpl->tpl_vars['priceReduction']->value)), null, 0);?>
                                                                <?php } else { ?>
                                                                    <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(sprintf("%.2f",$_smarty_tpl->tpl_vars['priceReduction']->value), null, 0);?>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['priceReduction']->value!=0) {?>  
                                                                <br>
                                                                <span class="price-percent-reduction-description">
                                                                        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['priceReduction']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['symbol']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                                </span>
                                                                <span class="supercheckout-old-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']),$_smarty_tpl);?>
</span>
                                                                <?php }?>
                                                            <?php }?>
                                                        <?php }?>
                                                </span>
                                            </td>
                                            <td id="total_product_price_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>_nocustom<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-total">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
                                                        <span class="gift-icon"><?php echo smartyTranslate(array('s'=>'Gift','mod'=>'supercheckout'),$_smarty_tpl);?>
!</span>
                                                <?php } else { ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
                                                        <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization']),$_smarty_tpl);?>
<?php }?>
                                                    <?php } else { ?>
                                                        <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_wt']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total']),$_smarty_tpl);?>
<?php }?>
                                                    <?php }?>
                                                <?php }?>
                                            </td>
                                            <td class="supercheckout-qty"><a href="javascript://" id="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" onclick="deleteProductFromSummary(this.id);" class="removeProduct supercheckout-product-delete"><div  title="Delete"></div></a></td>
                                        </tr>
                                    <?php }?>
                                <?php }?>
                            <?php } ?>
								<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
									<?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual']==0) {?>
                                        <?php $_smarty_tpl->tpl_vars['have_non_virtual_products'] = new Smarty_variable(true, null, 0);?>
                                <?php }?>
                                <?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable(0, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['odd'] = new Smarty_variable(($_smarty_tpl->tpl_vars['odd']->value+1)%2, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['ignoreProductLast'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])||count($_smarty_tpl->tpl_vars['gift_products']->value), null, 0);?>
                                <tr id="product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
                                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-name">

                                        <div >
                                            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                                                <?php $_smarty_tpl->tpl_vars['image_display'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_image']['logged']['display'], null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars['image_display'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_image']['guest']['display'], null, 0);?>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['image_display']->value==1) {?>
                                                <img width='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['width'], ENT_QUOTES, 'UTF-8', true);?>
' height='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['height'], ENT_QUOTES, 'UTF-8', true);?>
' src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
' />
						<br>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                            <?php } else { ?>
						<a data-toggle="popover" data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-content="<img width='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['width'], ENT_QUOTES, 'UTF-8', true);?>
' height='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['height'], ENT_QUOTES, 'UTF-8', true);?>
' src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
' />" data-placement="right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                           
                                            <?php }?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']) {?>
                                            <br />
                                            &nbsp;<small><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true);?>
</a></small>
                                            <?php }?>
                                        </div>
                                    </td>
                                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-model">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                                    </td>
                                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-qty supercheckout-product-qty-input" >
                                        
                                            <span>
                                                <?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'], ENT_QUOTES, 'UTF-8', true);?>

                                                <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-htmlspecialchars($_smarty_tpl->tpl_vars['quantityDisplayed']->value, ENT_QUOTES, 'UTF-8', true);?>

                                                <?php }?>
                                            </span>
                                        
                                    </td>
                                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-unit-total">
                                        <span class="price product_individual_price_wrapper" id="product_price_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>_nocustom<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
                                                        <span class="gift-icon"><?php echo smartyTranslate(array('s'=>'Gift','mod'=>'supercheckout'),$_smarty_tpl);?>
!</span>
                                                <?php } else { ?>                                                
                                                    <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                                        <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_wt']),$_smarty_tpl);?>
</span>
                                                    <?php } else { ?>
                                                        <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
</span>
                                                    <?php }?>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product']->value['is_discounted']) {?>
                                                        <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_type']=='amount') {?>
                                                                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['price_wt']-$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']), null, 0);?>
                                                                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value->sign, null, 0);?>
                                                            <?php } else { ?>
                                                                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']-$_smarty_tpl->tpl_vars['product']->value['price_wt'])/$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount'])*100*-1, null, 0);?>
                                                                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable('%', null, 0);?>
                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_type']=='amount') {?>
                                                                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['price']-$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']), null, 0);?>
                                                                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value->sign, null, 0);?>
                                                            <?php } else { ?>
                                                                <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']-$_smarty_tpl->tpl_vars['product']->value['price'])/$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount'])*100*-1, null, 0);?>
                                                                <?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable('%', null, 0);?>
                                                            <?php }?>
                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['symbol']->value=='%') {?>
                                                            <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(sprintf("%d",round($_smarty_tpl->tpl_vars['priceReduction']->value)), null, 0);?>
                                                        <?php } else { ?>
                                                            <?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(sprintf("%.2f",$_smarty_tpl->tpl_vars['priceReduction']->value), null, 0);?>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['priceReduction']->value!=0) {?>  
                                                        <br>
                                                        <span class="price-percent-reduction-description">
                                                                <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['priceReduction']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['symbol']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                        </span>
                                                        <span class="supercheckout-old-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_quantity_discount']),$_smarty_tpl);?>
</span>
                                                        <?php }?>
                                                    <?php }?>
                                                <?php }?>
                                        </span>
                                    </td>
                                    <td id="total_product_price_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>_nocustom<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;" class="supercheckout-total">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
                                                <span class="gift-icon"><?php echo smartyTranslate(array('s'=>'Gift','mod'=>'supercheckout'),$_smarty_tpl);?>
!</span>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
                                                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization']),$_smarty_tpl);?>
<?php }?>
                                            <?php } else { ?>
                                                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_wt']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total']),$_smarty_tpl);?>
<?php }?>
                                            <?php }?>
                                        <?php }?>
                                    </td>
                                    <td class="supercheckout-qty">
                                    
                                    </td>
                                </tr>
                                
									<?php } ?>
                            <!-- Product loop end -->
                        </tbody>                    
                    </table>
                    <table class="supercheckout-totals">
                        <tbody>
                            <!-- Order total start -->
                            <tr style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['product_sub_total']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['product_sub_total']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;">
                            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>                                
                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>                                    
                                    <td class="title"><b><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total products','mod'=>'supercheckout'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(Tax excl.)','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total products','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php }?></b></td>
                                    <td class="value"><span id="total_product" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl);?>
</span> </td>
                                <?php } else { ?>
                                    <td class="title"><b><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total products','mod'=>'supercheckout'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(Tax incl.)','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total products','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php }?></b></td>
                                    <td class="value"><span id="total_product" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_products_wt']->value),$_smarty_tpl);?>
</span></td>
                                <?php }?>
                            <?php } else { ?>
                                <td class="title"><b><?php echo smartyTranslate(array('s'=>'Total products','mod'=>'supercheckout'),$_smarty_tpl);?>
</b></td>
                                <td class="value"><span id="total_product" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl);?>
</span></td>
                            <?php }?>
                            </tr>
                            <tr<?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value==0) {?> style="display: none;"<?php }?>>
                                <td class="title"><b><?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total gift wrapping cost','mod'=>'supercheckout'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(Tax incl.)','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total gift wrapping cost','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Total gift wrapping cost','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php }?></b></td>
                                <td class="value">
                                    <span id="total_wrapping" class="price">
                                        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl);?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping']->value),$_smarty_tpl);?>

                                            <?php }?>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl);?>

                                        <?php }?>
                                    </span>
                                </td>
                            </tr>
                            <?php $_smarty_tpl->tpl_vars['shipping_setting_display'] = new Smarty_variable(1, null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['shipping_price']['logged']['display']==1) {?><?php } else { ?><?php $_smarty_tpl->tpl_vars['shipping_setting_display'] = new Smarty_variable(0, null, 0);?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['shipping_price']['guest']['display']==1) {?><?php } else { ?><?php $_smarty_tpl->tpl_vars['shipping_setting_display'] = new Smarty_variable(0, null, 0);?><?php }?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['shipping_setting_display']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value<=0&&!isset($_smarty_tpl->tpl_vars['virtualCart']->value)) {?>
                                    <tr id="cart_total_delivery" style="<?php if (!isset($_smarty_tpl->tpl_vars['carrier']->value->id)||is_null($_smarty_tpl->tpl_vars['carrier']->value->id)) {?>display:none;<?php }?>">
                                        <td class="title"><b><?php echo smartyTranslate(array('s'=>'Shipping','mod'=>'supercheckout'),$_smarty_tpl);?>
</b></td>
                                        <td class="value"><span id="total_shipping" class="price"><?php echo smartyTranslate(array('s'=>'Free Shipping','mod'=>'supercheckout'),$_smarty_tpl);?>
</span> </td>                                
                                    </tr>    
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value!=$_smarty_tpl->tpl_vars['total_shipping']->value) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                            <tr id="cart_total_delivery" <?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value<=0) {?> style="display:none;"<?php }?>>
                                                <td class="title"><b><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total Shipping','mod'=>'supercheckout'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(Tax excl.)','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total Shipping','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php }?></b></td>
                                                <td class="value"><span id="total_shipping" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value),$_smarty_tpl);?>
</span> </td>                                
                                            </tr>
                                        <?php } else { ?>
                                            <tr id="cart_total_delivery" <?php if ($_smarty_tpl->tpl_vars['total_shipping']->value<=0) {?> style="display:none;"<?php }?>>
                                                <td class="title"><b><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total Shipping','mod'=>'supercheckout'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(Tax incl.)','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total Shipping','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php }?></b></td>
                                                <td class="value"><span id="total_shipping" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_shipping']->value),$_smarty_tpl);?>
</span> </td>                                
                                            </tr>
                                        <?php }?>
                                    <?php } else { ?>
                                        <tr id="cart_total_delivery" <?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value<=0) {?> style="display:none;"<?php }?>>
                                            <td class="title"><b><?php echo smartyTranslate(array('s'=>'Total Shipping','mod'=>'supercheckout'),$_smarty_tpl);?>
</b></td>
                                            <td class="value"><span id="total_shipping" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value),$_smarty_tpl);?>
</span> </td>                                
                                        </tr>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                                                        
                            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                                <tr>
                                    <td class="title"><b><?php echo smartyTranslate(array('s'=>'Total Tax','mod'=>'supercheckout'),$_smarty_tpl);?>
</b></td>
                                    <td class="value"><span id="total_tax" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_tax']->value),$_smarty_tpl);?>
</span></td>
                                </tr>
                            <?php }?>
                            <tr class="cart_total_voucher" <?php if ($_smarty_tpl->tpl_vars['total_discounts']->value==0) {?>style="display:none"<?php }?>>
                                <td class="title">
                                    <b>
                                        <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['priceDisplay']->value==0) {?>
                                                        <?php echo smartyTranslate(array('s'=>'Total Vouchers','mod'=>'supercheckout'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(Tax incl.)','mod'=>'supercheckout'),$_smarty_tpl);?>

                                                <?php } else { ?>
                                                        <?php echo smartyTranslate(array('s'=>'Total Vouchers','mod'=>'supercheckout'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(Tax excl.)','mod'=>'supercheckout'),$_smarty_tpl);?>

                                                <?php }?>
                                        <?php } else { ?>
                                                <?php echo smartyTranslate(array('s'=>'Total Vouchers','mod'=>'supercheckout'),$_smarty_tpl);?>

                                        <?php }?>
                                    </b>
                                </td>
                                <td class="value">
                                    <span class="price"  id="total_discount">
                                        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['priceDisplay']->value==0) {?>
                                                <?php $_smarty_tpl->tpl_vars['total_discounts_negative'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_discounts']->value*-1, null, 0);?>
                                        <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars['total_discounts_negative'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_discounts_tax_exc']->value*-1, null, 0);?>
                                        <?php }?>
                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_discounts_negative']->value),$_smarty_tpl);?>

                                    </span>
                                </td>                                
                            </tr>
                            <?php if (sizeof($_smarty_tpl->tpl_vars['discounts']->value)) {?>
                                <?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>
                                    <tr id="cart_discount_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['id_discount'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="cart_discount" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;">
                                        <td class="title"><b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<a href="javascript:void(0)" onclick="removeDiscount('<?php echo intval($_smarty_tpl->tpl_vars['discount']->value['id_discount']);?>
')"><div title="Redeem" class="removeProduct"></div></a></td></b></td>
                                        <td class="value"><span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl);?>
<?php }?></span> </td>                                
                                    </tr>
                                <?php } ?>
                            <?php }?>                            
                            <!-- Order total end -->
                            <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                                <tr id="supercheckout_voucher_input_row" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;">
                                    <td class="title"><b><?php echo smartyTranslate(array('s'=>'Voucher','mod'=>'supercheckout'),$_smarty_tpl);?>
</b></td>
                                    <td class="value" id="voucher-form">
                                        <input  id="discount_name" name="discount_name" type="text" class="voucherText" value="<?php if (isset($_smarty_tpl->tpl_vars['discount_name']->value)&&$_smarty_tpl->tpl_vars['discount_name']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['discount_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>">
                                        <input type="hidden" value="1" name="submitDiscount">
                                        <input id="button-coupon" type="button" onClick="callCoupon();" class="orangebuttonapply" value="<?php echo smartyTranslate(array('s'=>'Apply','mod'=>'supercheckout'),$_smarty_tpl);?>
">
                                    </td>
				</tr>
			    <?php } else { ?>
			    <tr id="supercheckout_voucher_input_row" style="display:none;"></tr>
			    <?php }?>
                            <tr style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['total']['logged']['display']==1) {?><?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['total']['guest']['display']==1) {?><?php } else { ?>none<?php }?><?php }?>;">
                                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                                    <td class="title"><b><?php echo smartyTranslate(array('s'=>'Total','mod'=>'supercheckout'),$_smarty_tpl);?>
</b></td>
                                    <td class="value">
					<input type="hidden" id="total_price_wfee" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['total_price']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" >
                                        <span id="total_price" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_price']->value),$_smarty_tpl);?>
</span>
                                    </td>
                                <?php } else { ?>
                                    <td class="title"><b><?php echo smartyTranslate(array('s'=>'Total','mod'=>'supercheckout'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(Tax incl.)','mod'=>'supercheckout'),$_smarty_tpl);?>
</b></td>
                                    <td class="value"><span id="total_price_without_tax" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl);?>
</span><input type="hidden" id="total_price_wfee" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['total_price_without_tax']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" ></td>
                                <?php }?>                                
                            </tr>
                        </tbody>
                    </table>
                    <?php } else { ?>
                        <div class="supercheckout-checkout-content" style="display:block">
                            <div class="permanent-warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.','mod'=>'supercheckout'),$_smarty_tpl);?>
</div>
                        </div>
                    <?php }?>
                </div>
				<!-- Added to show cart rules -->
						<div id="highlighted_cart_rules">
							<?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
								<p id="title" class="title-offers" style="font-weight: 600;color: black!important;"><?php echo smartyTranslate(array('s'=>'Take advantage of our exclusive offers','mod'=>'supercheckout'),$_smarty_tpl);?>
:</p>
								<div id="display_cart_vouchers">
									<?php  $_smarty_tpl->tpl_vars['voucher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voucher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['displayVouchers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->key => $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['voucher']->value['code']!='') {?><span onclick="$('#discount_name').val('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
');return false;" class="voucher_name" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span> - <?php }?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br />
									<?php } ?>
								</div>
							<?php }?>
						</div>
		<div id="loyalty_text_holder">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART']->value;?>

		</div>

            </div>
            <div id="payment_display_block"  class="supercheckout-blocks" data-column="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['confirm'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']);?>
" data-row="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['confirm'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']);?>
" data-column-inside="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['design']['confirm'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']);?>
" >
                <ul style="<?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_method']['enable']==0) {?>display:none;<?php }?>">
                    <li>
                        <!--<p class="supercheckout-numbers supercheckout-payment-info">Payment Method Review</p>-->
                        <div class="loader" id="paymentFormDisplayLoader"></div>
                    </li>
                </ul>
                <div class="supercheckout-checkout-content"> </div>
                <div id="display_payment"></div>
        
                <div id="supercheckout-comments" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['confirm']['order_comment_box']['logged']['display']==1) {?>block<?php } else { ?>none<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['confirm']['order_comment_box']['guest']['display']==1) {?>block<?php } else { ?>none<?php }?><?php }?>;">
                    <b><?php echo smartyTranslate(array('s'=>'Add Comments About Your Order','mod'=>'supercheckout'),$_smarty_tpl);?>
</b>
                    <textarea id="supercheckout-comment_order" name="comment" rows="8" ></textarea>
                </div>
                
                    <div id='order-shipping-extra'>
                        <?php if (!$_smarty_tpl->tpl_vars['IS_VIRTUAL_CART']->value) {?>
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
                            <label><input id="tnc_checkbox" type="checkbox" name="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?> />
                            <?php echo smartyTranslate(array('s'=>'I agree to the terms of service and will adhere to them unconditionally. ','mod'=>'supercheckout'),$_smarty_tpl);?>
        
			    </label>
                            (<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="iframe various fancybox.ajax" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Read the term of services','mod'=>'supercheckout'),$_smarty_tpl);?>
</a>)
                        </div>
                        <?php }?>
                    </div>            
                <div id="placeorderButton">
                    <div id="buttonWithProgres" style="width:206px;">
                        <div  id="supercheckout_confirm_order" class="orangebutton" >
                            <?php echo smartyTranslate(array('s'=>'Place Order','mod'=>'supercheckout'),$_smarty_tpl);?>

                            <div id="progressbar" style="text-align:center;margin-top: 0px;"></div>
                        </div>
                    
                    </div>
                </div>
                <input type="hidden" name="supercheckout_submission" value="" />
            </div>

            <?php  $_smarty_tpl->tpl_vars['html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['html']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['design']['html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['html']->key => $_smarty_tpl->tpl_vars['html']->value) {
$_smarty_tpl->tpl_vars['html']->_loop = true;
?>
            <div  class="supercheckout-blocks" data-column="<?php echo intval($_smarty_tpl->tpl_vars['html']->value[$_smarty_tpl->tpl_vars['layout_name']->value]['column']);?>
" data-row="<?php echo intval($_smarty_tpl->tpl_vars['html']->value[$_smarty_tpl->tpl_vars['layout_name']->value]['row']);?>
" data-column-inside="<?php echo intval($_smarty_tpl->tpl_vars['html']->value[$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']);?>
">
                <?php echo html_entity_decode($_smarty_tpl->tpl_vars['html']->value['value']);?>

            </div>
            <?php } ?>
        </div>

        <div class="supercheckout-column-middle columnleftsort" id="columnleft-2"  style="width:<?php echo $_smarty_tpl->tpl_vars['settings']->value['column_width'][$_smarty_tpl->tpl_vars['layout_name']->value][2]*mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['multiplier']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
%;margin-right:0px;">
            <div class="supercheckout-column-left columnleftsort" id="column-2-upper" style="width:100%;height:auto;"> 
            </div>
            <div class="supercheckout-column-left columnleftsort" id="column-1-inside" style="width:<?php echo $_smarty_tpl->tpl_vars['settings']->value['column_width'][$_smarty_tpl->tpl_vars['layout_name']->value]['inside'][1]*mb_convert_encoding(htmlspecialchars(1, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
%"> 
            </div>
            <div class="supercheckout-column-left columnleftsort" id="column-2-inside"  style="width:<?php echo $_smarty_tpl->tpl_vars['settings']->value['column_width'][$_smarty_tpl->tpl_vars['layout_name']->value]['inside'][2]*mb_convert_encoding(htmlspecialchars(1, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
%">
            
            </div>
            <div class="supercheckout-column-left columnleftsort" id="column-2-lower"  style="width:100%;height:auto;">
            
            </div>
        </div>
        <div class="supercheckout-column-right columnleftsort" id="columnleft-3" style="width:<?php echo $_smarty_tpl->tpl_vars['settings']->value['column_width'][$_smarty_tpl->tpl_vars['layout_name']->value][3]*mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['multiplier']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
%">
            
                                
        </div>   
        
    </div>
<input type="hidden" id="module_url" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['supercheckout_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />    
<input type="hidden" id="addon_url" value="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['addon_url']->value);?>
" />  
<input type="hidden" id="analytic_url" value="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['analytic_url']->value);?>
" />    
</fieldset>
</form>
    <div id="velsof_payment_dialog">
        <div id="velsof_dialog_content">
            <div class="velsof_payment_dialog_overlay"></div>
            <div id="velsof_payment_container">
                <span class="velsof_dialog_close">X</span>
                <div class="velsof_title_section"><?php echo smartyTranslate(array('s'=>'Payment Information','mod'=>'supercheckout'),$_smarty_tpl);?>
</div>
                <div class="velsof_content_section"></div>
                <div class="velsof_action_section">
                    <a id="supercheckout_dialog_back" href="javascript:void(0)" class="velsof_dialog_action velsof_back_action">
                        <span><?php if ($_smarty_tpl->tpl_vars['ps_version']->value==16) {?><i class="icon-chevron-left left"></i><?php }?><?php echo smartyTranslate(array('s'=>'Back','mod'=>'supercheckout'),$_smarty_tpl);?>
</span>
                    </a>
                    <a id="supercheckout_dialog_proceed" href="javascript:void(0)" class="velsof_dialog_action velsof_payment_action">
                        <span><?php echo smartyTranslate(array('s'=>'Proceed','mod'=>'supercheckout'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['ps_version']->value==16) {?><i class="icon-chevron-right right"></i><?php }?></span>
                    </a>
                </div>
            </div>            
        </div>
    </div>
<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['html_value']['footer'])&&$_smarty_tpl->tpl_vars['settings']->value['html_value']['footer']!='') {?>
    <div id="supercheckout_html_content_footer">        
        <?php echo html_entity_decode($_smarty_tpl->tpl_vars['settings']->value['html_value']['footer']);?>

    </div>
<?php }?>

<script>
    var default_country = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['default_country']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
    var countries = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['countries']->value);?>
;
    var hash_error = document.location.hash;
    if(hash_error.indexOf('#stripe_error') > -1){
        $('#supercheckout-empty-page-content').append('<div class="permanent-warning">There was a problem with your payment</div>');
    }
	$(document).ready(function() {
		<?php if ($_smarty_tpl->tpl_vars['settings']->value['mailchimp']['enable']==1&&isset($_smarty_tpl->tpl_vars['settings']->value['mailchimp']['default'])&&$_smarty_tpl->tpl_vars['settings']->value['mailchimp']['default']==1) {?>
			$( "#email" ).blur(function() {
				var email = $( "#email" ).val();
				subscribeCustomer(email);
			});
		<?php }?>
		$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['iso_code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_content').show();
	});
    
</script>
<?php } else { ?>
<div class="supercheckout-empty-page-content" style="display:block">
    <div class="permanent-warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.','mod'=>'supercheckout'),$_smarty_tpl);?>
</div>
</div>
    <script>
	var cart_empty = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['empty']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
    </script>
<?php }?>

<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 15:36:54
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/modules/supercheckout/views/templates/front/payment-methods.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1196392152583c6b36629348-22348837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49b9005e307d4f4a4bbfc2d412c623db9057448b' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/modules/supercheckout/views/templates/front/payment-methods.tpl',
      1 => 1465403642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1196392152583c6b36629348-22348837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_methods' => 0,
    'payment_method' => 0,
    'link' => 0,
    'additional_id' => 0,
    'additional' => 0,
    'selected_payment_method' => 0,
    'display_payment_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6b36799950_94264453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6b36799950_94264453')) {function content_583c6b36799950_94264453($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['payment_methods']->value['not_required'])) {?>
	<div class='supercheckout-checkout-content' style='display:block'>
	    <div class='permanent-warning not-required-msg'><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_methods']->value['not_required'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
	</div>
<?php } else { ?>
	<div class='supercheckout-checkout-content' style='display:block'>
	<?php if (isset($_smarty_tpl->tpl_vars['payment_methods']->value['warning'])&&$_smarty_tpl->tpl_vars['payment_methods']->value['warning']!='') {?>    
	    <div class='permanent-warning'><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_methods']->value['warning'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
	<?php }?>
	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['payment_methods']->value['methods'])&&count($_smarty_tpl->tpl_vars['payment_methods']->value['methods'])>0) {?>                 
	<table class='radio'>
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
	<div id='payment_method_html' style='display:none;'>
	    <?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value['methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
?>
	    <div id='payment_method_<?php echo intval($_smarty_tpl->tpl_vars['payment_method']->value['id_module']);?>
'>
		<?php echo $_smarty_tpl->tpl_vars['payment_method']->value['html'];?>

	    </div>
	    <?php } ?>
	</div>
	<?php } else { ?>
	    <div class='supercheckout-checkout-content' style='display:block'>
		<div class='permanent-warning'><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_methods']->value['warning'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
	    </div>
	<?php }?>
<?php }?>
<?php }} ?>

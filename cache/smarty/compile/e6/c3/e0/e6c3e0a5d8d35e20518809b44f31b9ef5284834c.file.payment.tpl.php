<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 16:37:05
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1833925647583c4f217012e0-80765218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6c3e0a5d8d35e20518809b44f31b9ef5284834c' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1476972586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1833925647583c4f217012e0-80765218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c4f2171f172_36755345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c4f2171f172_36755345')) {function content_583c4f2171f172_36755345($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
			</a>
		</p>
	</div>
</div>
<?php }} ?>

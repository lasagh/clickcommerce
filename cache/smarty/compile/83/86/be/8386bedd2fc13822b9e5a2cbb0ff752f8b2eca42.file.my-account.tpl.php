<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 17:40:48
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1708130132583c5e1001f070-22745955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8386bedd2fc13822b9e5a2cbb0ff752f8b2eca42' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl',
      1 => 1476972586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1708130132583c5e1001f070-22745955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c5e10034124_53977199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c5e10034124_53977199')) {function content_583c5e10034124_53977199($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<li class="referralprogram">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-cogs"></i><span><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE ReferralProgram --><?php }} ?>

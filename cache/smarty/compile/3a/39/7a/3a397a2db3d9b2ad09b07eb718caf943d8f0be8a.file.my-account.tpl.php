<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 17:40:47
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1982298946583c5e0f07e407-69016609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a397a2db3d9b2ad09b07eb718caf943d8f0be8a' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1476972586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1982298946583c5e0f07e407-69016609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c5e0f09c078_36334611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c5e0f09c078_36334611')) {function content_583c5e0f09c078_36334611($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 16:37:18
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/admin/themes/default/template/helpers/tree/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1246305756583c4f2e4a0880-09867749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce3385de13ee720b28ff8513927d1d18035279d6' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1476972584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1246305756583c4f2e4a0880-09867749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c4f2e4d4c26_95580812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c4f2e4d4c26_95580812')) {function content_583c4f2e4d4c26_95580812($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>

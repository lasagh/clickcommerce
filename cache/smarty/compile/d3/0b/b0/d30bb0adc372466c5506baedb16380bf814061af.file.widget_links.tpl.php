<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 14:59:37
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/leomanagewidgets/views/widgets/displayfooter/widget_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1659287106583c62794a7410-16610757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd30bb0adc372466c5506baedb16380bf814061af' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/leomanagewidgets/views/widgets/displayfooter/widget_links.tpl',
      1 => 1480352347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1659287106583c62794a7410-16610757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'widget_heading' => 0,
    'id' => 0,
    'ac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c62794c9ad0_38487909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c62794c9ad0_38487909')) {function content_583c62794c9ad0_38487909($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['links']->value)&&$_smarty_tpl->tpl_vars['links']->value) {?>
<div class="widget-links nobackground">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">	
		<div id="tabs<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel-group">
			<ul class="nav-links">
			  <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ac']->key;
?>  
			  <li ><a href="<?php echo $_smarty_tpl->tpl_vars['ac']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['ac']->value['text'];?>
</a></li>
			  <?php } ?>
			</ul>
		</div>
	</div>
</div>
<?php }?>


<?php }} ?>

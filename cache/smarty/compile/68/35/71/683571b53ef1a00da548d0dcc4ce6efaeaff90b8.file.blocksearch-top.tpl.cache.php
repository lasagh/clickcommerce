<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 14:59:49
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1672164930583c62858c85f9-12831239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '683571b53ef1a00da548d0dcc4ce6efaeaff90b8' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/blocksearch/blocksearch-top.tpl',
      1 => 1480352347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1672164930583c62858c85f9-12831239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c62858eb054_01015677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c62858eb054_01015677')) {function content_583c62858eb054_01015677($_smarty_tpl) {?>

 
<!-- Block search module TOP -->
<div id="search_block_top" class="popup-over pull-right e-translate-down">
	<div class="popup-title"><span class="fa fa-search"></span></div>
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" class="popup-content"> 
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn fa fa-search"></button> 
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>

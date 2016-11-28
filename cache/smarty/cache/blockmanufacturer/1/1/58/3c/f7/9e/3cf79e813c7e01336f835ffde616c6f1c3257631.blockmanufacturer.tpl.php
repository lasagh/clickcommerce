<?php /*%%SmartyHeaderCode:689290291583c6b32286e34-79841554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cf79e813c7e01336f835ffde616c6f1c3257631' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1480352347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '689290291583c6b32286e34-79841554',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6b3230c818_50151317',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6b3230c818_50151317')) {function content_583c6b3230c818_50151317($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer noborder">
	<h4 class="title_block">
					<a href="http://localhost:8888/clickcommerce/vp1/fabricantes" title="Fabricantes">
						Fabricantes
					</a>
			</h4>
	<div class="block_content">
								<ul class="list-block list-group bullet">
														<li class="last_item">
						<a 
						href="http://localhost:8888/clickcommerce/vp1/1_fashion-manufacturer" title="Mais sobre Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/clickcommerce/vp1/index.php" method="get">
					
						<select class="form-control" name="manufacturer_list">
							<option value="0">Todos os fabricantes</option>
													<option value="http://localhost:8888/clickcommerce/vp1/1_fashion-manufacturer">Fashion Manufacturer</option>
												</select>
					
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>

<?php /*%%SmartyHeaderCode:173744017583c6b324edd78-06324338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd430e904952eed62af0fa5af8c61f988a122468c' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/blocksupplier/blocksupplier.tpl',
      1 => 1480352347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173744017583c6b324edd78-06324338',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6b3257ec66_59203485',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6b3257ec66_59203485')) {function content_583c6b3257ec66_59203485($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<h4 class="title_block">
					<a href="http://localhost:8888/clickcommerce/vp1/fornecedor" title="Fornecedores">
					Fornecedores
					</a>
			</h4>
	<div class="block_content">
								<ul class="list-block list-group bullet">
											<li class="last_item">
                					<a 
					href="http://localhost:8888/clickcommerce/vp1/1__fashion-supplier" 
					title="Encontre mais sobre Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/clickcommerce/vp1/index.php" method="get">
					
						<select class="form-control" name="supplier_list">
							<option value="0">Todos os fornecedores</option>
													<option value="http://localhost:8888/clickcommerce/vp1/1__fashion-supplier">Fashion Supplier</option>
												</select>
					
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>

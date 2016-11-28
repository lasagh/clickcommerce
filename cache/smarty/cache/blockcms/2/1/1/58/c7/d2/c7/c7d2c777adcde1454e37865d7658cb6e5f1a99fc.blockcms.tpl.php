<?php /*%%SmartyHeaderCode:775606882583c6285ba6d58-85170857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d2c777adcde1454e37865d7658cb6e5f1a99fc' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/blockcms/blockcms.tpl',
      1 => 1480352347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '775606882583c6285ba6d58-85170857',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'display_poweredby' => 0,
    'footer_text' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6285d645e7_78040670',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6285d645e7_78040670')) {function content_583c6285d645e7_78040670($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<div class="footer-block block" id="block_various_links_footer">
		<h4 class="title_block">Informação</h4>
		<ul class="toggle-footer list-group bullet">
							<li class="item">
					<a href="http://localhost:8888/clickcommerce/vp1/preços-em-queda" title="Promoções">
						Promoções
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8888/clickcommerce/vp1/novos-produtos" title="Novidades">
					Novidades
				</a>
			</li>
										<li class="item">
					<a href="http://localhost:8888/clickcommerce/vp1/melhores-vendas" title="Mais vendidos">
						Mais vendidos
					</a>
				</li>
										<li class="item">
					<a href="http://localhost:8888/clickcommerce/vp1/lojas" title="Nossas lojas">
						Nossas lojas
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8888/clickcommerce/vp1/entrar-em-contato-conosco" title="Fale conosco">
					Fale conosco
				</a>
			</li>
															<li class="item">
						<a href="http://localhost:8888/clickcommerce/vp1/content/3-termos-e-condicoes-de-utilizacao" title="Termos e condições de utilização">
							Termos e condições de utilização
						</a>
					</li>
																<li class="item">
						<a href="http://localhost:8888/clickcommerce/vp1/content/4-quem-somos" title="Quem somos">
							Quem somos
						</a>
					</li>
													<li>
				<a href="http://localhost:8888/clickcommerce/vp1/mapa do site" title="Mapa do site">
					Mapa do site
				</a>
			</li>
									<li>
				<span>
					<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

				</span>
			</li>
					</ul>
		
	</div>
	<!-- /Block CMS module footer -->
<?php }} ?>

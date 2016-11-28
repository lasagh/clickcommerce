<?php /*%%SmartyHeaderCode:815061342583c628590a670-15469112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9d3e61702b72d1e033bc4a6ff3241ff9eb9ba9d' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/modules/leomanagewidgets/views/widgets/group.tpl',
      1 => 1480352347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '815061342583c628590a670-15469112',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6aa272fa64_70823949',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6aa272fa64_70823949')) {function content_583c6aa272fa64_70823949($_smarty_tpl) {?>
            <div class="row" 
                    >
            
                                                                                    <div class="widget col-lg-9 col-md-9 col-sm-6 col-xs-4-8 col-sp-4-8"
                            >
                                                                                                	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix">
		<div class="cat-title"><i class="fa fa-navicon"></i></div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://localhost:8888/clickcommerce/vp1/3-mulheres" title="Mulheres">Mulheres</a><ul><li><a href="http://localhost:8888/clickcommerce/vp1/4-blusas-camisetas" title="Blusas/camisetas">Blusas/camisetas</a><ul><li><a href="http://localhost:8888/clickcommerce/vp1/5-camisetas" title="Camisetas">Camisetas</a></li><li><a href="http://localhost:8888/clickcommerce/vp1/7-blusas" title="Blusas">Blusas</a></li></ul></li><li><a href="http://localhost:8888/clickcommerce/vp1/8-vestidos" title="Vestidos">Vestidos</a><ul><li><a href="http://localhost:8888/clickcommerce/vp1/9-vestidos-casuais" title="Vestidos casuais">Vestidos casuais</a></li><li><a href="http://localhost:8888/clickcommerce/vp1/10-vestidos-de-noite" title="Vestidos de noite">Vestidos de noite</a></li><li><a href="http://localhost:8888/clickcommerce/vp1/11-vestidos-de-verao" title="Vestidos de verão">Vestidos de verão</a></li></ul></li><li class="category-thumbnail"><div><img src="http://localhost:8888/clickcommerce/vp1/img/c/3-0_thumb.jpg" alt="Mulheres" title="Mulheres" class="imgm" /></div><div><img src="http://localhost:8888/clickcommerce/vp1/img/c/3-1_thumb.jpg" alt="Mulheres" title="Mulheres" class="imgm" /></div></li></ul></li><li><a href="http://localhost:8888/clickcommerce/vp1/8-vestidos" title="Vestidos">Vestidos</a><ul><li><a href="http://localhost:8888/clickcommerce/vp1/9-vestidos-casuais" title="Vestidos casuais">Vestidos casuais</a></li><li><a href="http://localhost:8888/clickcommerce/vp1/10-vestidos-de-noite" title="Vestidos de noite">Vestidos de noite</a></li><li><a href="http://localhost:8888/clickcommerce/vp1/11-vestidos-de-verao" title="Vestidos de verão">Vestidos de verão</a></li></ul></li><li><a href="http://localhost:8888/clickcommerce/vp1/5-camisetas" title="Camisetas">Camisetas</a></li>
		</ul>
			
	</div>
	<!--/ Menu -->
                                                                                    </div>
                                                                                <div class="widget col-lg-3 col-md-3 col-sm-6 col-xs-7-2 col-sp-7-2"
                            >
                                                                                                <!-- MODULE Block cart -->
<div class="popup-over blockcart_top clearfix pull-right">
	<div id="cart" class="shopping_cart pull-right">
		<div class="heading">
			<a href="http://localhost:8888/clickcommerce/vp1/pedido" title="Ver meu carrinho de compras" rel="nofollow">
				<div class="title-cart pull-left">
					<div class="cart-quantity">
						<h4><span class="fa-shopping-cart fa"></span></h4> 
						<span class="ajax_cart_quantity unvisible">0</span>
						<span class="ajax_cart_no_product">0</span>
					</div>
				</div>
				<!-- <div class="cart-inner media-body">
					
										</div>	 -->
			</a>
		</div>



					<div class="cart_block block exclusive">
				<div class="block_content">
					<!-- block list of products -->
					<div class="cart_block_list">
												<p class="cart_block_no_products">
							Sem produtos
						</p>
																		<div class="cart-prices">
							<div class="cart-prices-line first-line">
								<span class="price cart_block_shipping_cost ajax_cart_shipping_cost unvisible">
																			 A ser determinado																	</span>
								<span class="unvisible">
									Frete
								</span>
							</div>
																					<div class="cart-prices-line last-line">
								<span class="price cart_block_total ajax_block_cart_total">R$ 0,00</span>
								<span>Total</span>
							</div>
													</div>
						<p class="cart-buttons clearfix">
							<a id="button_order_cart" class="btn btn-warning button-medium button button-small pull-right" href="http://localhost:8888/clickcommerce/vp1/pedido" title="Finalizar" rel="nofollow">
								<span>
									Finalizar
								</span>
							</a>
						</p>
					</div>
				</div>
			</div><!-- .cart_block -->
			</div>
</div>

	<div id="layer_cart">
		<div class="clearfix">
			<div class="layer_cart_product col-xs-12 col-md-6">
				<span class="cross" title="Fechar janela"></span>
				<span class="title">
					<i class="fa fa-ok"></i>Produto adicionado ao seu carrinho de compras
				</span>
				<div class="product-image-container layer_cart_img">
				</div>
				<div class="layer_cart_product_info">
					<span id="layer_cart_product_title" class="product-name"></span>
					<span id="layer_cart_product_attributes"></span>
					<div>
						<strong class="dark">Quantidade</strong>
						<span id="layer_cart_product_quantity"></span>
					</div>
					<div>
						<strong class="dark">Total</strong>
						<span id="layer_cart_product_price"></span>
					</div>
				</div>
			</div>
			<div class="layer_cart_cart col-xs-12 col-md-6">
				<span class="title">
					<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt_s  unvisible">
						Existem <span class="ajax_cart_quantity">0</span> produtos no seu carrinho.
					</span>
					<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt ">
						Existe 1 produto no seu carrinho.
					</span>
				</span>
				<div class="layer_cart_row">
					<strong class="dark">
						Total de produtos
											</strong>
					<span class="ajax_block_products_total">
											</span>
				</div>

								<div class="layer_cart_row">
					<strong class="dark unvisible">
						Total do frete&nbsp;					</strong>
					<span class="ajax_cart_shipping_cost unvisible">
													 A ser determinado											</span>
				</div>
								<div class="layer_cart_row">
					<strong class="dark">
						Total
																					(taxa incl.)
																		</strong>
					<span class="ajax_block_cart_total">
											</span>
				</div>
				<div class="button-container">	
					<span class="continue btn btn-outline button exclusive-medium" title="Continuar comprando">
						<span>
							Continuar comprando
						</span>
					</span>
					<a class="btn btn-inverse button pull-right" href="http://localhost:8888/clickcommerce/vp1/pedido" title="Finalizar Pedido" rel="nofollow">
						<span>
							Finalizar Pedido
						</span>
					</a>	
				</div>
			</div>
		</div>
		<div class="crossseling"></div>
	</div> <!-- #layer_cart -->
	<div class="layer_cart_overlay"></div>

<!-- /MODULE Block cart -->                                                                    
<!-- Block languages module -->

<div id="leo_block_top" class="topbar-box pull-right popup-over e-scale">
	<div class="popup-title">
		<i class="fa fa-cog"></i>
	</div>
	<div class="popup-content">
		<div id="countries" class="languages-block">
			<span>Language</span>
			<ul id="first-languages" class="countries_ul">
									<li class="selected_language">
														<img src="http://localhost:8888/clickcommerce/vp1/img/l/2.jpg" alt="br" width="16" height="11" />
											</li>
							</ul>
		</div>
								</div>
</div>


<!-- /Block languages module -->
                                                                    <!-- Block user information module NAV  -->
<div class="header_user_info popup-over pull-right e-scale">
	<div class="popup-title"><i class="fa fa-user"></i></div>	
	<div class="popup-content">
		<ul class="links">
										<li><a class="login" href="http://localhost:8888/clickcommerce/vp1/minha-conta" rel="nofollow" title="Login to your customer account">
					<i class="fa fa-unlock-alt"></i>Entrar
				</a></li>
			
			<li>
				<a href="http://localhost:8888/clickcommerce/vp1/minha-conta" title="My account"><i class="fa fa-user"></i>My Account</a>
			</li>
			
			<li>
				<a href="http://localhost:8888/clickcommerce/vp1/pedido" title="Checkout" class="last"><i class="fa fa-share"></i>Checkout</a>
			</li>

			<li>
				<a id="wishlist-total" href="http://localhost:8888/clickcommerce/vp1/module/blockwishlist/mywishlist" title="My wishlists">
				<i class="fa fa-heart"></i>Wish List</a>
			</li>
			<li>
				<a href="http://localhost:8888/clickcommerce/vp1/comparação-de-produtos" title="Compare" rel="nofollow">
					<i class="fa fa-compress"></i>Compare
				</a>
			</li>
			
		</ul>
	</div>
</div>	                                                                     
<!-- Block search module TOP -->
<div id="search_block_top" class="popup-over pull-right e-translate-down">
	<div class="popup-title"><span class="fa fa-search"></span></div>
	<form id="searchbox" method="get" action="//localhost:8888/clickcommerce/vp1/procurar" class="popup-content"> 
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Busca" value="" />
		<button type="submit" name="submit_search" class="btn fa fa-search"></button> 
	</form>
</div>
<!-- /Block search module TOP -->                                                                                    </div>
                                                        </div>
    <?php }} ?>

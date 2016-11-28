<?php /*%%SmartyHeaderCode:1660300083583c6aa2a61a53-13836949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e7f4485933226bc071daeb9fa8752f618113657' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/themes/leo_gamegear/modules/socialsharing/views/templates/hook/socialsharing.tpl',
      1 => 1480352347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1660300083583c6aa2a61a53-13836949',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6aa2af6fa0_88486053',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6aa2af6fa0_88486053')) {function content_583c6aa2af6fa0_88486053($_smarty_tpl) {?>	<p class="socialsharing_product list-inline no-print">
					<button  data-type="twitter" type="button" class="btn btn-outline btn-twitter social-sharing">
				<i class="fa fa-twitter"></i>  Tweet
				<!-- <img src="http://localhost:8888/clickcommerce/vp1/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button  data-type="facebook" type="button" class="btn btn-outline btn-facebook  social-sharing">
				<i class="fa fa-facebook"></i> Compartilhar
				<!-- <img src="http://localhost:8888/clickcommerce/vp1/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button data-type="google-plus" type="button" class="btn btn-outline btn-google-plus  social-sharing">
				<i class="fa fa-google-plus"></i> Google+
				<!-- <img src="http://localhost:8888/clickcommerce/vp1/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
							<button data-type="pinterest" type="button" class="btn btn-outline btn-pinterest  social-sharing">
				<i class="fa fa-pinterest"></i>  Pinterest
				<!-- <img src="http://localhost:8888/clickcommerce/vp1/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
			</button>
			</p>
<?php }} ?>

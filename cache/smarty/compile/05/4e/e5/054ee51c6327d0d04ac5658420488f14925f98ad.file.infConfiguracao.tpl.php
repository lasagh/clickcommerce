<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 15:32:47
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/modules/fkcustomers/views/config/infConfiguracao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2043435571583c6a3f4e00c7-16083286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '054ee51c6327d0d04ac5658420488f14925f98ad' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/modules/fkcustomers/views/config/infConfiguracao.tpl',
      1 => 1437679732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2043435571583c6a3f4e00c7-16083286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6a3f55d5c8_39079070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6a3f55d5c8_39079070')) {function content_583c6a3f55d5c8_39079070($_smarty_tpl) {?>
<div class="fkcustomers-panel">

    <div class="fkcustomers-panel-heading">
        <?php echo smartyTranslate(array('s'=>"Informações da Configuração",'mod'=>"fkcustomers"),$_smarty_tpl);?>

    </div>

    <div class="fkcustomers-panel-header">
        <button type="button" value="1" name="btnAjuda" class="fkcustomers-button fkcustomers-float-right" onClick="window.open('http://www.modulosfk.com.br/modulosfk/ajuda/fkcustomers_v1_0_0.pdf','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=900,height=500,left=500,top=150'); return false;">
            <i class="process-icon-help"></i>
            <?php echo smartyTranslate(array('s'=>"Ajuda",'mod'=>"fkcustomers"),$_smarty_tpl);?>

        </button>
    </div>

    <div class="fkcustomers-panel fkcustomers-col-lg-60 fkcustomers-sub-panel" id="fkcustomers_inf_configuracao">

        <div class="fkcustomers-panel-heading">
            <?php echo smartyTranslate(array('s'=>"PHP",'mod'=>"fkcustomers"),$_smarty_tpl);?>

        </div>

        <div class="row fkcustomers-inf-configuracao">
            <label class="fkcustomers-label">
                <?php echo smartyTranslate(array('s'=>"SOAP:",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </label>

            <?php if ($_smarty_tpl->tpl_vars['tab_3']->value['soap']) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tab_3']->value['urlImg'];?>
ok_24.png">
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tab_3']->value['urlImg'];?>
erro_24.png">
                <span class="fkcustomers-color-vermelho"><?php echo $_smarty_tpl->tpl_vars['tab_3']->value['msgSoap'];?>
</span>
            <?php }?>
        </div>
        <div class="row fkcustomers-inf-configuracao">
            <label class="fkcustomers-label">
                <?php echo smartyTranslate(array('s'=>"fopen:",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </label>

            <?php if ($_smarty_tpl->tpl_vars['tab_3']->value['fopen']) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tab_3']->value['urlImg'];?>
ok_24.png">
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tab_3']->value['urlImg'];?>
erro_24.png">
                <span class="fkcustomers-color-vermelho"><?php echo $_smarty_tpl->tpl_vars['tab_3']->value['msgFopen'];?>
</span>
            <?php }?>
        </div>
        <div class="row fkcustomers-inf-configuracao">
            <label class="fkcustomers-label">
                <?php echo smartyTranslate(array('s'=>"OUTPUT_BUFFERING:",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </label>

            <?php if ($_smarty_tpl->tpl_vars['tab_3']->value['outBuffering']) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tab_3']->value['urlImg'];?>
ok_24.png">
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tab_3']->value['urlImg'];?>
erro_24.png">
                <span class="fkcustomers-color-vermelho"><?php echo $_smarty_tpl->tpl_vars['tab_3']->value['msgOutBuffering'];?>
</span>
            <?php }?>
        </div>
    </div>

    <div class="fkcustomers-panel fkcustomers-col-lg-60 fkcustomers-sub-panel">

        <div class="fkcustomers-panel-heading">
            <?php echo smartyTranslate(array('s'=>"Prestashop",'mod'=>"fkcustomers"),$_smarty_tpl);?>

        </div>

        <div class="row fkcustomers-inf-configuracao">
            <label class="fkcustomers-label">
                <?php echo smartyTranslate(array('s'=>"Módulos não Nativos:",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </label>

            <?php if ($_smarty_tpl->tpl_vars['tab_3']->value['modulosNativos']) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tab_3']->value['urlImg'];?>
ok_24.png">
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tab_3']->value['urlImg'];?>
erro_24.png">
                <span class="fkcustomers-color-vermelho"><?php echo $_smarty_tpl->tpl_vars['tab_3']->value['msgModulosNativos'];?>
</span>
            <?php }?>
        </div>
        <div class="row fkcustomers-inf-configuracao">
            <label class="fkcustomers-label">
                <?php echo smartyTranslate(array('s'=>"Overrides:",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </label>

            <?php if ($_smarty_tpl->tpl_vars['tab_3']->value['overrides']) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tab_3']->value['urlImg'];?>
ok_24.png">
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tab_3']->value['urlImg'];?>
erro_24.png">
                <span class="fkcustomers-color-vermelho"><?php echo $_smarty_tpl->tpl_vars['tab_3']->value['msgOverrides'];?>
</span>
            <?php }?>
        </div>

    </div>

</div><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 15:32:47
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/modules/fkcustomers/views/config/configGeral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192319044583c6a3f30c8d7-93131674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b30d00b037ba182617a7dec1809a2b89148c86b7' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/modules/fkcustomers/views/config/configGeral.tpl',
      1 => 1452017256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192319044583c6a3f30c8d7-93131674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_2' => 0,
    'grupo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6a3f4d21a8_79545557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6a3f4d21a8_79545557')) {function content_583c6a3f4d21a8_79545557($_smarty_tpl) {?>﻿
<form id="configuration_form" class="defaultForm  form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['tab_2']->value['formAction'];?>
&origem=configGeral" method="post" enctype="multipart/form-data">

    <div class="fkcustomers-panel" style="border-top-left-radius: 0">

        <div class="fkcustomers-panel-heading">
            <?php echo smartyTranslate(array('s'=>"Configuração",'mod'=>"fkcustomers"),$_smarty_tpl);?>

        </div>

        <div class="fkcustomers-panel-header">
            <button type="button" value="1" name="btnAjuda" class="fkcustomers-button fkcustomers-float-right" onClick="window.open('http://www.fkmodulos.com.br/modulosfk/ajuda/fkcustomers_v1_0_0.pdf','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=900,height=500,left=500,top=150'); return false;">
                <i class="process-icon-help"></i>
                <?php echo smartyTranslate(array('s'=>"Ajuda",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </button>
        </div>

        <div class="fkcustomers-panel fkcustomers-col-lg-70">

            <div class="fkcustomers-panel-heading">
                <?php echo smartyTranslate(array('s'=>"Modo de Operação",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </div>

            <div class="fkcustomers-form">
                <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                <div class="fkcustomers-float-left">
                    <input type="radio" name="fkcustomers_modo" id="fkcustomers_modo" value="1" <?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_modo'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_modo']=='1') {?>checked="checked"<?php }?>>
                </div>
                <label class="fkcustomers-label-right fkcustomers-col-lg-auto">
                    <?php echo smartyTranslate(array('s'=>"Completo",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
            </div>

            <div class="fkcustomers-form">
                <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                <div class="fkcustomers-float-left">
                    <input type="radio" name="fkcustomers_modo" id="fkcustomers_modo" value="2" <?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_modo'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_modo']=='2') {?>checked="checked"<?php }?>>
                </div>
                <label class="fkcustomers-label-right fkcustomers-col-lg-auto">
                    <?php echo smartyTranslate(array('s'=>"Compatibilidade",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
            </div>

        </div>

        <div class="fkcustomers-panel fkcustomers-col-lg-70">

            <div class="fkcustomers-panel-heading">
                <?php echo smartyTranslate(array('s'=>"Provedores de CEP",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </div>

            <div class="fkcustomers-form">
                <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                <div class="fkcustomers-float-left">
                    <input type="radio" name="fkcustomers_ws" value="CO" <?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws']=='CO') {?>checked="checked"<?php }?>>
                </div>
                <label class="fkcustomers-label-right fkcustomers-col-lg-auto">
                    <?php echo smartyTranslate(array('s'=>"Correios",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
            </div>

            <div class="fkcustomers-form">
                <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                <div class="fkcustomers-float-left">
                    <input type="radio" name="fkcustomers_ws" value="RV" <?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws']=='RV') {?>checked="checked"<?php }?>>
                </div>
                <label class="fkcustomers-label-right fkcustomers-col-lg-auto">
                    <?php echo smartyTranslate(array('s'=>"República Virtual",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
            </div>

            <div class="fkcustomers-form">
                <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                <div class="fkcustomers-float-left">
                    <input type="radio" name="fkcustomers_ws" value="BY" <?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws']=='BY') {?>checked="checked"<?php }?>>
                </div>
                <label class="fkcustomers-label-right fkcustomers-col-lg-auto">
                    <?php echo smartyTranslate(array('s'=>"BYJG",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
            </div>
            <div class="fkcustomers-form">
                <label for="fkcustomers_usuarioby" class="fkcustomers-label fkcustomers-col-lg-20">
                    <?php echo smartyTranslate(array('s'=>"Usuário",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
                <div class="fkcustomers-col-lg-15 fkcustomers-float-left">
                    <input type="text" name="fkcustomers_usuarioby" id="fkcustomers_usuarioby" value="<?php if (isset($_POST['fkcustomers_usuarioby'])) {?><?php echo $_POST['fkcustomers_usuarioby'];?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws']=='BY') {?><?php echo $_smarty_tpl->tpl_vars['tab_2']->value['usuario'];?>
<?php }?><?php }?>">
                </div>
            </div>
            <div class="fkcustomers-form">
                <label for="fkcustomers_senhaby" class="fkcustomers-label fkcustomers-col-lg-20">
                    <?php echo smartyTranslate(array('s'=>"Senha",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
                <div class="fkcustomers-col-lg-15 fkcustomers-float-left">
                    <input type="password" name="fkcustomers_senhaby" id="fkcustomers_senhaby" value="<?php if (isset($_POST['fkcustomers_senhaby'])) {?><?php echo $_POST['fkcustomers_senhaby'];?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws']=='BY') {?><?php echo $_smarty_tpl->tpl_vars['tab_2']->value['senha'];?>
<?php }?><?php }?>">
                </div>
            </div>

            <div class="fkcustomers-form">
                <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                <div class="fkcustomers-float-left">
                    <input type="radio" name="fkcustomers_ws" value="AC" <?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws']=='AC') {?>checked="checked"<?php }?>>
                </div>
                <label class="fkcustomers-label-right fkcustomers-col-lg-auto">
                    <?php echo smartyTranslate(array('s'=>"AutoCep",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
            </div>
            <div class="fkcustomers-form">
                <label for="fkcustomers_codigoac" class="fkcustomers-label fkcustomers-col-lg-20">
                    <?php echo smartyTranslate(array('s'=>"Código",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
                <div class="fkcustomers-col-lg-15 fkcustomers-float-left">
                    <input type="text" name="fkcustomers_codigoac" id="fkcustomers_codigoac" value="<?php if (isset($_POST['fkcustomers_codigoac'])) {?><?php echo $_POST['fkcustomers_codigoac'];?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws']=='AC') {?><?php echo $_smarty_tpl->tpl_vars['tab_2']->value['usuario'];?>
<?php }?><?php }?>">
                </div>
            </div>
            <div class="fkcustomers-form">
                <label for="fkcustomers_chaveac" class="fkcustomers-label fkcustomers-col-lg-20">
                    <?php echo smartyTranslate(array('s'=>"Chave",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
                <div class="fkcustomers-col-lg-15 fkcustomers-float-left">
                    <input type="password" name="fkcustomers_chaveac" id="fkcustomers_chaveac" value="<?php if (isset($_POST['fkcustomers_chaveac'])) {?><?php echo $_POST['fkcustomers_chaveac'];?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ws']=='AC') {?><?php echo $_smarty_tpl->tpl_vars['tab_2']->value['senha'];?>
<?php }?><?php }?>">
                </div>
            </div>

        </div>

        <div class="fkcustomers-panel fkcustomers-col-lg-70">

            <div class="fkcustomers-panel-heading">
                <?php echo smartyTranslate(array('s'=>"Grupo de clientes para Pessoa Jurídica",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </div>

            <?php  $_smarty_tpl->tpl_vars['grupo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grupo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab_2']->value['grupo_clientes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grupo']->key => $_smarty_tpl->tpl_vars['grupo']->value) {
$_smarty_tpl->tpl_vars['grupo']->_loop = true;
?>
                <div class="fkcustomers-form">
                    <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                    <div class="fkcustomers-float-left">
                        <input type="radio" name="fkcustomers_grupo" id="fkcustomers_grupo" value="<?php echo $_smarty_tpl->tpl_vars['grupo']->value['id_group'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['grupo']->value['id_group'];?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_grupo'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_grupo']==$_tmp1) {?>checked="checked"<?php }?>>
                    </div>
                    <label class="fkcustomers-label-right fkcustomers-col-lg-auto">
                        <?php echo $_smarty_tpl->tpl_vars['grupo']->value['name'];?>

                    </label>
                </div>
            <?php } ?>

        </div>

        <div class="fkcustomers-panel fkcustomers-col-lg-70">

            <div class="fkcustomers-panel-heading">
                <?php echo smartyTranslate(array('s'=>"DDD Válidos",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </div>

            <div class="fkcustomers-form">
                <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                <div class="fkcustomers-float-left fkcustomers-col-lg-80">
                    <textarea name="fkcustomers_ddd" id="fkcustomers_ddd">
                        <?php if (isset($_POST['fkcustomers_ddd'])) {?><?php echo $_POST['fkcustomers_ddd'];?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ddd'])) {?><?php echo $_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ddd'];?>
<?php }?><?php }?>
                    </textarea>
                </div>
                <div class="fkcustomers-form">
                    <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                    <span><?php echo smartyTranslate(array('s'=>"Informe o DDD entre pipe (|)",'mod'=>"fkcustomers"),$_smarty_tpl);?>
</span>
                </div>
            </div>

        </div>

        <div class="fkcustomers-panel fkcustomers-col-lg-70">

            <div class="fkcustomers-panel-heading">
                <?php echo smartyTranslate(array('s'=>"Configurações Diversas",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </div>

            <div class="fkcustomers-form">
                <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                <div class="fkcustomers-float-left">
                    <input type="checkbox" name="fkcustomers_rg_req" id="fkcustomers_rg_req" value="on" <?php if (isset($_POST['fkcustomers_rg_req'])&&$_POST['fkcustomers_rg_req']=='on') {?>checked="checked"<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_rg_req'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_rg_req']=='on') {?>checked="checked"<?php }?><?php }?>>
                </div>
                <label class="fkcustomers-label-right fkcustomers-col-lg-auto">
                    <?php echo smartyTranslate(array('s'=>"Campo RG obrigatório",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
            </div>

            <div class="fkcustomers-form">
                <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                <div class="fkcustomers-float-left">
                    <input type="checkbox" name="fkcustomers_ie_req" id="fkcustomers_ie_req" value="on" <?php if (isset($_POST['fkcustomers_ie_req'])&&$_POST['fkcustomers_ie_req']=='on') {?>checked="checked"<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ie_req'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_ie_req']=='on') {?>checked="checked"<?php }?><?php }?>>
                </div>
                <label class="fkcustomers-label-right fkcustomers-col-lg-auto">
                    <?php echo smartyTranslate(array('s'=>"Campo IE obrigatório",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
            </div>

            <div class="fkcustomers-form">
                <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                <div class="fkcustomers-float-left">
                    <input type="checkbox" name="fkcustomers_dupl_cpf_cnpj" id="fkcustomers_dupl_cpf_cnpj" value="on" <?php if (isset($_POST['fkcustomers_dupl_cpf_cnpj'])&&$_POST['fkcustomers_dupl_cpf_cnpj']=='on') {?>checked="checked"<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_dupl_cpf_cnpj'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_dupl_cpf_cnpj']=='on') {?>checked="checked"<?php }?><?php }?>>
                </div>
                <label class="fkcustomers-label-right fkcustomers-col-lg-auto">
                    <?php echo smartyTranslate(array('s'=>"Verificar duplicidade de CPF e CNPJ",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
            </div>

            <div class="fkcustomers-form">
                <label class="fkcustomers-label fkcustomers-col-lg-10"></label>
                <div class="fkcustomers-float-left">
                    <input type="checkbox" name="fkcustomers_delcampos" id="fkcustomers_delcampos" value="on" onclick="confirmaDelCampos('Atenção: Você marcou para excluir da tabela os novos campos criados quando o módulo for desinstalado. Confirma?','fkcustomers_delcampos')" <?php if (isset($_POST['fkcustomers_delcampos'])&&$_POST['fkcustomers_delcampos']=='on') {?>checked="checked"<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_delcampos'])&&$_smarty_tpl->tpl_vars['tab_2']->value['fkcustomers_delcampos']=='on') {?>checked="checked"<?php }?><?php }?>>
                </div>
                <label class="fkcustomers-label-right fkcustomers-col-lg-auto">
                    <?php echo smartyTranslate(array('s'=>"Excluir da tabela os novos campos criados quando o módulo for desinstalado",'mod'=>"fkcustomers"),$_smarty_tpl);?>

                </label>
            </div>

        </div>

        <div class="fkcustomers-panel-footer">
            <button type="submit" value="1" name="btnSubmit" class="fkcustomers-button fkcustomers-float-right">
                <i class="process-icon-save"></i>
                <?php echo smartyTranslate(array('s'=>"Salvar",'mod'=>"fkcustomers"),$_smarty_tpl);?>

            </button>
        </div>

    </div>

</form><?php }} ?>

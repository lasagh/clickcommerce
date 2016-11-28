<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 15:33:51
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/modules/fkcustomers/views/front/cpf_cnpj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:970308352583c6a7f248370-40729956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c8b024a174fdb2ac16e655e81919061c1e4df0' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/modules/fkcustomers/views/front/cpf_cnpj.tpl',
      1 => 1446541560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '970308352583c6a7f248370-40729956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'UrlJs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6a7f340553_59738008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6a7f340553_59738008')) {function content_583c6a7f340553_59738008($_smarty_tpl) {?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['UrlJs']->value;?>
fkcustomers_front.js"></script>

<div class="account_creation">
    <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Informações Fiscais','mod'=>'fkcustomers'),$_smarty_tpl);?>
</h3>

    <div class="clearfix">
        <label><?php echo smartyTranslate(array('s'=>'Tipo Pessoa','mod'=>'fkcustomers'),$_smarty_tpl);?>
</label>
        <br>
        <div class="radio-inline">
            <label for="tipo_1">
                <input type="radio" name="tipo" id="tipo_1" value="pf" onclick="procRadioTipo(this);" <?php if (!isset($_POST['tipo'])||isset($_POST['tipo'])&&$_POST['tipo']=='pf') {?> checked="checked"<?php }?>/>
                <?php echo smartyTranslate(array('s'=>'Física','mod'=>'fkcustomers'),$_smarty_tpl);?>

            </label>
        </div>
        <div class="radio-inline">
            <label for="tipo_2">
                <input type="radio" name="tipo" id="tipo_2" value="pj" onclick="procRadioTipo(this);" <?php if (isset($_POST['tipo'])&&$_POST['tipo']=='pj') {?> checked="checked"<?php }?>/>
                <?php echo smartyTranslate(array('s'=>'Jurídica','mod'=>'fkcustomers'),$_smarty_tpl);?>

            </label>
        </div>

        <div class="required form-group" id="fkcustomers_pf" <?php if (!isset($_POST['tipo'])||isset($_POST['tipo'])&&$_POST['tipo']=='pf') {?> style="display:block" <?php } else { ?> style="display:none"<?php }?>>
            <div class="required form-group">
                <label for="fkcustomers_cpf"><?php echo smartyTranslate(array('s'=>'CPF','mod'=>'fkcustomers'),$_smarty_tpl);?>
 <sup>*</sup></label>
                <input type="text" class="is_required form-control" name="fkcustomers_cpf" id="fkcustomers_cpf" value="<?php if (isset($_POST['fkcustomers_cpf'])) {?><?php echo $_POST['fkcustomers_cpf'];?>
<?php }?>"/>
            </div>
            <div class="required form-group">
                <label for="fkcustomers_rg"><?php echo smartyTranslate(array('s'=>'RG','mod'=>'fkcustomers'),$_smarty_tpl);?>
</label>
                <input type="text" class="is_required form-control" name="fkcustomers_rg" id="fkcustomers_rg" value="<?php if (isset($_POST['fkcustomers_rg'])) {?><?php echo $_POST['fkcustomers_rg'];?>
<?php }?>"/>
            </div>
        </div>

        <div class="required form-group" id="fkcustomers_pj" <?php if (isset($_POST['tipo'])&&$_POST['tipo']=='pj') {?> style="display:block" <?php } else { ?> style="display:none"<?php }?>>
            <div class="required form-group">
                <label for="fkcustomers_cnpj"><?php echo smartyTranslate(array('s'=>'CNPJ','mod'=>'fkcustomers'),$_smarty_tpl);?>
 <sup>*</sup></label>
                <input type="text" class="is_required form-control" name="fkcustomers_cnpj" id="fkcustomers_cnpj" value="<?php if (isset($_POST['fkcustomers_cnpj'])) {?><?php echo $_POST['fkcustomers_cnpj'];?>
<?php }?>"/>
            </div>
            <div class="required form-group">
                <label for="fkcustomers_ie"><?php echo smartyTranslate(array('s'=>'IE','mod'=>'fkcustomers'),$_smarty_tpl);?>
</label>
                <input type="text" class="is_required form-control" name="fkcustomers_ie" id="fkcustomers_ie" value="<?php if (isset($_POST['fkcustomers_ie'])) {?><?php echo $_POST['fkcustomers_ie'];?>
<?php }?>"/>
            </div>
        </div>

        
        <input type="hidden" class="text" name="cpf_cnpj" id="cpf_cnpj" value="<?php if (isset($_POST['cpf_cnpj'])) {?><?php echo $_POST['cpf_cnpj'];?>
<?php }?>"/>
        <input type="hidden" class="text" name="rg_ie" id="rg_ie" value="<?php if (isset($_POST['rg_ie'])) {?><?php echo $_POST['rg_ie'];?>
<?php }?>"/>

    </div>

    <div id="fkcustomers_page_subheading">
        <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Suas Informações Pessoais','mod'=>'fkcustomers'),$_smarty_tpl);?>
</h3>
    </div>

</div>
<?php }} ?>

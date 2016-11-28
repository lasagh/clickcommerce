<?php /* Smarty version Smarty-3.1.19, created on 2016-11-28 15:32:47
         compiled from "/Applications/MAMP/htdocs/clickcommerce/vp1/modules/fkcustomers/views/config/mainConfig.tpl" */ ?>
<?php /*%%SmartyHeaderCode:473105804583c6a3f225e29-58369099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cb3d3b2e700647db348a3dabd2e3ca3f3c6e1a9' => 
    array (
      0 => '/Applications/MAMP/htdocs/clickcommerce/vp1/modules/fkcustomers/views/config/mainConfig.tpl',
      1 => 1437677790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '473105804583c6a3f225e29-58369099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabSelect' => 0,
    'class_tab_2' => 0,
    'class_tab_3' => 0,
    'pathInclude' => 0,
    'tab_2' => 0,
    'tab_3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583c6a3f2f4712_46527994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6a3f2f4712_46527994')) {function content_583c6a3f2f4712_46527994($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["class_tab_2"] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars["class_tab_3"] = new Smarty_variable('', null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['tabSelect']->value=="2") {?>
    <?php $_smarty_tpl->tpl_vars["class_tab_2"] = new Smarty_variable("active", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['tabSelect']->value=="3") {?>
    <?php $_smarty_tpl->tpl_vars["class_tab_3"] = new Smarty_variable("active", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["class_tab_2"] = new Smarty_variable("active", null, 0);?>
<?php }?>

<ul class="nav nav-tabs" data-tabs="tabs">
    <li class="<?php echo $_smarty_tpl->tpl_vars['class_tab_2']->value;?>
"><a href="#tab_2" data-toggle="tab"><?php echo smartyTranslate(array('s'=>"Configuração",'mod'=>"fkcustomers"),$_smarty_tpl);?>
</a></li>
    <li class="<?php echo $_smarty_tpl->tpl_vars['class_tab_3']->value;?>
"><a href="#tab_3" data-toggle="tab"><?php echo smartyTranslate(array('s'=>"Informações da Configuração",'mod'=>"fkcustomers"),$_smarty_tpl);?>
</a></li>
</ul>
<div class="tab-content">

    <div class="tab-pane <?php echo $_smarty_tpl->tpl_vars['class_tab_2']->value;?>
" id="tab_2">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['pathInclude']->value).((string)$_smarty_tpl->tpl_vars['tab_2']->value['nameTpl']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="tab-pane <?php echo $_smarty_tpl->tpl_vars['class_tab_3']->value;?>
" id="tab_3">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['pathInclude']->value).((string)$_smarty_tpl->tpl_vars['tab_3']->value['nameTpl']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

</div>


<?php }} ?>

<?php
class AddressController extends AddressControllerCore {
    /*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public function initContent() {
        include_once(_PS_MODULE_DIR_.'fkcustomers/includes/variaveis_smarty.php');
        include_once(_PS_MODULE_DIR_.'fkcustomers/includes/variaveis_cookie.php');
        parent::initContent();
    }
    /*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public function setMedia() {
        parent::setMedia();
        $this->addCSS(_PS_MODULE_DIR_.'fkcustomers/css/fkcustomers_front.css');
        $this->addJS(_PS_JS_DIR_.'jquery/plugins/fancybox/jquery.fancybox.js');
        $this->addJS(_PS_MODULE_DIR_.'fkcustomers/js/jquery.maskedinput.js');
        $this->addJS(_PS_MODULE_DIR_.'fkcustomers/js/fkcustomers_cookie.js');
        $this->addJS(_PS_MODULE_DIR_.'fkcustomers/js/fkcustomers_cpf.js');
        $this->addJS(_PS_MODULE_DIR_.'fkcustomers/js/fkcustomers_cnpj.js');
        $this->addJS(_PS_MODULE_DIR_.'fkcustomers/js/fkcustomers_cep.js');
        $this->addJS(_PS_MODULE_DIR_.'fkcustomers/js/fkcustomers_endereco.js');
        $this->addJS(_PS_MODULE_DIR_.'fkcustomers/js/fkcustomers_front.js');
    }
    /*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    protected function processSubmitAddress() {
        include_once(_PS_MODULE_DIR_.'fkcustomers/models/FKcustomersClass.php');
        $fkcustomersClass = new FKcustomersClass();
        if ( Configuration::get('FKCUSTOMERS_MODO') == '1') {
            if (!Tools::getValue('numend')) {
                $this->errors[] = Tools::displayError('O campo Número é obrigatório.');
            }
        }
        $telefone = Tools::getValue('phone');
        if ($telefone) {
            if (!$fkcustomersClass->validaDDD($telefone)) {
                $this->errors[] = Tools::displayError('DDD do Telefone é inválido.');
            }
        }
        $celular = Tools::getValue('phone_mobile');
        if ($celular) {
            if (!$fkcustomersClass->validaDDD($celular)) {
                $this->errors[] = Tools::displayError('DDD do Celular é inválido.');
            }
        }
        if (count($this->errors)) {
            return;
        }
        parent::processSubmitAddress();
    }
    /*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public function setTemplate($default_template) {
        if ($this->useMobileTheme()) {
            $this->setMobileTemplate($default_template);
        } else {
            $template = $this->getOverrideTemplate();
            if ($template) {
                parent::setTemplate($template);
            }else {
                if (Configuration::get('FKCUSTOMERS_MODO') == '1') {
                    $custom = _PS_MODULE_DIR_.'fkcustomers/views/custom/address.tpl';
                    if (file_exists($custom)) {
                        $tpl = $custom;
                    }else {
                        if (version_compare(_PS_VERSION_, '1.6.0.5', '==')) {
                            $tpl = _PS_MODULE_DIR_ . 'fkcustomers/views/front/v1_6_0_5/address.tpl';
                        }elseif (version_compare(_PS_VERSION_, '1.6.0.6', '==')) {
                            $tpl = _PS_MODULE_DIR_ . 'fkcustomers/views/front/v1_6_0_6/address.tpl';
                        }elseif (version_compare(_PS_VERSION_, '1.6.0.7', '==') or version_compare(_PS_VERSION_, '1.6.0.8', '==')) {
                            $tpl = _PS_MODULE_DIR_ . 'fkcustomers/views/front/v1_6_0_7/address.tpl';
                        }elseif (version_compare(_PS_VERSION_, '1.6.0.9', '==')) {
                            $tpl = _PS_MODULE_DIR_.'fkcustomers/views/front/v1_6_0_9/address.tpl';
                        }elseif (version_compare(_PS_VERSION_, '1.6.0.11', '==')) {
                            $tpl = _PS_MODULE_DIR_.'fkcustomers/views/front/v1_6_0_11/address.tpl';
                        }elseif (version_compare(_PS_VERSION_, '1.6.0.13', '==') or version_compare(_PS_VERSION_, '1.6.0.14', '==')) {
                            $tpl = _PS_MODULE_DIR_.'fkcustomers/views/front/v1_6_0_13/address.tpl';
                        }elseif (version_compare(_PS_VERSION_, '1.6.1.0', '==')) {
                            $tpl = _PS_MODULE_DIR_.'fkcustomers/views/front/v1_6_1_0/address.tpl';
                        }else {
                            $tpl = _PS_MODULE_DIR_.'fkcustomers/views/front/v1_6_1_1/address.tpl';
                        }
                    }
                    parent::setTemplate($tpl);
                }else {
                    parent::setTemplate($default_template);
                }
            }
        }
    }
}
?>

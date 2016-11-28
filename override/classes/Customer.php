<?php
class Customer extends CustomerCore {
    /*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public $tipo;
    /*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public $cpf_cnpj;
    /*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public $rg_ie;
    /*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public function __construct($id = null) {
        self::$definition['fields']['tipo'] = array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => false, 'size' => 2);
        self::$definition['fields']['cpf_cnpj'] = array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => false, 'size' => 20);
        self::$definition['fields']['rg_ie'] = array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => false, 'size' => 20);
        parent::__construct($id);
    }
    
	/*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public function getFields() {
        $add_field = parent::getFields();
        $add_field['tipo'] = pSQL($this->tipo);
        $add_field['cpf_cnpj'] = pSQL($this->cpf_cnpj);
        $add_field['rg_ie'] = pSQL($this->rg_ie);
        return $add_field;
    }
	/*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public function add($autodate = false, $nullValues = true) {
        if (Context::getContext()->controller->controller_type == 'front') {
            if ($this->tipo == 'pj') {
                $this->id_default_group = Configuration::get('FKCUSTOMERS_GRUPO');
            }
        }
        return parent::add();
    }
	/*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public function update($nullValues = false) {
        if (Context::getContext()->controller->controller_type == 'front') {
            if ($this->tipo == 'pj') {
                $this->id_default_group = Configuration::get('FKCUSTOMERS_GRUPO');
            }
            $this->cleanGroups();
            $this->addGroups(array($this->id_default_group));
        }
        return parent::update();
    }
}
?>

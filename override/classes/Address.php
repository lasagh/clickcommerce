<?php
class Address extends AddressCore {
	
	/*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public $numend;
	/*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public $compl;
	
	/*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public  function __construct($id_address = NULL, $id_lang = NULL){
		
        self::$definition['fields']['numend'] = array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => false, 'size' => 20);
        self::$definition['fields']['compl'] = array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 128);
		parent::__construct($id_address);
	}
	
	/*
    * module: fkcustomers
    * date: 2016-11-15 15:51:57
    * version: 1.2.1
    */
    public function getFields(){
		
		$add_field = parent::getFields();
		$add_field['numend'] = pSQL($this->numend);
		$add_field['compl'] = pSQL($this->compl);
		return $add_field;
	}
	
}
?>

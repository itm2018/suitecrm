<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class Sales_OrderViewEdit extends ViewEdit {
	function __construct(){
 		parent::__construct();
 	}

    /**
     * @deprecated deprecated since version 7.6, PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code, use __construct instead
     */
    function Sales_OrderViewEdit(){
        $deprecatedMessage = 'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
        if(isset($GLOBALS['log'])) {
            $GLOBALS['log']->deprecated($deprecatedMessage);
        }
        else {
            trigger_error($deprecatedMessage, E_USER_DEPRECATED);
        }
        self::__construct();
    }


	function display(){
		$this->populateOrderTemplates();
		parent::display();
	}

	function populateOrderTemplates(){
		global $app_list_strings;

		$sql = "SELECT id, name FROM aos_pdf_templates WHERE deleted='0' AND type='Sales_Order'";
		$res = $this->bean->db->query($sql);

		$app_list_strings['template_ddown_c_list'] = array();
		while($row = $this->bean->db->fetchByAssoc($res)){
			$app_list_strings['template_ddown_c_list'][$row['id']] = $row['name'];
		}
	}
}
?>

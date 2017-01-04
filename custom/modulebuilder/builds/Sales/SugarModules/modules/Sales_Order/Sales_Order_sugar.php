<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN Sales_Order
 */

require_once('include/SugarObjects/templates/sale/Sale.php');

class Sales_Order_sugar extends Sale {
	var $new_schema = true;
	var $module_dir = 'Sales_Order';
	var $object_name = 'Sales_Order';
	var $table_name = 'sales_order';
	var $importable = true;
	var $disable_row_level_security = true ; // to ensure that modules created and deployed under CE will continue to function under team security if the instance is upgraded to PRO

	var $id;
	var $name;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $modified_by_name;
	var $created_by;
	var $created_by_name;
	var $description;
	var $deleted;
	var $created_by_link;
	var $modified_user_link;
	var $assigned_user_id;
	var $assigned_user_name;
	var $assigned_user_link;
	var $SecurityGroups;
	var $sales_order_type;
	var $lead_source;
	var $amount;
	var $amount_usdollar;
	var $currency_id;
	var $currency_name;
	var $currency_symbol;
	var $date_closed;
	var $next_step;
	var $sales_stage;
	var $probability;
	var $opportunity_id_c;
	var $order_opportunity;
	var $aos_quotes_id_c;
	var $order_quote;
	var $account_id_c;
	var $order_account;
	var $contact_id_c;
	var $order_contact;
	var $order_address_street;
	var $order_address_state;
	var $order_address_postalcode;
	var $order_address_country;
	var $shipping_address_street;
	var $shipping_address_city;
	var $shipping_address_postalcode;
	var $shipping_address_country;
	var $total_amt;
	var $total_amt_usdollar;
	var $subtotal_amount;
	var $subtotal_amount_usdollar;
	var $discount_amount;
	var $discount_amount_usdollar;
	var $tax_amount;
	var $tax_amount_usdollar;
	var $shipping_tax;
	var $shipping_tax_amt;
	var $shipping_tax_amt_usdollar;
	var $order_date;
	var $order_expected_shipping_date;
	var $order_true_shipping_date;
	var $order_status;
	var $shipping_address_state;
	var $order_address_city;
	var $total_amount;
	var $total_amount_usdollar;
	var $shipping_amount;
	var $shipping_amount_usdollar;
	
	function __construct(){
		parent::__construct();
	}
	
	function bean_implements($interface){
		switch($interface){
			case 'ACL': return true;
		}
		return false;
	}
		
}
?>
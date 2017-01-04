<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-01-01 17:54:31
$dictionary["Sales_Order"]["fields"]["sales_order_accounts"] = array (
  'name' => 'sales_order_accounts',
  'type' => 'link',
  'relationship' => 'sales_order_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_SALES_ORDER_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'sales_order_accountsaccounts_ida',
);
$dictionary["Sales_Order"]["fields"]["sales_order_accounts_name"] = array (
  'name' => 'sales_order_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SALES_ORDER_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'sales_order_accountsaccounts_ida',
  'link' => 'sales_order_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Sales_Order"]["fields"]["sales_order_accountsaccounts_ida"] = array (
  'name' => 'sales_order_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'sales_order_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SALES_ORDER_ACCOUNTS_FROM_SALES_ORDER_TITLE',
);


// created: 2017-01-01 17:54:31
$dictionary["Sales_Order"]["fields"]["sales_order_aos_products_quotes"] = array (
  'name' => 'sales_order_aos_products_quotes',
  'type' => 'link',
  'relationship' => 'sales_order_aos_products_quotes',
  'source' => 'non-db',
  'module' => 'AOS_Products_Quotes',
  'bean_name' => 'AOS_Products_Quotes',
  'side' => 'right',
  'vname' => 'LBL_SALES_ORDER_AOS_PRODUCTS_QUOTES_FROM_AOS_PRODUCTS_QUOTES_TITLE',
);


// created: 2017-01-01 17:54:31
$dictionary["Sales_Order"]["fields"]["sales_order_opportunities"] = array (
  'name' => 'sales_order_opportunities',
  'type' => 'link',
  'relationship' => 'sales_order_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_SALES_ORDER_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'sales_order_opportunitiesopportunities_ida',
);
$dictionary["Sales_Order"]["fields"]["sales_order_opportunities_name"] = array (
  'name' => 'sales_order_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SALES_ORDER_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'sales_order_opportunitiesopportunities_ida',
  'link' => 'sales_order_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Sales_Order"]["fields"]["sales_order_opportunitiesopportunities_ida"] = array (
  'name' => 'sales_order_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'sales_order_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SALES_ORDER_OPPORTUNITIES_FROM_SALES_ORDER_TITLE',
);


// created: 2017-01-01 17:54:31
$dictionary["Sales_Order"]["fields"]["sales_order_users"] = array (
  'name' => 'sales_order_users',
  'type' => 'link',
  'relationship' => 'sales_order_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_SALES_ORDER_USERS_FROM_USERS_TITLE',
  'id_name' => 'sales_order_usersusers_ida',
);
$dictionary["Sales_Order"]["fields"]["sales_order_users_name"] = array (
  'name' => 'sales_order_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SALES_ORDER_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'sales_order_usersusers_ida',
  'link' => 'sales_order_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["Sales_Order"]["fields"]["sales_order_usersusers_ida"] = array (
  'name' => 'sales_order_usersusers_ida',
  'type' => 'link',
  'relationship' => 'sales_order_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SALES_ORDER_USERS_FROM_SALES_ORDER_TITLE',
);


 // created: 2017-01-02 05:38:40
$dictionary['Sales_Order']['fields']['amount']['required']=false;
$dictionary['Sales_Order']['fields']['amount']['inline_edit']=true;
$dictionary['Sales_Order']['fields']['amount']['comments']='Unconverted amount of the sale';
$dictionary['Sales_Order']['fields']['amount']['merge_filter']='disabled';
$dictionary['Sales_Order']['fields']['amount']['enable_range_search']=false;

 

 // created: 2017-01-02 05:38:52
$dictionary['Sales_Order']['fields']['amount_usdollar']['inline_edit']=true;
$dictionary['Sales_Order']['fields']['amount_usdollar']['comments']='Formatted amount of the sale';
$dictionary['Sales_Order']['fields']['amount_usdollar']['merge_filter']='disabled';
$dictionary['Sales_Order']['fields']['amount_usdollar']['enable_range_search']=false;

 

 // created: 2017-01-02 05:46:46
$dictionary['Sales_Order']['fields']['date_closed']['required']=false;
$dictionary['Sales_Order']['fields']['date_closed']['audited']=false;
$dictionary['Sales_Order']['fields']['date_closed']['inline_edit']=true;
$dictionary['Sales_Order']['fields']['date_closed']['comments']='Expected or actual date the sale will close';
$dictionary['Sales_Order']['fields']['date_closed']['merge_filter']='disabled';
$dictionary['Sales_Order']['fields']['date_closed']['enable_range_search']=false;

 

 // created: 2017-01-02 05:51:04

 

 // created: 2017-01-02 05:54:03
$dictionary['Sales_Order']['fields']['order_expected_shipping_date']['required']=true;

 
?>
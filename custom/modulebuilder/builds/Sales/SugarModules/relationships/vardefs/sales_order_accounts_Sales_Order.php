<?php
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

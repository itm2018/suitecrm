<?php
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

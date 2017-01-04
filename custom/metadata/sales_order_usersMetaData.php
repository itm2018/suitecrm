<?php
// created: 2017-01-01 17:54:31
$dictionary["sales_order_users"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sales_order_users' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Sales_Order',
      'rhs_table' => 'sales_order',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sales_order_users_c',
      'join_key_lhs' => 'sales_order_usersusers_ida',
      'join_key_rhs' => 'sales_order_userssales_order_idb',
    ),
  ),
  'table' => 'sales_order_users_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'sales_order_usersusers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sales_order_userssales_order_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sales_order_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sales_order_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sales_order_usersusers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sales_order_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sales_order_userssales_order_idb',
      ),
    ),
  ),
);
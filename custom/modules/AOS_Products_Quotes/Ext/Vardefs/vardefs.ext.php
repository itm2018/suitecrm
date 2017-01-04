<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-01-01 17:54:31
$dictionary["AOS_Products_Quotes"]["fields"]["sales_order_aos_products_quotes"] = array (
  'name' => 'sales_order_aos_products_quotes',
  'type' => 'link',
  'relationship' => 'sales_order_aos_products_quotes',
  'source' => 'non-db',
  'module' => 'Sales_Order',
  'bean_name' => false,
  'vname' => 'LBL_SALES_ORDER_AOS_PRODUCTS_QUOTES_FROM_SALES_ORDER_TITLE',
  'id_name' => 'sales_order_aos_products_quotessales_order_ida',
);
$dictionary["AOS_Products_Quotes"]["fields"]["sales_order_aos_products_quotes_name"] = array (
  'name' => 'sales_order_aos_products_quotes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SALES_ORDER_AOS_PRODUCTS_QUOTES_FROM_SALES_ORDER_TITLE',
  'save' => true,
  'id_name' => 'sales_order_aos_products_quotessales_order_ida',
  'link' => 'sales_order_aos_products_quotes',
  'table' => 'sales_order',
  'module' => 'Sales_Order',
  'rname' => 'name',
);
$dictionary["AOS_Products_Quotes"]["fields"]["sales_order_aos_products_quotessales_order_ida"] = array (
  'name' => 'sales_order_aos_products_quotessales_order_ida',
  'type' => 'link',
  'relationship' => 'sales_order_aos_products_quotes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SALES_ORDER_AOS_PRODUCTS_QUOTES_FROM_AOS_PRODUCTS_QUOTES_TITLE',
);

?>
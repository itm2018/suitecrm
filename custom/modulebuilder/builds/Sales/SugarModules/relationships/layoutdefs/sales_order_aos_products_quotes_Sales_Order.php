<?php
 // created: 2017-01-01 17:54:31
$layout_defs["Sales_Order"]["subpanel_setup"]['sales_order_aos_products_quotes'] = array (
  'order' => 100,
  'module' => 'AOS_Products_Quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SALES_ORDER_AOS_PRODUCTS_QUOTES_FROM_AOS_PRODUCTS_QUOTES_TITLE',
  'get_subpanel_data' => 'sales_order_aos_products_quotes',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

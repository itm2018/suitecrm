<?php
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

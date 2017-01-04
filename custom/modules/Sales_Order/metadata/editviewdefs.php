<?php
$module_name = 'Sales_Order';
$_object_name = 'sales_order';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_SALE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_sale_information' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 'lead_source',
          1 => 'sales_stage',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'next_step',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'order_date',
            'label' => 'LBL_ORDER_DATE',
          ),
          1 => 
          array (
            'name' => 'order_expected_shipping_date',
            'label' => 'LBL_ORDER_EXPECTED_SHIPPING_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'order_true_shipping_date',
            'label' => 'LBL_ORDER_TRUE_SHIPPING_DATE',
          ),
          1 => 
          array (
            'name' => 'order_status',
            'studio' => 'visible',
            'label' => 'LBL_ORDER_STATUS',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
        6 => 
        array (
          0 => '',
          1 => '',
        ),
        7 => 
        array (
          0 => '',
          1 => '',
        ),
        8 => 
        array (
          0 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'order_opportunity',
            'studio' => 'visible',
            'label' => 'LBL_ORDER_OPPORTUNITY',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'order_account',
            'studio' => 'visible',
            'label' => 'LBL_ORDER_ACCOUNT',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'order_contact',
            'studio' => 'visible',
            'label' => 'LBL_ORDER_CONTACT',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'order_address_street',
              'hideLabel' => true,
              'type' => 'address',
              'displayParams' =>
                  array (
                      'key' => 'order',
                      'rows' => 2,
                      'cols' => 30,
                      'maxlength' => 150,
                  ),
            'label' => 'LBL_ORDER_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
              'hideLabel' => true,
              'type' => 'address',
              'displayParams' =>
                  array (
                      'key' => 'shipping',
                      'copy' => 'order',
                      'rows' => 2,
                      'cols' => 30,
                      'maxlength' => 150,
                  ),
            'label' => 'LBL_SHIPPING_ADDRESS_STREET',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 'currency_id',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'line_items',
            'label' => 'LBL_LINE_ITEMS',
          ),
        ),
        2 => 
        array (
          0 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'total_amt',
            'label' => 'LBL_TOTAL_AMT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'discount_amount',
            'label' => 'LBL_DISCOUNT_AMOUNT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'subtotal_amount',
            'label' => 'LBL_SUBTOTAL_AMOUNT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'shipping_amount',
            'label' => 'LBL_SHIPPING_AMOUNT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'shipping_tax',
            'studio' => 'visible',
            'label' => 'LBL_SHIPPING_TAX',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'tax_amount',
            'label' => 'LBL_TAX_AMOUNT',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'total_amount',
            'label' => 'LBL_TOTAL_AMOUNT',
          ),
        ),
      ),
    ),
  ),
);
?>

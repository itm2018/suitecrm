<?php
$module_name = 'Sales_Order';
$_object_name = 'sales_order';
$viewdefs [$module_name] =
    array(
        'EditView' =>
            array(
                'templateMeta' =>
                    array(
                        'maxColumns' => '2',
                        'widths' =>
                            array(
                                0 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'javascript' => '{$PROBABILITY_SCRIPT}',
                        'useTabs' => false,
                        'tabDefs' =>
                            array(
                                'LBL_SALE_INFORMATION' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL1' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                        'syncDetailEditViews' => true,
                    ),
                'panels' =>
                    array(
                        'lbl_sale_information' =>
                            array(
                                0 =>
                                    array(
                                        0 => 'name',
                                        1 => 'currency_id',
                                    ),
                                1 =>
                                    array(
                                        0 => 'sales_order_type',
                                        1 => 'amount',
                                    ),
                                2 =>
                                    array(
                                        0 => 'lead_source',
                                        1 => 'date_closed',
                                    ),
                                3 =>
                                    array(
                                        0 => 'sales_stage',
                                    ),
                                4 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'assigned_user_name',
                                                'displayParams' =>
                                                    array(
                                                        'required' => true,
                                                    ),
                                            ),
                                        1 => 'next_step',
                                    ),
                                5 =>
                                    array(
                                        0 => 'probability',
                                        1 => '',
                                    ),
                                6 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'order_date',
                                                'label' => 'LBL_ORDER_DATE',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'order_expected_shipping_date',
                                                'label' => 'LBL_ORDER_EXPECTED_SHIPPING_DATE',
                                            ),
                                    ),
                                7 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'order_status',
                                                'studio' => 'visible',
                                                'label' => 'LBL_ORDER_STATUS',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'order_true_shipping_date',
                                                'label' => 'LBL_ORDER_TRUE_SHIPPING_DATE',
                                            ),
                                    ),
                                8 =>
                                    array(
                                        0 => 'description',
                                    ),
                            ),
                        'lbl_editview_panel1' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'order_opportunity',
                                                'studio' => 'visible',
                                                'label' => 'LBL_ORDER_OPPORTUNITY',
                                            ),
                                        1 => '',
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'order_account',
                                                'studio' => 'visible',
                                                'label' => 'LBL_ORDER_ACCOUNT',
                                            ),
                                        1 => '',
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'order_contact',
                                                'studio' => 'visible',
                                                'label' => 'LBL_ORDER_CONTACT',
                                            ),
                                        1 => '',
                                    ),

                            ),
                    ),
            ),
    );
?>

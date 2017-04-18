<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$TCA['tx_inventory_domain_model_product'] = array (
'ctrl' => array (
        'title' => 'Inventory',
        'label' => 'name',
),
'columns' => array(
        'name' => array(
        'label' => 'Item Label',
                'config' => array(
                        'type' => 'input',
                        'size' => '20',
                        'eval' => 'trim,required'
                )
        ),
        'description' => array(
                'label' => 'Item Description',
                'config' => array(
                        'type' => 'text',
                        'eval' => 'trim'
                )
        ),
        'quantity' => array(
                'label' => 'Stock Quantity',
                'config' => array(
                        'type' => 'input',
                        'size' => '4',
                        'eval'=> 'int'
                )
        ),
),
'types' => array(
        '0' => array('showitem' => 'name, description, quantity')
)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'MyVendor.' . $_EXTKEY,
    'List',
    'The Inventory List'
);
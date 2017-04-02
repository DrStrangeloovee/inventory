<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'VendorInventory.Vendorinventoryadvanced',
            'Vendorinventoryfe',
            'Inventory'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'VendorInventory.Vendorinventoryadvanced',
            'Vendorinventorycategoryfe',
            'Category'
        );

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'VendorInventory.Vendorinventoryadvanced',
                'web', // Make module a submodule of 'web'
                'vendorinventorybe', // Submodule key
                '', // Position
                [
                    'Inventory' => 'list, show, new, create, edit, update, delete','Category' => 'list, show, new, create, edit, update, delete',
                ],
                [
                    'access' => 'user,group',
					'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/user_mod_vendorinventorybe.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_vendorinventorybe.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'InventoryAdvanced');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_vendorinventoryadvanced_domain_model_inventory', 'EXT:vendorinventoryadvanced/Resources/Private/Language/locallang_csh_tx_vendorinventoryadvanced_domain_model_inventory.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vendorinventoryadvanced_domain_model_inventory');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_vendorinventoryadvanced_domain_model_category', 'EXT:vendorinventoryadvanced/Resources/Private/Language/locallang_csh_tx_vendorinventoryadvanced_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vendorinventoryadvanced_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
            $extKey,
            'tx_vendorinventoryadvanced_domain_model_inventory'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
            $extKey,
            'tx_vendorinventoryadvanced_domain_model_category'
        );

    },
    $_EXTKEY
);

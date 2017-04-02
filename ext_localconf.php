<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'VendorInventory.Vendorinventoryadvanced',
            'Vendorinventoryfe',
            [
                'Inventory' => 'list, show, create, edit, update, delete, showCategory'
            ],
            // non-cacheable actions
            [
                'Inventory' => 'create, update, delete',
                'Category' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'VendorInventory.Vendorinventoryadvanced',
            'Vendorinventorycategoryfe',
            [
                'Category' => 'list, show, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Inventory' => 'create, update, delete',
                'Category' => 'create, update, delete'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					vendorinventoryfe {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_vendorinventoryfe.svg
						title = LLL:EXT:vendorinventoryadvanced/Resources/Private/Language/locallang_db.xlf:tx_vendorinventoryadvanced_domain_model_vendorinventoryfe
						description = LLL:EXT:vendorinventoryadvanced/Resources/Private/Language/locallang_db.xlf:tx_vendorinventoryadvanced_domain_model_vendorinventoryfe.description
						tt_content_defValues {
							CType = list
							list_type = vendorinventoryadvanced_vendorinventoryfe
						}
					}
					vendorinventorycategoryfe {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_vendorinventorycategoryfe.svg
						title = LLL:EXT:vendorinventoryadvanced/Resources/Private/Language/locallang_db.xlf:tx_vendorinventoryadvanced_domain_model_vendorinventorycategoryfe
						description = LLL:EXT:vendorinventoryadvanced/Resources/Private/Language/locallang_db.xlf:tx_vendorinventoryadvanced_domain_model_vendorinventorycategoryfe.description
						tt_content_defValues {
							CType = list
							list_type = vendorinventoryadvanced_vendorinventorycategoryfe
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);

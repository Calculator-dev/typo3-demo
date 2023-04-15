<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'StoreInventory',
    'InventoryList',
    [
        \Vendor\StoreInventory\Controller\StoreInventoryController::class => 'list',
    ],
    // non-cacheable actions
    [
        \Vendor\StoreInventory\Controller\StoreInventoryController::class => '',
    ]
);
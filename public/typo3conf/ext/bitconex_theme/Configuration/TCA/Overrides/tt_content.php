<?php
// Adds the content element to the "Type" dropdown
// typo3conf/ext/myextension/ext_localconf.php
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

// use same identifier as used in TSconfig for icon
$iconRegistry->registerIcon(
   // use same identifier as used in TSconfig for icon
   'my-icon-identifier',
   \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
   // font-awesome identifier ('external-link-square')
   ['name' => 'external-link-square']
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
   'tt_content',
   'CType',
   [
      'yourextensionkey_newcontentelement',
      'yourextensionkey_newcontentelement',
      'content-box'
   ],
   'textmedia',
   'after'
);

$GLOBALS['TCA']['tt_content']['types']['yourextensionkey_newcontentelement'] = [
   'showitem' => '
               --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                   --palette--;;general,
                   --palette--;;headers,
                   bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
               --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                   --palette--;;frames,
                   --palette--;;appearanceLinks,
               --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                   --palette--;;language,
               --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                   --palette--;;hidden,
                   --palette--;;access,
               --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                   categories,
               --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                   rowDescription,
               --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
           ',
   'columnsOverrides' => [
       'bodytext' => [
           'config' => [
               'fixedFont' => true,
           ],
       ],
   ]
];



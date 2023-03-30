<?php

/**
 * Extension Manager/Repository config file for ext "bitconex_theme".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bitconex theme',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99',
            'rte_ckeditor' => '10.4.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Acme\\BitconexTheme\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'haris aksalic',
    'author_email' => 'haris.aksalic@hotmail.com',
    'author_company' => 'Acme',
    'version' => '1.0.0',
];

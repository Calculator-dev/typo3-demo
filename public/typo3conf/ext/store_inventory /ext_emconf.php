<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Store Inventory',
    'description' => 'An extension to manage a stock.',
    'category' => 'plugin',
    'author' => 'John Doe',
    'author_company' => 'John Doe Inc.',
    'author_email' => 'john.doe@example.org',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
        ],
    ],
];
<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Documentation',
    'description' => 'Backend module for TYPO3 to list and show documentation of loaded extensions as well as custom documents.',
    'category' => 'be',
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'state' => 'stable',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '8.7.8',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.1.99',
            'typo3' => '8.7.8',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];

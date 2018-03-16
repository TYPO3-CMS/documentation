<?php
defined('TYPO3_MODE') or die();

// Registers a Backend Module
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'TYPO3.CMS.Documentation',
    'help',
    'documentation',
    'top',
    [
        'Document' => 'list, download, fetch',
    ],
    [
        'access' => 'user,group',
        'icon'   => 'EXT:documentation/Resources/Public/Icons/module-documentation.svg',
        'labels' => 'LLL:EXT:documentation/Resources/Private/Language/locallang_mod.xlf',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'help',
    'cshmanual',
    'top',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Documentation\Controller\HelpController::class . '::handleRequest',
        'name' => 'help_cshmanual',
        'access' => 'user,group',
        'icon' => 'EXT:documentation/Resources/Public/Icons/module-cshmanual.svg',
        'labels' => 'LLL:EXT:documentation/Resources/Private/Language/locallang_mod_help_cshmanual.xlf',
    ]
);

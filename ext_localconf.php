<?php

defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ComsolitSuggest',
    'suggest',
    [
        \Comsolit\ComsolitSuggest\Controller\QueryController::class => 'suggest',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
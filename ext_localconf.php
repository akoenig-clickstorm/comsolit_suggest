<?php

defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ComsolitSuggest',
    'Suggest',
    [
        \Comsolit\ComsolitSuggest\Controller\QueryController::class => 'suggest',
    ]
);

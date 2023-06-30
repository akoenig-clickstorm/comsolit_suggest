<?php

defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Comsolit.comsolit_suggest',
	'Suggest',
    [
		'Query' => 'suggest',

	]
);

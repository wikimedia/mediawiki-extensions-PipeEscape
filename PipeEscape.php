<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'PipeEscape' );

	$wgMessagesDirs['PipeEscape'] = __DIR__ . '/i18n';

	$wgExtensionMessagesFiles['PipeEscapeMagic'] = __DIR__ . '/PipeEscape.i18n.magic.php';

	wfWarn(
		'Deprecated PHP entry point used for the PipeEscape extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the PipeEscape extension requires MediaWiki 1.35+' );
}

<?php
/** \file
* \brief Contains setup code for the Stale Pages Extension.
*/

# Not a valid entry point, skip unless MEDIAWIKI is defined
if (!defined('MEDIAWIKI')) {
	echo "Stale pages extension";
	exit(1);
}

$wgExtensionCredits['specialpage'][] = array(
	'path'           => __FILE__,
	'name'           => 'Stale pages',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:Stale_Pages',
	'author'         => 'Tim Laqua',
	'descriptionmsg' => 'stalepages-desc',
	'version'        => '0.8'
);

$wgMessagesDirs['Stalepages'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['StalepagesAlias'] = __DIR__ . '/StalePages.alias.php';
$wgAutoloadClasses['Stalepages'] = __DIR__ . '/StalePages_body.php';
$wgSpecialPages['StalePages'] = 'Stalepages';

// If the last revision of a page is older than this number of days,
// it will appear on Special:Stalepages
$wgStalePagesDays = 270;

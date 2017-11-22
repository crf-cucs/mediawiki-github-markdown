<?php
/**
 * @author Sean Capaloff-Jones <scapaloff@cs.columbia.edu>>
 * @license GPLv2+
 */
namespace Crf\GithubMarkdown;

/**
 * Github Flavor markdown pre-parser for Mediawiki
 */
class Hooks
{
    /**
     * Prior to MediaWiki parsing, this uses ParseDown to parse any GitHub flavored markdown. 
     * It is compatible with MediaWiki markdown too.
     * @param Parser &$parser 
     * @param string &$text Unprocessed text
     * @param StripState &$strip_state
     * @return bool Always returns true (to enable further processing)
     */
    public static function onParserBeforeInternalParse( &$parser, &$text, &$strip_state ) {
	$parsedown = new \Parsedown();
	$text = $parsedown->text($text);

	// continue to parse
	return true;
    }
}

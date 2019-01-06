<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://github.com/ampproject/amphtml/blob/master/extensions/amp-brid-player/amp-brid-player.md
 * @see amp-brid-player extension .js script
 */
class AmpBridPlayerExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-brid-player");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-brid-player-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

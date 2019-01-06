<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-kaltura-player.html
 * @see amp-kaltura-player extension .js script
 */
class AmpKalturaPlayerExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-kaltura-player");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-kaltura-player-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

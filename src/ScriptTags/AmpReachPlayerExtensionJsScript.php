<?php
namespace AmpHTML\ScriptTags;

/**
 * @link
 * @see amp-reach-player extension .js script
 */
class AmpReachPlayerExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-reach-player");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-reach-player-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

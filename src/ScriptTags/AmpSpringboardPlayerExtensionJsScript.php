<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://github.com/ampproject/amphtml/blob/master/extensions/amp-springboard-player/amp-springboard-player.html
 * @see amp-springboard-player extension .js script
 */
class AmpSpringboardPlayerExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-springboard-player");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-springboard-player-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

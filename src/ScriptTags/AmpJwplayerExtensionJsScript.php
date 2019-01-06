<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://github.com/ampproject/amphtml/blob/master/extensions/amp-jwplayer/amp-jwplayer.md
 * @see amp-jwplayer extension .js script
 */
class AmpJwplayerExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-jwplayer");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-jwplayer-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

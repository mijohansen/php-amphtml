<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-twitter.html
 * @see amp-twitter extension .js script
 */
class AmpTwitterExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-twitter");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-twitter-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-instagram.html
 * @see amp-instagram extension .js script
 */
class AmpInstagramExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-instagram");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-instagram-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

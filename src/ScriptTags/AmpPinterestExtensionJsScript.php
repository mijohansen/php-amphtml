<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-pinterest.html
 * @see amp-pinterest extension .js script
 */
class AmpPinterestExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-pinterest");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-pinterest-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

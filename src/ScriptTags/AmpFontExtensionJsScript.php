<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-font.html
 * @see amp-font extension .js script
 */
class AmpFontExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-font");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-font-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

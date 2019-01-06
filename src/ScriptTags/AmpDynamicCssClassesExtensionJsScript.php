<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-dynamic-css-classes.html
 * @see amp-dynamic-css-classes extension .js script
 */
class AmpDynamicCssClassesExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-dynamic-css-classes");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-dynamic-css-classes-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

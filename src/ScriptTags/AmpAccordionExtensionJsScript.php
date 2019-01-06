<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-accordion.html
 * @see amp-accordion extension .js script
 */
class AmpAccordionExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-accordion");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-accordion-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

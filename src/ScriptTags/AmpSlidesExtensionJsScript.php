<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-slides.html
 * @see amp-slides extension .js script
 */
class AmpSlidesExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-slides");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-slides-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

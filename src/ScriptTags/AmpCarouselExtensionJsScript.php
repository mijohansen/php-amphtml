<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-carousel.html
 * @see amp-carousel extension .js script
 */
class AmpCarouselExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-carousel");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-carousel-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

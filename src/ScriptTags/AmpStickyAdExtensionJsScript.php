<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-sticky-ad.html
 * @see amp-sticky-ad extension .js script
 */
class AmpStickyAdExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-sticky-ad");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-sticky-ad-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

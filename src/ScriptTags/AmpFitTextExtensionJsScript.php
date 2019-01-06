<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-fit-text.html
 * @see amp-fit-text extension .js script
 */
class AmpFitTextExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-fit-text");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-fit-text-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

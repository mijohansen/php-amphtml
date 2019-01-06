<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-vine.html
 * @see amp-vine extension .js script
 */
class AmpVineExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-vine");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-vine-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

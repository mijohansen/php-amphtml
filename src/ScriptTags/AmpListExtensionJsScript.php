<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-list.html
 * @see amp-list extension .js script
 */
class AmpListExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-list");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-list-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

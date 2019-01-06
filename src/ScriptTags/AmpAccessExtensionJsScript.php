<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-access.html
 * @see amp-access extension .js script
 */
class AmpAccessExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-access");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-access-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

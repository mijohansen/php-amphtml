<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-vimeo.html
 * @see amp-vimeo extension .js script
 */
class AmpVimeoExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-vimeo");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-vimeo-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

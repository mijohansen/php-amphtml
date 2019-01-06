<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-brightcove.html
 * @see amp-brightcove extension .js script
 */
class AmpBrightcoveExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-brightcove");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-brightcove-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

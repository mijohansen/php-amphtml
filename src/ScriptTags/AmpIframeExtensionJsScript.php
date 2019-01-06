<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-iframe.html
 * @see amp-iframe extension .js script
 */
class AmpIframeExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-iframe");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-iframe-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

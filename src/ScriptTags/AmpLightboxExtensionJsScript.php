<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-lightbox.html
 * @see amp-lightbox extension .js script
 */
class AmpLightboxExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-lightbox");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-lightbox-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

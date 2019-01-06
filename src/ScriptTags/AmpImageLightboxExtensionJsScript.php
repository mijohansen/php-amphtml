<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-image-lightbox.html
 * @see amp-image-lightbox extension .js script
 */
class AmpImageLightboxExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-image-lightbox");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

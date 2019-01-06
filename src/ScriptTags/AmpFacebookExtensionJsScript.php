<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-facebook.html
 * @see amp-facebook extension .js script
 */
class AmpFacebookExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-facebook");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-facebook-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

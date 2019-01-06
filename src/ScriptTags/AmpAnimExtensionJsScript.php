<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-anim.html
 * @see amp-anim extension .js script
 */
class AmpAnimExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-anim");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-anim-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

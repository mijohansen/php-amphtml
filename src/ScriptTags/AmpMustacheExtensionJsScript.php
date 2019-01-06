<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-mustache.html
 * @see amp-mustache extension .js script
 */
class AmpMustacheExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-template", "amp-mustache");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-mustache-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

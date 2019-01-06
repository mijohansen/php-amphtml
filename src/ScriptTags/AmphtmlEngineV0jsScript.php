<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/spec.html#required-markup
 * @see amphtml engine v0.js script
 */
class AmphtmlEngineV0jsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("src", "https://cdn.ampproject.org/v0.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

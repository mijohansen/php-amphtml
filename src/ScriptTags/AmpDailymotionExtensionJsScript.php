<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-dailymotion.html
 * @see amp-dailymotion extension .js script
 */
class AmpDailymotionExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-dailymotion");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-dailymotion-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

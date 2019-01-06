<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-analytics.html
 * @see amp-analytics extension .js script
 */
class AmpAnalyticsExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-analytics");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-analytics-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}

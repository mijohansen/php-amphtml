<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-analytics.html
 * @see amp-analytics extension .json script
 */
class AmpAnalyticsExtensionJsonScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("type", "application/json");
		parent::__construct($attrs);
	}
}

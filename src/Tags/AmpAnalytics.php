<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpAnalyticsExtensionJsScript;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-analytics.html
 */
class AmpAnalytics extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'amp-analytics';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpAnalyticsExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function config($value) {
		return $this->attr("config", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function type($value) {
		return $this->attr("type", $value);
	}
}

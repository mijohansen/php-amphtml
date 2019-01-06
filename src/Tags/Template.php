<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpMustacheExtensionJsScript;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-mustache.html
 */
class Template extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'template';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("type", "amp-mustache");
		$this->requireScript(AmpMustacheExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function type($value) {
		return $this->attr("type", $value);
	}
}

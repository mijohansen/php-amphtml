<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpAccordionExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-accordion.html
 */
class AmpAccordion extends \AmpHTML\AbstractTag {

	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-accordion';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("animate", "");
		$this->requireScript(AmpAccordionExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function animate($value) {
		return $this->attr("animate", $value);
	}
}

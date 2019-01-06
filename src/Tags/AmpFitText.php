<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpFitTextExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-fit-text.html
 */
class AmpFitText extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-fit-text';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpFitTextExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function maxFontSize($value) {
		return $this->attr("max-font-size", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function minFontSize($value) {
		return $this->attr("min-font-size", $value);
	}
}

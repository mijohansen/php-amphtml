<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpFontExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-font.html
 */
class AmpFont extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-font';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpFontExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fontFamily($value) {
		return $this->attr("font-family", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fontStyle($value) {
		return $this->attr("font-style", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fontVariant($value) {
		return $this->attr("font-variant", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fontWeight($value) {
		return $this->attr("font-weight", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function onErrorAddClass($value) {
		return $this->attr("on-error-add-class", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function onErrorRemoveClass($value) {
		return $this->attr("on-error-remove-class", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function onLoadAddClass($value) {
		return $this->attr("on-load-add-class", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function onLoadRemoveClass($value) {
		return $this->attr("on-load-remove-class", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function timeout($value) {
		return $this->attr("timeout", $value);
	}
}

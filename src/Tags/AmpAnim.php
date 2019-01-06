<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpAnimExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;
use AmpHTML\Traits\MandatorySrcOrSrcset;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-anim.html
 */
class AmpAnim extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use MandatorySrcOrSrcset;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-anim';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("autoplay", "");
		$this->requireScript(AmpAnimExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function alt($value) {
		return $this->attr("alt", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function attribution($value) {
		return $this->attr("attribution", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function autoplay($value) {
		return $this->attr("autoplay", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function controls($value) {
		return $this->attr("controls", $value);
	}
}

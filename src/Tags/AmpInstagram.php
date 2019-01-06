<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpInstagramExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-instagram.html
 */
class AmpInstagram extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-instagram';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpInstagramExtensionJsScript::class);
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
	public function dataShortcode($value) {
		return $this->attr("data-shortcode", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function shortcode($value) {
		return $this->attr("shortcode", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function src($value) {
		return $this->attr("src", $value);
	}
}

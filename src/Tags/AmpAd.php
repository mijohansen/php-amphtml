<?php
namespace AmpHTML\Tags;

use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/amp-ad.html
 */
class AmpAd extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-ad';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
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
	public function json($value) {
		return $this->attr("json", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function src($value) {
		return $this->attr("src", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function type($value) {
		return $this->attr("type", $value);
	}
}

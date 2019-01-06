<?php
namespace AmpHTML\Tags;

use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;
use AmpHTML\Traits\MandatorySrcOrSrcset;

/**
 * @link https://www.ampproject.org/docs/reference/amp-img.html
 */
class AmpImg extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use MandatorySrcOrSrcset;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-img';

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
	public function attribution($value) {
		return $this->attr("attribution", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function placeholder($value) {
		return $this->attr("placeholder", $value);
	}
}
